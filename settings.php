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

defined('MOODLE_INTERNAL') || die;

if (!$ADMIN->locate('theme_ulm')) {
    $ADMIN->add('themes', new admin_category('theme_ulm', get_string('configtitle', 'theme_ulm')));
}

    require($CFG->dirroot.'/theme/ulm/settings/generic.php');
    require($CFG->dirroot.'/theme/ulm/settings/alerts.php');
    require($CFG->dirroot.'/theme/ulm/settings/custommenu.php');
    require($CFG->dirroot.'/theme/ulm/settings/colour.php');
    require($CFG->dirroot.'/theme/ulm/settings/frontpagecontent.php');
    require($CFG->dirroot.'/theme/ulm/settings/slideshow.php');
    require($CFG->dirroot.'/theme/ulm/settings/imageslide.php');
    require($CFG->dirroot.'/theme/ulm/settings/gridslide.php');
    require($CFG->dirroot.'/theme/ulm/settings/marketingspots.php');
    require($CFG->dirroot.'/theme/ulm/settings/social.php');
    require($CFG->dirroot.'/theme/ulm/settings/mobileapps.php');
    require($CFG->dirroot.'/theme/ulm/settings/analytics.php');

    require($CFG->dirroot.'/theme/ulm/settings/import.php');