<?php 
// $project_root=__DIR__;
// require $project_root.'/smarty-include.php';
include_once('classes.php');
include_once('smarty-include.php');

// delete advert
if (isset($_GET['del'])) {
    $id = (int) $_GET['del'];
    Ads::deleteAdvert($id);
}

// if form was submitted
if (isset($_GET['formSubmit'])) {
    $response = [];
    $id;

    $ad=new Ads($_POST);
    $ad->save();

    $id = $ad->getId();
    $newInstance = AdsStore::instance();
    $response['id'] = $id;
    $response['row'] = $newInstance->getAllAdsFromDb()->getUpdatedAdvert($id);

    echo (json_encode( $response ));
}

// insert advert to form
if ( isset($_GET['id']) ) { 
    $id = (int) $_GET['id'];
    $instance_for_advert = AdsStore::instance();
    $return = $instance_for_advert->getAllAdsFromDb()->advertajax($id); 

    var_dump(  $return  );
}

