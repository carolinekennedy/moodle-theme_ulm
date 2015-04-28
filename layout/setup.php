<?php

$hashiddendock = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('hidden-dock', $OUTPUT));

if ($PAGE->pagelayout == 'frontpage') {
    $hasslide1 = (!empty($PAGE->theme->settings->slide1));
    $hasslide1image = (!empty($PAGE->theme->settings->slide1image));
    $hasslide1caption = (!empty($PAGE->theme->settings->slide1caption));
    $hasslide1url = (!empty($PAGE->theme->settings->slide1url));
    $hasslide2 = (!empty($PAGE->theme->settings->slide2));
    $hasslide2image = (!empty($PAGE->theme->settings->slide2image));
    $hasslide2caption = (!empty($PAGE->theme->settings->slide2caption));
    $hasslide2url = (!empty($PAGE->theme->settings->slide2url));
    $hasslide3 = (!empty($PAGE->theme->settings->slide3));
    $hasslide3image = (!empty($PAGE->theme->settings->slide3image));
    $hasslide3caption = (!empty($PAGE->theme->settings->slide3caption));
    $hasslide3url = (!empty($PAGE->theme->settings->slide3url));
    $hasslide4 = (!empty($PAGE->theme->settings->slide4));
    $hasslide4image = (!empty($PAGE->theme->settings->slide4image));
    $hasslide4caption = (!empty($PAGE->theme->settings->slide4caption));
    $hasslide4url = (!empty($PAGE->theme->settings->slide4url));
    $hasslideshow = ($hasslide1||$hasslide2||$hasslide3||$hasslide4);

    $hasimage1 = (!empty($PAGE->theme->settings->image1image));
    $hasimage1caption = (!empty($PAGE->theme->settings->image1caption));
    $hasimage1url = (!empty($PAGE->theme->settings->image1url));
    $hasimage2 = (!empty($PAGE->theme->settings->image2image));
    $hasimage2caption = (!empty($PAGE->theme->settings->image2caption));
    $hasimage2url = (!empty($PAGE->theme->settings->image2url));
    $hasimage3 = (!empty($PAGE->theme->settings->image3image));
    $hasimage3caption = (!empty($PAGE->theme->settings->image3caption));
    $hasimage3url = (!empty($PAGE->theme->settings->image3url));
    $hasimage4 = (!empty($PAGE->theme->settings->image4image));
    $hasimage4caption = (!empty($PAGE->theme->settings->image4caption));
    $hasimage4url = (!empty($PAGE->theme->settings->image4url));
    $hasimage5 = (!empty($PAGE->theme->settings->image5image));
    $hasimage5caption = (!empty($PAGE->theme->settings->image5caption));
    $hasimage5url = (!empty($PAGE->theme->settings->image5url));
    $hasimage6 = (!empty($PAGE->theme->settings->image6image));
    $hasimage6caption = (!empty($PAGE->theme->settings->image6caption));
    $hasimage6url = (!empty($PAGE->theme->settings->image6url));
    $hasimageslider = ($hasimage1||$hasimage2||$hasimage3||$hasimage4||$hasimage5||$hasimage6);

    $hasmarketing1image = (!empty($PAGE->theme->settings->marketing1image));
    $hasmarketing2image = (!empty($PAGE->theme->settings->marketing2image));
    $hasmarketing3image = (!empty($PAGE->theme->settings->marketing3image));

    /* Slide1 settings */
    $hideonphone = $PAGE->theme->settings->hideonphone;
    if ($hasslide1) {
        $slide1 = $PAGE->theme->settings->slide1;
    }
    if ($hasslide1image) {
        $slide1image = $PAGE->theme->setting_file_url('slide1image', 'slide1image');
    }
    if ($hasslide1caption) {
        $slide1caption = $PAGE->theme->settings->slide1caption;
    }
    if ($hasslide1url) {
        $slide1url = $PAGE->theme->settings->slide1url;
    }

    /* slide2 settings */
    if ($hasslide2) {
        $slide2 = $PAGE->theme->settings->slide2;
    }
    if ($hasslide2image) {
        $slide2image = $PAGE->theme->setting_file_url('slide2image', 'slide2image');
    }
    if ($hasslide2caption) {
        $slide2caption = $PAGE->theme->settings->slide2caption;
    }
    if ($hasslide2url) {
        $slide2url = $PAGE->theme->settings->slide2url;
    }

    /* slide3 settings */
    if ($hasslide3) {
        $slide3 = $PAGE->theme->settings->slide3;
    }
    if ($hasslide3image) {
        $slide3image = $PAGE->theme->setting_file_url('slide3image', 'slide3image');
    }
    if ($hasslide3caption) {
        $slide3caption = $PAGE->theme->settings->slide3caption;
    }
    if ($hasslide3url) {
        $slide3url = $PAGE->theme->settings->slide3url;
    }

    /* slide4 settings */
    if ($hasslide4) {
        $slide4 = $PAGE->theme->settings->slide4;
    }
    if ($hasslide4image) {
        $slide4image = $PAGE->theme->setting_file_url('slide4image', 'slide4image');
    }
    if ($hasslide4caption) {
        $slide4caption = $PAGE->theme->settings->slide4caption;
    }
    if ($hasslide4url) {
        $slide4url = $PAGE->theme->settings->slide4url;
    }

    /* image1 settings */
    if ($hasimage1) {
        $image1image = $PAGE->theme->setting_file_url('image1image', 'image1image');
    }
    if ($hasimage1caption) {
        $image1caption = $PAGE->theme->settings->image1caption;
    }
    if ($hasimage1url) {
        $image1url = $PAGE->theme->settings->image1url;
    }

    /* image2 settings */
    if ($hasimage2) {
        $image2image = $PAGE->theme->setting_file_url('image2image', 'image2image');
    }
    if ($hasimage2caption) {
        $image2caption = $PAGE->theme->settings->image2caption;
    }
    if ($hasimage2url) {
        $image2url = $PAGE->theme->settings->image2url;
    }

    /* image3 settings */
    if ($hasimage3) {
        $image3image = $PAGE->theme->setting_file_url('image3image', 'image3image');
    }
    if ($hasimage3caption) {
        $image3caption = $PAGE->theme->settings->image3caption;
    }
    if ($hasimage3url) {
        $image3url = $PAGE->theme->settings->image3url;
    }

    /* image4 settings */
    if ($hasimage4) {
        $image4image = $PAGE->theme->setting_file_url('image4image', 'image4image');
    }
    if ($hasimage4caption) {
        $image4caption = $PAGE->theme->settings->image4caption;
    }
    if ($hasimage4url) {
        $image4url = $PAGE->theme->settings->image4url;
    }

    /* image5 settings */
    if ($hasimage5) {
        $image5image = $PAGE->theme->setting_file_url('image5image', 'image5image');
    }
    if ($hasimage5caption) {
        $image5caption = $PAGE->theme->settings->image5caption;
    }
    if ($hasimage5url) {
        $image5url = $PAGE->theme->settings->image5url;
    }

    /* image6 settings */
    if ($hasimage6) {
        $image6image = $PAGE->theme->setting_file_url('image6image', 'image6image');
    }
    if ($hasimage6caption) {
        $image6caption = $PAGE->theme->settings->image6caption;
    }
    if ($hasimage6url) {
        $image6url = $PAGE->theme->settings->image6url;
    }
}

$hasboringlayout = (empty($PAGE->theme->settings->layout)) ? false : $PAGE->theme->settings->layout;

$hasanalytics = (empty($PAGE->theme->settings->useanalytics)) ? false : $PAGE->theme->settings->useanalytics;

$hasalert1 = (empty($PAGE->theme->settings->enable1alert)) ? false : $PAGE->theme->settings->enable1alert;
$hasalert2 = (empty($PAGE->theme->settings->enable2alert)) ? false : $PAGE->theme->settings->enable2alert;
$hasalert3 = (empty($PAGE->theme->settings->enable3alert)) ? false : $PAGE->theme->settings->enable3alert;
$alertinfo = '<span class="fa fa-stack"><i class="fa fa-sign-blank icon-stack-base"></i><i class="fa fa-info icon-light"></i></span>';
$alertwarning = '<span class="fa fa-stack"><i class="fa fa-sign-blank icon-stack-base"></i><i class="fa fa-warning-sign icon-light"></i></span>';
$alertsuccess = '<span class="fa fa-stack"><i class="fa fa-sign-blank icon-stack-base"></i><i class="fa fa-bullhorn icon-light"></i></span>';

$haslogo = (!empty($PAGE->theme->settings->logo));

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
$hashelp    = (empty($PAGE->theme->settings->help)) ? false : $PAGE->theme->settings->help;

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}