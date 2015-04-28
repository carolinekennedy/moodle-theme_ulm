<?php
if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}
	/* Custom Menu Settings */
    $temp = new admin_externalpage('theme_ulm_importexport', get_string('importexportsettings', 'theme_ulm'), new moodle_url('/theme/ulm/importexport.php'));

    if (!$ADMIN->locate($temp->name)) {
    $ADMIN->add('theme_ulm', $temp);
}