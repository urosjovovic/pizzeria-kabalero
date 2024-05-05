#target photoshop
app.bringToFront();
displayDialogs = DialogModes.NO
function main() {
    if (!app.documents.length) {
        var inputFolder = Folder.selectDialog("Select a folder to process");
        if (inputFolder) {
            var widths = [136, 154, 214, 262, 304, 402, 428, 462, 524, 608, 642, 786]; // Define desired widths here
            processFolder(inputFolder, widths);
            alert("Batch processing complete!");
        } else {
            alert("No folder selected. Exiting script.");
        }
    } else {
        alert("Please close all open documents before running this script.");
    }
}

function processFolder(folder, widths) {
    var files = folder.getFiles();
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (file instanceof Folder) {
            processFolder(file, widths); // Recursively process subfolders
        } else if (file.name.match(/\.(jpg|jpeg|png|webp)$/i)) {
            for (var j = 0; j < widths.length; j++) {
                var width = widths[j];
            processFile(file, width);
        }
        }
    }
}

function processFile(file, width) {
    var doc = open(file);
    if (doc) {
        
            var newHeight = doc.height * width / doc.width;
            doc.resizeImage(UnitValue(width,"px"), UnitValue(newHeight,"px"), null, ResampleMethod.BICUBICSHARPER);
            var newName = file.name.replace(/(\.[^\.]+)$/, "-w" + width + "$1");
            //app.doAction(width,"Resize.ATN")
            var saveFile = new File(file.parent + "/" + newName.replace(/\.[^\.]+$/, ''));
            //saveJPEG(saveFile);
            saveWebP(saveFile, "compressionLossy", 75, true, true, false, false);
        }
        doc.close(SaveOptions.DONOTSAVECHANGES);
    }


function saveJPEG(saveFile) {
    var saveOptions = new JPEGSaveOptions();
    saveOptions.quality = "12";
    saveOptions.formatOptions = FormatOptions.STANDARDBASELINE;
    activeDocument.saveAs(saveFile, saveOptions, true, Extension.LOWERCASE);
}

function saveWebP(saveFile, compType, compValue, xmpData, exifData, psData, asCopy) {
    /*
    v1.3 - 10th February 2024, Stephen Marsh
    https://community.adobe.com/t5/photoshop-ecosystem-discussions/saving-webp-image-by-script/td-p/13642577
    */

    // Ensure that version 2022 or later is being used
    var versionNumber = app.version.split(".");
    var versionCheck = parseInt(versionNumber);
    // Fail
    if (versionCheck < 23) {
        alert("You must use Photoshop 2022 or later to save using native WebP format...");
    // Pass
    } else {
        // Doc and path save variables
        var WebPDocName = activeDocument.name.replace(/\.[^\.]+$/, ''); // Remove file extension
        var WebPSavePath = saveFile + ".webp"; // Change path as needed
        var WebPFile = new File(WebPSavePath); // Create the file object
        
        
        // Check for existing file object
        if (WebPFile.exists) {
            // true = 'No' as default active button
            if (!confirm("File exists, overwrite: Yes or No?", true))
                // throw alert("Script cancelled!");
                throw null;
        }
        

        function s2t(s) {
            return app.stringIDToTypeID(s);
        }
        var descriptor = new ActionDescriptor();
        var descriptor2 = new ActionDescriptor();

        // Compression parameters = "compressionLossless" | "compressionLossy"
        descriptor2.putEnumerated(s2t("compression"), s2t("WebPCompression"), s2t(compType)); // string variable
        var WebPCompIsLossless = false; // set the default flag for compression
        if (WebPCompIsLossless == false) {
            // 0 (lowest lossy quality) - 100 (highest lossy quality)
            descriptor2.putInteger(s2t("quality"), compValue); //  number variable
        }
        
        // Metadata options
        descriptor2.putBoolean(s2t("includeXMPData"), xmpData); // Boolean param moved to function call
        descriptor2.putBoolean(s2t("includeEXIFData"), exifData); // Boolean param moved to function call
        descriptor2.putBoolean(s2t("includePsExtras"), psData); // Boolean param moved to function call
        
        // WebP format and save path
        descriptor.putObject(s2t("as"), s2t("WebPFormat"), descriptor2);
        descriptor.putPath(s2t("in"), WebPFile); // Save path variable
        
        // Save As = false | Save As a Copy = true
        descriptor.putBoolean(s2t("copy"), asCopy); // Boolean param moved to function call
        
        // The extension
        descriptor.putBoolean(s2t("lowerCase"), true);

        // If the doc isn't in RGB mode, convert to sRGB
        if (activeDocument.mode !== DocumentMode.RGB) {
            activeDocument.convertProfile("sRGB IEC61966-2.1", Intent.RELATIVECOLORIMETRIC, true, false);
            activeDocument.changeMode(ChangeMode.RGB);
        }

        // If the doc is in RGB mode, convert to sRGB
        activeDocument.convertProfile("sRGB IEC61966-2.1", Intent.RELATIVECOLORIMETRIC, true, false);

        // Convert to 8 bpc
        activeDocument.bitsPerChannel = BitsPerChannelType.EIGHT;
        
        // Execute the save
        executeAction(s2t("save"), descriptor, DialogModes.NO); // Change NO to ALL for dialog
    }
}

main();
