<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
/* User Alerts */
    $temp = new admin_settingpage('theme_ulm_alerts', get_string('alertsheading', 'theme_ulm'));
    $temp->add(new admin_setting_heading('theme_ulm_alerts', get_string('alertsheadingsub', 'theme_ulm'),
            format_text(get_string('alertsdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

    //This is the descriptor for Alert One
    $name = 'theme_ulm/alert1info';
    $heading = get_string('alert1', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_ulm/enable1alert';
    $title = get_string('enablealert', 'theme_ulm');
    $description = get_string('enablealertdesc', 'theme_ulm');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_ulm/alert1type';
    $title = get_string('alerttype' , 'theme_ulm');
    $description = get_string('alerttypedesc', 'theme_ulm');
    $alert_info = get_string('alert_info', 'theme_ulm');
    $alert_warning = get_string('alert_warning', 'theme_ulm');
    $alert_general = get_string('alert_general', 'theme_ulm');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_ulm/alert1title';
    $title = get_string('alerttitle', 'theme_ulm');
    $description = get_string('alerttitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_ulm/alert1text';
    $title = get_string('alerttext', 'theme_ulm');
    $description = get_string('alerttextdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for Alert Two
    $name = 'theme_ulm/alert2info';
    $heading = get_string('alert2', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_ulm/enable2alert';
    $title = get_string('enablealert', 'theme_ulm');
    $description = get_string('enablealertdesc', 'theme_ulm');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_ulm/alert2type';
    $title = get_string('alerttype' , 'theme_ulm');
    $description = get_string('alerttypedesc', 'theme_ulm');
    $alert_info = get_string('alert_info', 'theme_ulm');
    $alert_warning = get_string('alert_warning', 'theme_ulm');
    $alert_general = get_string('alert_general', 'theme_ulm');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_ulm/alert2title';
    $title = get_string('alerttitle', 'theme_ulm');
    $description = get_string('alerttitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_ulm/alert2text';
    $title = get_string('alerttext', 'theme_ulm');
    $description = get_string('alerttextdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for Alert Three
    $name = 'theme_ulm/alert3info';
    $heading = get_string('alert3', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_ulm/enable3alert';
    $title = get_string('enablealert', 'theme_ulm');
    $description = get_string('enablealertdesc', 'theme_ulm');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_ulm/alert3type';
    $title = get_string('alerttype' , 'theme_ulm');
    $description = get_string('alerttypedesc', 'theme_ulm');
    $alert_info = get_string('alert_info', 'theme_ulm');
    $alert_warning = get_string('alert_warning', 'theme_ulm');
    $alert_general = get_string('alert_general', 'theme_ulm');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_ulm/alert3title';
    $title = get_string('alerttitle', 'theme_ulm');
    $description = get_string('alerttitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_ulm/alert3text';
    $title = get_string('alerttext', 'theme_ulm');
    $description = get_string('alerttextdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}
