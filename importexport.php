<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_ulm
 * @copyright 2013 Synergy Learning
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;

require_once(dirname(__FILE__).'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->libdir.'/formslib.php');
require_login();

$PAGE->set_context(context_system::instance());
$PAGE->set_url($CFG->wwwroot.'/theme/ulm/import.php');
$PAGE->set_heading(get_string('importexportsettings', 'theme_ulm'));
$PAGE->set_pagelayout('admin');

admin_externalpage_setup('theme_ulm_importexport');

require_once($CFG->dirroot.'/theme/ulm/importexport_forms.php');

$importform = new theme_ulm_import_form();

if ($importform->is_cancelled()) {
    //Handle form cancel operation, if cancel button is present on form
} else if ($import = $importform->get_data()) {
	$content = $importform->get_file_content('settingsfile');
	$rows = str_getcsv($content, "\n");
	$import = array();
	$header = null;

	foreach ($rows as $row) {
		$row = str_getcsv($row, ',');
		if (!$header) {
			$header = $row;
		} else {
			$import[] = array_combine($header, $row);
		}
	}
	foreach ($import as $row) {
		$id = $DB->get_field('config_plugins', 'id', array('plugin'=>'theme_ulm', 'name'=>$row['name']));
		$row['id'] = $id;
		$row['value'] = str_replace('\n', "\n", $row['value']);
		$DB->update_record('config_plugins', (object)$row);
	}

	purge_all_caches();

}

$exportform = new theme_ulm_export_form();

if ($exportform->is_cancelled()) {
    //Handle form cancel operation, if cancel button is present on form
} else if ($export= $exportform->get_data()) {

	$sql = "SELECT plugin, name, value FROM {config_plugins} WHERE plugin='theme_ulm'";
	$settings = $DB->get_recordset_sql($sql);

	require_once($CFG->libdir . '/csvlib.class.php');

	$header = array('plugin', 'name', 'value');
    $csvexporter = new csv_export_writer();
    $csvexporter->set_filename('theme_ulm_settings', '.csv');
    $csvexporter->add_data($header);

	foreach ($settings as $setting) {
		$s = (array)$setting;
		foreach ($s as $key => $set) {
			if (empty($set)) {
				$s[$key] = '';
			}
			$s[$key] = str_replace(array("\r\n", "\r", "\n"), '\n', $set);
		}
		$csvexporter->add_data($s);
	}

	$csvexporter->download_file();
}

echo $OUTPUT->header();
echo $OUTPUT->heading($PAGE->heading);

echo $OUTPUT->heading(get_string('importsettings', 'theme_ulm'), 4);
$importform->display();

echo $OUTPUT->heading(get_string('exportsettings', 'theme_ulm'), 4);
$exportform->display();

echo $OUTPUT->footer();