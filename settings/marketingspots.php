<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
/* Marketing Spot Settings */
	$temp = new admin_settingpage('theme_ulm_marketing', get_string('marketingheading', 'theme_ulm'));
	$temp->add(new admin_setting_heading('theme_ulm_marketing', get_string('marketingheadingsub', 'theme_ulm'),
            format_text(get_string('marketingdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

	// Toggle Marketing Spots.
    $name = 'theme_ulm/togglemarketing';
    $title = get_string('togglemarketing' , 'theme_ulm');
    $description = get_string('togglemarketingdesc', 'theme_ulm');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_ulm');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_ulm');
    $displayafterlogin = get_string('displayafterlogin', 'theme_ulm');
    $dontdisplay = get_string('dontdisplay', 'theme_ulm');
    $default = 'display';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Marketing Spot Image Height
	$name = 'theme_ulm/marketingheight';
	$title = get_string('marketingheight','theme_ulm');
	$description = get_string('marketingheightdesc', 'theme_ulm');
	$default = 100;
	$choices = array(50, 100, 150, 200, 250, 300);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$temp->add($setting);

	//This is the descriptor for Marketing Spot One
    $name = 'theme_ulm/marketing1info';
    $heading = get_string('marketing1', 'theme_ulm');
    $information = get_string('marketinginfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

	//Marketing Spot One.
	$name = 'theme_ulm/marketing1';
    $title = get_string('marketingtitle', 'theme_ulm');
    $description = get_string('marketingtitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing1icon';
    $title = get_string('marketingicon', 'theme_ulm');
    $description = get_string('marketingicondesc', 'theme_ulm');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing1image';
    $title = get_string('marketingimage', 'theme_ulm');
    $description = get_string('marketingimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing1content';
    $title = get_string('marketingcontent', 'theme_ulm');
    $description = get_string('marketingcontentdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing1buttontext';
    $title = get_string('marketingbuttontext', 'theme_ulm');
    $description = get_string('marketingbuttontextdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing1buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_ulm');
    $description = get_string('marketingbuttonurldesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for Marketing Spot Two
    $name = 'theme_ulm/marketing2info';
    $heading = get_string('marketing2', 'theme_ulm');
    $information = get_string('marketinginfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    //Marketing Spot Two.
	$name = 'theme_ulm/marketing2';
    $title = get_string('marketingtitle', 'theme_ulm');
    $description = get_string('marketingtitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing2icon';
    $title = get_string('marketingicon', 'theme_ulm');
    $description = get_string('marketingicondesc', 'theme_ulm');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing2image';
    $title = get_string('marketingimage', 'theme_ulm');
    $description = get_string('marketingimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing2content';
    $title = get_string('marketingcontent', 'theme_ulm');
    $description = get_string('marketingcontentdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing2buttontext';
    $title = get_string('marketingbuttontext', 'theme_ulm');
    $description = get_string('marketingbuttontextdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing2buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_ulm');
    $description = get_string('marketingbuttonurldesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for Marketing Spot Three
    $name = 'theme_ulm/marketing3info';
    $heading = get_string('marketing3', 'theme_ulm');
    $information = get_string('marketinginfodesc', 'theme_ulm');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    //Marketing Spot Three.
	$name = 'theme_ulm/marketing3';
    $title = get_string('marketingtitle', 'theme_ulm');
    $description = get_string('marketingtitledesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing3icon';
    $title = get_string('marketingicon', 'theme_ulm');
    $description = get_string('marketingicondesc', 'theme_ulm');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing3image';
    $title = get_string('marketingimage', 'theme_ulm');
    $description = get_string('marketingimagedesc', 'theme_ulm');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing3content';
    $title = get_string('marketingcontent', 'theme_ulm');
    $description = get_string('marketingcontentdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing3buttontext';
    $title = get_string('marketingbuttontext', 'theme_ulm');
    $description = get_string('marketingbuttontextdesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ulm/marketing3buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_ulm');
    $description = get_string('marketingbuttonurldesc', 'theme_ulm');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}