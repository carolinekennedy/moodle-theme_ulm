<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
/* Social Network Settings */
	$temp = new admin_settingpage('theme_ulm_social', get_string('socialheading', 'theme_ulm'));
	$temp->add(new admin_setting_heading('theme_ulm_social', get_string('socialheadingsub', 'theme_ulm'),
            format_text(get_string('socialdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    // Website url setting.
    $name = 'theme_ulm/website';
    $title = get_string('website', 'theme_ulm');
    $description = get_string('websitedesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Facebook url setting.
    $name = 'theme_ulm/facebook';
    $title = get_string('facebook', 'theme_ulm');
    $description = get_string('facebookdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Flickr url setting.
    $name = 'theme_ulm/flickr';
    $title = get_string('flickr', 'theme_ulm');
    $description = get_string('flickrdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_ulm/twitter';
    $title = get_string('twitter', 'theme_ulm');
    $description = get_string('twitterdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_ulm/googleplus';
    $title = get_string('googleplus', 'theme_ulm');
    $description = get_string('googleplusdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_ulm/linkedin';
    $title = get_string('linkedin', 'theme_ulm');
    $description = get_string('linkedindesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_ulm/pinterest';
    $title = get_string('pinterest', 'theme_ulm');
    $description = get_string('pinterestdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Instagram url setting.
    $name = 'theme_ulm/instagram';
    $title = get_string('instagram', 'theme_ulm');
    $description = get_string('instagramdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // YouTube url setting.
    $name = 'theme_ulm/youtube';
    $title = get_string('youtube', 'theme_ulm');
    $description = get_string('youtubedesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Skype url setting.
    $name = 'theme_ulm/skype';
    $title = get_string('skype', 'theme_ulm');
    $description = get_string('skypedesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // VKontakte url setting.
    $name = 'theme_ulm/vk';
    $title = get_string('vk', 'theme_ulm');
    $description = get_string('vkdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}