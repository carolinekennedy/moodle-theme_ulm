<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
      if (!$ADMIN->locate('theme_ulm_gridslider')) {
            $ADMIN->add('theme_ulm', new admin_category('theme_ulm_gridslider', get_string('gridslider', 'theme_ulm')));
      }
// "pane1settings" settingpage
      $temp = new admin_settingpage('theme_ulm_pane1',  get_string('pane1settings', 'theme_ulm'));
      $temp->add(new admin_setting_heading('theme_ulm_gridslider', get_string('gridsliderheadingsub', 'theme_ulm'),
            format_text(get_string('gridsliderdesc' , 'theme_ulm'), FORMAT_MARKDOWN)));

        $name = 'theme_ulm/useonlypane1';
        $title = get_string('useonlypane1', 'theme_ulm');
        $description = get_string('useonlypane1desc', 'theme_ulm');
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $temp->add($setting);

        $name = 'theme_ulm/autosliding';
        $title = get_string('autosliding', 'theme_ulm');
        $description = get_string('autoslidingdesc', 'theme_ulm');
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $temp->add($setting);

        $name = 'theme_ulm/delay';
        $title = get_string('delay', 'theme_ulm');
        $description = get_string('delaydesc', 'theme_ulm');
        $setting = new admin_setting_configtext($name, $title, $description, 5);
        $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_promoitem', get_string('promoitem', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_promoitemimage';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_promoitemimage');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_promoitemtext';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_promoitemurl';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_promoitemcolor';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_promoitemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_promogacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_promonewwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item2', get_string('item2', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_item2image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_item2image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item2text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item2url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item2color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item2itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item2gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item2newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item3', get_string('item3', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_item3image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_item3image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item3text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item3url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item3color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item3itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item3gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item3newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item4', get_string('item4', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_item4image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_item4image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item4text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item4url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item4color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item4itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item4gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item4newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item5', get_string('item5', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_item5image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_item5image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item5text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item5url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item5color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item5itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item5gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item5newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item6', get_string('item6', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_item6image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_item6image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item6text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item6url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item6color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item6itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item6gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item6newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item7', get_string('item7', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane1_item7image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane1_item7image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item7text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item7url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item7color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item7itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item7gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane1_item7newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);
if (!$ADMIN->locate($temp->name)) {
        $ADMIN->add('theme_ulm_gridslider', $temp);
}
      // "pane2settings" settingpage
      $temp = new admin_settingpage('theme_ulm_pane2',  get_string('pane2settings', 'theme_ulm'));

        $temp->add(new admin_setting_heading('theme_ulm_promoitem', get_string('promoitem', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_promoitemimage';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_promoitemimage');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_promoitemtext';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_promoitemurl';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_promoitemcolor';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_promoitemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_promogacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_promonewwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item2', get_string('item2', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_item2image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_item2image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item2text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item2url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item2color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item2itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item2gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item2newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item3', get_string('item3', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_item3image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_item3image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item3text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item3url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item3color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item3itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item3gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item3newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item4', get_string('item4', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_item4image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_item4image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item4text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item4url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item4color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item4itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item4gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item4newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item5', get_string('item5', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_item5image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_item5image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item5text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item5url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item5color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item5itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item5gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item5newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item6', get_string('item6', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_item6image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_item6image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item6text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item6url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item6color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item6itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item6gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item6newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item7', get_string('item7', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane2_item7image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane2_item7image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item7text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item7url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item7color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item7itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item7gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane2_item7newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);
if (!$ADMIN->locate($temp->name)) {
        $ADMIN->add('theme_ulm_gridslider', $temp);
}

      // "pane3settings" settingpage
      $temp = new admin_settingpage('theme_ulm_pane3',  get_string('pane3settings', 'theme_ulm'));

        $temp->add(new admin_setting_heading('theme_ulm_promoitem', get_string('promoitem', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_promoitemimage';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_promoitemimage');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_promoitemtext';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_promoitemurl';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_promoitemcolor';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_promoitemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_promogacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_promonewwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item2', get_string('item2', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_item2image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_item2image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item2text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item2url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item2color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item2itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item2gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item2newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item3', get_string('item3', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_item3image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_item3image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item3text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item3url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item3color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item3itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item3gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item3newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item4', get_string('item4', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_item4image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_item4image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item4text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item4url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item4color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item4itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item4gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item4newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item5', get_string('item5', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_item5image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_item5image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item5text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item5url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item5color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item5itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item5gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item5newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item6', get_string('item6', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_item6image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_item6image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item6text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item6url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item6color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item6itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item6gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item6newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);

        $temp->add(new admin_setting_heading('theme_ulm_item7', get_string('item7', 'theme_ulm'), ''));

            $name = 'theme_ulm/pane3_item7image';
            $title = get_string('image', 'theme_ulm');
            $description = get_string('imagedesc', 'theme_ulm');
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'pane3_item7image');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item7text';
            $title = get_string('text', 'theme_ulm');
            $description = get_string('textdesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item7url';
            $title = get_string('url', 'theme_ulm');
            $description = get_string('urldesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item7color';
            $title = get_string('color', 'theme_ulm');
            $description = get_string('colordesc', 'theme_ulm');
            $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item7itemdescription';
            $title = get_string('itemdescription', 'theme_ulm');
            $description = get_string('itemdescriptiondesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item7gacode';
            $title = get_string('gacode', 'theme_ulm');
            $description = get_string('gacodedesc', 'theme_ulm');
            $setting = new admin_setting_configtext($name, $title, $description, '');
            $temp->add($setting);

            $name = 'theme_ulm/pane3_item7newwindow';
            $title = get_string('newwindow', 'theme_ulm');
            $description = get_string('newwindowdesc', 'theme_ulm');
            $setting = new admin_setting_configcheckbox($name, $title, $description, '');
            $temp->add($setting);
        if (!$ADMIN->locate($temp->name)) {
             $ADMIN->add('theme_ulm_gridslider', $temp);
       }