<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
    // "geneicsettings" settingpage
	$temp = new admin_settingpage('theme_ulm_generic',  get_string('geneicsettings', 'theme_ulm'));

    // Logo file setting.
    $name = 'theme_ulm/logo';
    $title = get_string('logo', 'theme_ulm');
    $description = get_string('logodesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // greytitle setting.
    $name = 'theme_ulm/greytitle';
    $title = get_string('greytitle', 'theme_ulm');
    $description = get_string('greytitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // maintitle setting.
    $name = 'theme_ulm/maintitle';
    $title = get_string('maintitle', 'theme_ulm');
    $description = get_string('maintitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom or standard layout.
    $name = 'theme_ulm/layout';
    $title = get_string('layout', 'theme_ulm');
    $description = get_string('layoutdesc', 'theme_ulm');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //Include the Autohide css rules
    $name = 'theme_ulm/autohide';
    $visiblename = get_string('autohide', 'theme_ulm');
    $title = get_string('autohide', 'theme_ulm');
    $description = get_string('autohidedesc', 'theme_ulm');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $temp->add($setting);

    // Navbar Seperator.
    $name = 'theme_ulm/navbarsep';
    $title = get_string('navbarsep' , 'theme_ulm');
    $description = get_string('navbarsepdesc', 'theme_ulm');
    $nav_thinbracket = get_string('nav_thinbracket', 'theme_ulm');
    $nav_doublebracket = get_string('nav_doublebracket', 'theme_ulm');
    $nav_thickbracket = get_string('nav_thickbracket', 'theme_ulm');
    $nav_slash = get_string('nav_slash', 'theme_ulm');
    $nav_pipe = get_string('nav_pipe', 'theme_ulm');
    $dontdisplay = get_string('dontdisplay', 'theme_ulm');
    $default = '/';
    $choices = array('/'=>$nav_slash, '\f105'=>$nav_thinbracket, '\f101'=>$nav_doublebracket, '\f054'=>$nav_thickbracket, '|'=>$nav_pipe);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Copyright setting.
    $name = 'theme_ulm/copyright';
    $title = get_string('copyright', 'theme_ulm');
    $description = get_string('copyrightdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footnote setting.
    $name = 'theme_ulm/footnote';
    $title = get_string('footnote', 'theme_ulm');
    $description = get_string('footnotedesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_ulm/customcss';
    $title = get_string('customcss', 'theme_ulm');
    $description = get_string('customcssdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}
