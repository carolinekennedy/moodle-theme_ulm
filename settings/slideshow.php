<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
	/* Slideshow Widget Settings */
    $temp = new admin_settingpage('theme_ulm_slideshow', get_string('slideshowheading', 'theme_ulm'));
    $temp->add(new admin_setting_heading('theme_ulm_slideshow', get_string('slideshowheadingsub', 'theme_ulm'),
            format_text(get_string('slideshowdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    /*
     * Slide 1
     */

    //This is the descriptor for Slide One
    $name = 'theme_ulm/slide1info';
    $heading = get_string('slide1', 'theme_ulm');
    $information = get_string('slideinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_ulm/slide1';
    $title = get_string('slidetitle', 'theme_ulm');
    $description = get_string('slidetitledesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_ulm/slide1image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/slide1caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/slide1url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 2
     */

    //This is the descriptor for Slide Two
    $name = 'theme_ulm/slide2info';
    $heading = get_string('slide2', 'theme_ulm');
    $information = get_string('slideinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_ulm/slide2';
    $title = get_string('slidetitle', 'theme_ulm');
    $description = get_string('slidetitledesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_ulm/slide2image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/slide2caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/slide2url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 3
     */

    //This is the descriptor for Slide Three
    $name = 'theme_ulm/slide3info';
    $heading = get_string('slide3', 'theme_ulm');
    $information = get_string('slideinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_ulm/slide3';
    $title = get_string('slidetitle', 'theme_ulm');
    $description = get_string('slidetitledesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_ulm/slide3image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/slide3caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/slide3url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 4
     */

    //This is the descriptor for Slide Four
    $name = 'theme_ulm/slide4info';
    $heading = get_string('slide4', 'theme_ulm');
    $information = get_string('slideinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_ulm/slide4';
    $title = get_string('slidetitle', 'theme_ulm');
    $description = get_string('slidetitledesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_ulm/slide4image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/slide4caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/slide4url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}