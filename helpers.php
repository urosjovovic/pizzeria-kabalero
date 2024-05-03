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