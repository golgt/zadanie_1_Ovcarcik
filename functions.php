<?php
function getBannerData() {
    $json = file_get_contents('banner.json');
    return json_decode($json, true);
}
?>