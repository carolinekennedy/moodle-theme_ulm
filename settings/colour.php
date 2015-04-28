<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
	/* Color Settings */
    $temp = new admin_settingpage('theme_ulm_color', get_string('colorheading', 'theme_ulm'));
    $temp->add(new admin_setting_heading('theme_ulm_color', get_string('colorheadingsub', 'theme_ulm'),
            format_text(get_string('colordesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    // Background Image.
    $name = 'theme_ulm/pagebackground';
    $title = get_string('pagebackground', 'theme_ulm');
    $description = get_string('pagebackgrounddesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme colour setting.
    $name = 'theme_ulm/themecolor';
    $title = get_string('themecolor', 'theme_ulm');
    $description = get_string('themecolordesc', 'theme_ulm');
    $default = '#7d9aaa';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Hover colour setting.
    $name = 'theme_ulm/themesecondarycolor';
    $title = get_string('themesecondarycolor', 'theme_ulm');
    $description = get_string('themesecondarycolordesc', 'theme_ulm');
    $default = '#c4c0b4';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Menu Seperater Colour.
    $name = 'theme_ulm/thememenusep';
    $title = get_string('thememenusep', 'theme_ulm');
    $description = get_string('thememenusepdesc', 'theme_ulm');
    $default = '#abbec8';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Footer background colour setting.
    $name = 'theme_ulm/darkenedthemecolor';
    $title = get_string('darkenedthemecolor', 'theme_ulm');
    $description = get_string('darkenedthemecolordesc', 'theme_ulm');
    $default = '#647b88';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer background colour setting.
    $name = 'theme_ulm/footerbackground';
    $title = get_string('footerbackground', 'theme_ulm');
    $description = get_string('footerbackgrounddesc', 'theme_ulm');
    $default = '#7d9aaa';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer text colour setting.
    $name = 'theme_ulm/footercolor';
    $title = get_string('footercolor', 'theme_ulm');
    $description = get_string('footercolordesc', 'theme_ulm');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Left Footer Block Highlights.
    $name = 'theme_ulm/lefthighlight';
    $title = get_string('lefthighlight', 'theme_ulm');
    $description = get_string('lefthighlightdesc', 'theme_ulm');
    $default = '#8aa4b3';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Middle Footer Block Highlights.
    $name = 'theme_ulm/middlehighlight';
    $title = get_string('middlehighlight', 'theme_ulm');
    $description = get_string('middlehighlightdesc', 'theme_ulm');
    $default = '#C4C0B1';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Right Footer Block Highlights.
    $name = 'theme_ulm/righthighlight';
    $title = get_string('righthighlight', 'theme_ulm');
    $description = get_string('righthighlightdesc', 'theme_ulm');
    $default = '#edece8';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Footer Block Background.
    $name = 'theme_ulm/footerblockbg';
    $title = get_string('footerblockbg', 'theme_ulm');
    $description = get_string('footerblockbgdesc', 'theme_ulm');
    $default = '#8ca6b4';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


 	if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}