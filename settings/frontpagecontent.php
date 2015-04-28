<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
$temp = new admin_settingpage('theme_ulm_frontcontent', get_string('frontcontentheading', 'theme_ulm'));

    // Slider Selector.
    $name = 'theme_ulm/sliderselector';
    $title = get_string('sliderselect', 'theme_ulm');
    $description = get_string('sliderselectdesc', 'theme_ulm');
    $default = '1';
    $choices = array(
        '1'=>get_string('noslider', 'theme_ulm'),
        '2'=>get_string('parallaxslider', 'theme_ulm'),
        '3'=>get_string('imageslider', 'theme_ulm'),
        '4'=>get_string('gridslider', 'theme_ulm')
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Toggle Slideshow.
    $name = 'theme_ulm/toggleslideshow';
    $title = get_string('toggleslideshow' , 'theme_ulm');
    $description = get_string('toggleslideshowdesc', 'theme_ulm');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_ulm');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_ulm');
    $displayafterlogin = get_string('displayafterlogin', 'theme_ulm');
    $dontdisplay = get_string('dontdisplay', 'theme_ulm');
    $default = 'alwaysdisplay';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Hide slideshow on phones.
    $name = 'theme_ulm/hideonphone';
    $title = get_string('hideonphone' , 'theme_ulm');
    $description = get_string('hideonphonedesc', 'theme_ulm');
    $display = get_string('alwaysdisplay', 'theme_ulm');
    $dontdisplay = get_string('dontdisplay', 'theme_ulm');
    $default = 'display';
    $choices = array(''=>$display, 'hidden-phone'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_ulm_frontcontent', get_string('frontcontentheadingsub', 'theme_ulm'),
            format_text(get_string('frontcontentdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    // Enable Frontpage Content
    $name = 'theme_ulm/usefrontcontent';
    $title = get_string('usefrontcontent', 'theme_ulm');
    $description = get_string('usefrontcontentdesc', 'theme_ulm');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Frontpage Content
    $name = 'theme_ulm/frontcontentarea';
    $title = get_string('frontcontentarea', 'theme_ulm');
    $description = get_string('frontcontentareadesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/frontcontentimage';
    $title = get_string('frontcontentimage', 'theme_ulm');
    $description = get_string('frontcontentimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontcontentimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}