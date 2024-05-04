#target photoshop
app.bringToFront();
displayDialogs = DialogModes.NO
function main() {
    if (!app.documents.length) {
        var inputFolder = Folder.selectDialog("Select a folder to process");
        if (inputFolder) {
            var widths = [900, 600, 300]; // Define desired widths here
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
        } else if (file.name.match(/\.(jpg|jpeg|png)$/i)) {
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
            var newName = file.name.replace(/(\.[^\.]+)$/, "-fs-w" + width + "$1");
            //app.doAction(width,"Resize.ATN")
            var saveFile = new File(file.parent + "/" + newName);
            saveJPEG(saveFile);
        }
        doc.close(SaveOptions.DONOTSAVECHANGES);
    }


function saveJPEG(saveFile) {
    var saveOptions = new JPEGSaveOptions();
    saveOptions.quality = "12";
    saveOptions.formatOptions = FormatOptions.STANDARDBASELINE;
    activeDocument.saveAs(saveFile, saveOptions, true, Extension.LOWERCASE);
}

main();
