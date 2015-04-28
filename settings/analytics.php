<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
/* Analytics Settings */
    $temp = new admin_settingpage('theme_ulm_analytics', get_string('analyticsheading', 'theme_ulm'));
    $temp->add(new admin_setting_heading('theme_ulm_analytics', get_string('analyticsheadingsub', 'theme_ulm'),
            format_text(get_string('analyticsdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    // Enable Analytics
    $name = 'theme_ulm/useanalytics';
    $title = get_string('useanalytics', 'theme_ulm');
    $description = get_string('useanalyticsdesc', 'theme_ulm');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google Analytics ID
    $name = 'theme_ulm/analyticsid';
    $title = get_string('analyticsid', 'theme_ulm');
    $description = get_string('analyticsiddesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Clean Analytics URL
    $name = 'theme_ulm/analyticsclean';
    $title = get_string('analyticsclean', 'theme_ulm');
    $description = get_string('analyticscleandesc', 'theme_ulm');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}