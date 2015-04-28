<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
$temp = new admin_settingpage('theme_ulm_mobileapps', get_string('mobileappsheading', 'theme_ulm'));
	$temp->add(new admin_setting_heading('theme_ulm_mobileapps', get_string('mobileappsheadingsub', 'theme_ulm'),
            format_text(get_string('mobileappsdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));
    // Android App url setting.
    $name = 'theme_ulm/android';
    $title = get_string('android', 'theme_ulm');
    $description = get_string('androiddesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // iOS App url setting.
    $name = 'theme_ulm/ios';
    $title = get_string('ios', 'theme_ulm');
    $description = get_string('iosdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for iOS Icons
    $name = 'theme_ulm/iosiconinfo';
    $heading = get_string('iosiconinfo', 'theme_ulm');
    $information = get_string('iosiconinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // iPhone Icon.
    $name = 'theme_ulm/iosicon';
    $title = get_string('iosicon', 'theme_ulm');
    $description = get_string('iosicondesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iosicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Android Icon.
    $name = 'theme_ulm/androidicon';
    $title = get_string('androidicon', 'theme_ulm');
    $description = get_string('androidicondesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'androidicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Hi-Res Android Icon.
    $name = 'theme_ulm/hiandroidicon';
    $title = get_string('hiandroidicon', 'theme_ulm');
    $description = get_string('hiandroidicondesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'hiandroidicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}