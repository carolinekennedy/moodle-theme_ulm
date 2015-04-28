<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
	/* imageslider Widget Settings */
    $temp = new admin_settingpage('theme_ulm_imageslider', get_string('imagesliderheading', 'theme_ulm'));
    $temp->add(new admin_setting_heading('theme_ulm_imageslider', get_string('imagesliderheadingsub', 'theme_ulm'),
            format_text(get_string('imagesliderdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    /*
     * Slide 1
     */
    // Image.
    $name = 'theme_ulm/image1image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'image1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/image1caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/image1url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 2
     */
    // Image.
    $name = 'theme_ulm/image2image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'image2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/image2caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/image2url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 3
     */
    // Image.
    $name = 'theme_ulm/image3image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'image3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/image3caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/image3url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 4
     */
    // Image.
    $name = 'theme_ulm/image4image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'image4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/image4caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/image4url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 5
     */
    // Image.
    $name = 'theme_ulm/image5image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'image5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/image5caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/image5url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 6
     */
    // Image.
    $name = 'theme_ulm/image6image';
    $title = get_string('slideimage', 'theme_ulm');
    $description = get_string('slideimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'image6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_ulm/image6caption';
    $title = get_string('slidecaption', 'theme_ulm');
    $description = get_string('slidecaptiondesc', 'theme_ulm');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_ulm/image6url';
    $title = get_string('slideurl', 'theme_ulm');
    $description = get_string('slideurldesc', 'theme_ulm');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}