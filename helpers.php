<?php
function imageSrcSetMenuItem($itemid, $item_images_path_array) {
    try {
        //dd($item_images_path_array);
        if (array_key_exists($itemid, $item_images_path_array)) {
        return 'srcset="'.
        $item_images_path_array[$itemid].'-w136.webp 136w,
        '.$item_images_path_array[$itemid].'-w154.webp 154w,
        '.$item_images_path_array[$itemid].'-w214.webp 214w,
        '.$item_images_path_array[$itemid].'-w262.webp 262w,
        '.$item_images_path_array[$itemid].'-w304.webp 304w,
        '.$item_images_path_array[$itemid].'-w402.webp 402w,
        '.$item_images_path_array[$itemid].'-w428.webp 428w,
        '.$item_images_path_array[$itemid].'-w462.webp 462w,
        '.$item_images_path_array[$itemid].'-w524.webp 524w,
        '.$item_images_path_array[$itemid].'-w608.webp 608w,
        '.$item_images_path_array[$itemid].'-w642.webp 642w,
        '.$item_images_path_array[$itemid].'-w786.webp 786w" 
        sizes="
        (min-width: 1400px) 304px,
        (min-width: 1200px) and (max-width: 1399px) 259px,
        (min-width: 992px) and (max-width: 1199px) 214px,
        (min-width: 768px) and (max-width: 991px) 154px,
        (min-width: 576px) and (max-width: 767px) 244px,
        (max-width: 575px) calc((100vw - 48px) / 2),
        304px"';
    } else {
        // abort();
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function productCardPrintCol6ColMd3($itemid, $item_images_path_array, $item_name, $item_size, $item_price, $item_description) {
    try {
        if (array_key_exists($itemid, $item_images_path_array)) {
            return '
            <div class="col-6 col-md-3">
            <div class="card">'.
            (($item_images_path_array[$itemid] != null) ? '<img class="card-img-top" '.imageSrcSetMenuItem($itemid, $item_images_path_array).' alt="'.$item_name.'">' : '') .'
            <div class="card-body">
            '.(($item_name != null) ? '<h3 class="card-title h4">'.$item_name.'</h3>' : '').'
            '.(($item_size != null) ? '<p class="card-text">'.$item_size.'</p>' : '').'
            '.(($item_price != null) ? '<p class="card-text">'.$item_price.'</p>' : '').'
            '.(($item_description != null) ? '<div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#'.$itemid.'-sastav">
                <b>Sastav</b>
              </button>
              <div id="'.$itemid.'-sastav" class="accordion-collapse collapse border-0">'.$item_description.' </div>
            </div>
            </div>' : '').'
          </div>
            </div>
        </div>';
        } else {
            // abort();
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}