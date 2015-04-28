<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
	/* Custom Menu Settings */
    $temp = new admin_settingpage('theme_ulm_custommenu', get_string('custommenuheading', 'theme_ulm'));

    //This is the descriptor for the following Moodle color settings
    $name = 'theme_ulm/mydashboardinfo';
    $heading = get_string('mydashboardinfo', 'theme_ulm');
    $information = get_string('mydashboardinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Toggle dashboard display in custommenu.
    $name = 'theme_ulm/displaymydashboard';
    $title = get_string('displaymydashboard', 'theme_ulm');
    $description = get_string('displaymydashboarddesc', 'theme_ulm');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for the following Moodle color settings
    $name = 'theme_ulm/mycoursesinfo';
    $heading = get_string('mycoursesinfo', 'theme_ulm');
    $information = get_string('mycoursesinfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Toggle courses display in custommenu.
    $name = 'theme_ulm/displaymycourses';
    $title = get_string('displaymycourses', 'theme_ulm');
    $description = get_string('displaymycoursesdesc', 'theme_ulm');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Set terminology for dropdown course list
	$name = 'theme_ulm/mycoursetitle';
	$title = get_string('mycoursetitle','theme_ulm');
	$description = get_string('mycoursetitledesc', 'theme_ulm');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_ulm'),
		'unit' => get_string('myunits', 'theme_ulm'),
		'class' => get_string('myclasses', 'theme_ulm'),
		'module' => get_string('mymodules', 'theme_ulm')
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	
	// Help url setting.
    $name = 'theme_ulm/help';
    $title = get_string('help', 'theme_ulm');
    $description = get_string('helpdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}