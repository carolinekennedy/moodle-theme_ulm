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
 *
 * @package   theme_ulm
 * @copyright 2013 Synergy Learning
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasiosicon = (!empty($PAGE->theme->settings->iosicon));
$hasandroidicon = (!empty($PAGE->theme->settings->androidicon));
$hashiandroidicon = (!empty($PAGE->theme->settings->hiandroidicon));

if ($hasiosicon) {
    $iosicon = $PAGE->theme->setting_file_url('iosicon', 'iosicon');
} else {
	$iosicon = $OUTPUT->pix_url('homeicon/iosicon', 'theme');
}

if ($hasandroidicon) {
    $androidicon = $PAGE->theme->setting_file_url('androidicon', 'androidicon');
} else {
	$androidicon = $OUTPUT->pix_url('homeicon/android', 'theme');
}

if ($hashiandroidicon) {
    $hiandroidicon = $PAGE->theme->setting_file_url('hiandroidicon', 'hiandroidicon');
} else {
	$hiandroidicon = $OUTPUT->pix_url('homeicon/hiandroid', 'theme');
}
?>

<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="57x57">
<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="72x72">
<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="76x76">
<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="114x114">
<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="120x120">
<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="144x144">
<link rel="apple-touch-icon" href="<?php echo $iosicon ?>" sizes="152x152">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<?php if ($hashiandroidicon) { ?><link rel="icon" sizes="192x192" href="<?php echo $hiandroidicon ?>"><?php } ?>
<?php if ($hasandroidicon) { ?><link rel="icon" sizes="128x128" href="<?php echo $androidicon ?>"<?php } ?>
