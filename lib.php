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

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */

//Include menu override
require_once($CFG->dirroot.'/theme/ulm/renderers/core_components.php');

/**
 * Include the Awesome Font.
 */

function theme_ulm_set_fontwww($css) {
    global $CFG, $PAGE;
    if(empty($CFG->themewww)){
        $themewww = $CFG->wwwroot."/theme";
    } else {
        $themewww = $CFG->themewww;
    }
    $tag = '[[setting:fontwww]]';

    $theme = theme_config::load('ulm');
    $css = str_replace($tag, $themewww.'/ulm/fonts/', $css);
    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_ulm_set_logo($css, $logo) {
    global $OUTPUT;
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_ulm_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('ulm');
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Displays the Autohide CSS based on settings value
 *
 * @param string $css
 * @param mixed $autohide
 * @return string
 * This code originally written for the Zebra theme by Danny Wahl
 */
function ulm_set_autohide($css, $autohide) {
	global $CFG;
	if (!empty($CFG->themedir)) {
		$autohideurl = $CFG->themedir . '/ulm/style/autohide.css'; //Pull the full path for autohide css
	} else {
		$autohideurl = $CFG->dirroot . '/theme/ulm/style/autohide.css'; //MDL-36065
	}
    $tag = '[[setting:autohide]]';
    if ($autohide) { //Setting is "YES"
        $rules = file_get_contents($autohideurl);
        $css = $css . $rules;
        $replacement = $rules;
    } else { //Setting is "NO"
        $replacement = null; //NULL so we don't actually output anything to the stylesheet
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


/**
 * get_performance_output() override get_peformance_info()
 *  in moodlelib.php. Returns a string
 * values ready for use.
 *
 * @return string
 */
function ulm_performance_output($param) {

    $html = '<div class="container-fluid performanceinfo"><div class="row-fluid"><h2>Performance Information</h2></div><div class="row-fluid">';
	if (isset($param['realtime'])) $html .= '<div class="span3"><a href="#"><var id="load">'.$param['realtime'].' secs</var><span>Load Time</span></a></div>';
	if (isset($param['memory_total'])) $html .= '<div class="span3"><a href="#"><var id="memory">'.display_size($param['memory_total']).'</var><span>Memory Used</span></a></div>';
    if (isset($param['includecount'])) $html .= '<div class="span3"><a href="#"><var id="included">'.$param['includecount'].' Files </var><span>Included</span></a></div>';
    if (isset($param['dbqueries'])) $html .= '<div class="span3"><a href="#"><var id="db">'.$param['dbqueries'].' </var><span>DB Read/Write</span></a></div>';
    $html .= '</div>';
    $html .= '</div>';

    return $html;
}

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function ulm_set_customcss($css, $customcss) {
    $css = $css . $customcss;

    return $css;
}

/**
 * Returns variables for LESS.
 *
 * We will inject some LESS variables from the settings that the user has defined
 * for the theme. No need to write some custom LESS for this.
 *
 * @param theme_config $theme The theme config object.
 * @return array of LESS variables without the @.
 */
function theme_ulm_less_variables($theme) {
    $variables = array();
    if (!empty($theme->settings->themecolor)) {
        $variables['themecolor'] = $theme->settings->themecolor;
    }
    if (!empty($theme->settings->themesecondarycolor)) {
        $variables['themesecondarycolor'] = $theme->settings->themesecondarycolor;
    }
    if (!empty($theme->settings->darkenedthemecolor)) {
        $variables['darkenedthemecolor'] = $theme->settings->darkenedthemecolor;
    }
    if (!empty($theme->settings->footerbackground)) {
        $variables['footerbackground'] = $theme->settings->footerbackground;
    }
    if (!empty($theme->settings->footercolor)) {
        $variables['footercolor'] = $theme->settings->footercolor;
    }
    if (!empty($theme->settings->lefthighlight)) {
        $variables['lefthighlight'] = $theme->settings->lefthighlight;
    }
    if (!empty($theme->settings->middlehighlight)) {
        $variables['middlehighlight'] = $theme->settings->middlehighlight;
    }
    if (!empty($theme->settings->righthighlight)) {
        $variables['righthighlight'] = $theme->settings->righthighlight;
    }
    if (!empty($theme->settings->footerblockbg)) {
        $variables['footerblockbg'] = $theme->settings->footerblockbg;
    }
    if (!empty($theme->settings->thememenusep)) {
        $variables['thememenusep'] = $theme->settings->thememenusep;
    }
    return $variables;
}

function theme_ulm_process_css($css, $theme) {

    if (!empty($theme->settings->headingfont)) {
        $headingfont = $theme->settings->headingfont;
    } else {
        $headingfont = null;
    }
    $css = theme_ulm_set_headingfont($css, $headingfont);

    if (!empty($theme->settings->bodyfont)) {
        $bodyfont = $theme->settings->bodyfont;
    } else {
        $bodyfont = null;
    }
    $css = theme_ulm_set_bodyfont($css, $bodyfont);

    if (!empty($theme->settings->bodysize)) {
        $bodysize = $theme->settings->bodysize;
    } else {
        $bodysize = null;
    }
    $css = theme_ulm_set_bodysize($css, $bodysize);

    if (!empty($theme->settings->bodyweight)) {
        $bodyweight = $theme->settings->bodyweight;
    } else {
        $bodyweight = null;
    }
    $css = theme_ulm_set_bodyweight($css, $bodyweight);

    // Set the theme color.
    if (!empty($theme->settings->themecolor)) {
        $themecolor = $theme->settings->themecolor;
    } else {
        $themecolor = null;
    }
    $css = theme_ulm_set_themecolor($css, $themecolor);

    // Set the theme hover color.
    if (!empty($theme->settings->themesecondarycolor)) {
        $themesecondarycolor = $theme->settings->themesecondarycolor;
    } else {
        $themesecondarycolor = null;
    }
    $css = theme_ulm_set_themesecondarycolor($css, $themesecondarycolor);

    // Set the footer color.
    if (!empty($theme->settings->darkenedthemecolor)) {
        $darkenedthemecolor = $theme->settings->darkenedthemecolor;
    } else {
        $darkenedthemecolor = null;
    }
    $css = theme_ulm_set_darkenedthemecolor($css, $darkenedthemecolor);

    // Set the footer color.
    if (!empty($theme->settings->footerbackground)) {
        $footerbackground = $theme->settings->footerbackground;
    } else {
        $footerbackground = null;
    }
    $css = theme_ulm_set_footerbackground($css, $footerbackground);

    // Set the footer color.
    if (!empty($theme->settings->footercolor)) {
        $footercolor = $theme->settings->footercolor;
    } else {
        $footercolor = null;
    }
    $css = theme_ulm_set_footercolor($css, $footercolor);

    // Menu Seperator.
    if (!empty($theme->settings->thememenusep)) {
        $thememenusep = $theme->settings->thememenusep;
    } else {
        $thememenusep = null;
    }
    $css = theme_ulm_set_thememenusep($css, $thememenusep);

    // Set the left footer highlight color.
    if (!empty($theme->settings->lefthighlight)) {
        $lefthighlight = $theme->settings->lefthighlight;
    } else {
        $lefthighlight = null;
    }
    $css = theme_ulm_set_lefthighlight($css, $lefthighlight);

    // Set the middle footer highlight color.
    if (!empty($theme->settings->middlehighlight)) {
        $middlehighlight = $theme->settings->middlehighlight;
    } else {
        $middlehighlight = null;
    }
    $css = theme_ulm_set_middlehighlight($css, $middlehighlight);

    // Set the right footer highlight color.
    if (!empty($theme->settings->righthighlight)) {
        $righthighlight = $theme->settings->righthighlight;
    } else {
        $righthighlight = null;
    }
    $css = theme_ulm_set_righthighlight($css, $righthighlight);

    // Set the block footer color.
    if (!empty($theme->settings->footerblockbg)) {
        $footerblockbg = $theme->settings->footerblockbg;
    } else {
        $footerblockbg = null;
    }
    $css = theme_ulm_set_footerblockbg($css, $footerblockbg);

    // Set the navbar seperator.
    if (!empty($theme->settings->navbarsep)) {
        $navbarsep = $theme->settings->navbarsep;
    } else {
        $navbarsep = '/';
    }
    $css = theme_ulm_set_navbarsep($css, $navbarsep);

    //Get the autohide value from settings
    if (!empty($theme->settings->autohide)) {
        $autohide = $theme->settings->autohide;
    } else {
        $autohide = null;
    }
    $css = ulm_set_autohide($css, $autohide);

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = ulm_set_customcss($css, $customcss);

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_ulm_set_logo($css, $logo);

    // Set the background image for the page.
    $setting = 'pagebackground';
    $pagebackground = $theme->setting_file_url($setting, $setting);
    $css = theme_ulm_set_pagebackground($css, $pagebackground, $setting);

    // Set Slide Images.
    $setting = 'slide1image';
    if (!empty($theme->settings->slide1image)) {
    	$slideimage = $theme->setting_file_url($setting, $setting);
    } else {
        $slideimage = null;
    }
    $css = theme_ulm_set_slideimage($css, $slideimage, $setting);

    $setting = 'slide2image';
    if (!empty($theme->settings->slide2image)) {
    	$slideimage = $theme->setting_file_url($setting, $setting);
    } else {
        $slideimage = null;
    }
    $css = theme_ulm_set_slideimage($css, $slideimage, $setting);

    $setting = 'slide3image';
    if (!empty($theme->settings->slide3image)) {
    	$slideimage = $theme->setting_file_url($setting, $setting);
    } else {
        $slideimage = null;
    }
    $css = theme_ulm_set_slideimage($css, $slideimage, $setting);

    $setting = 'slide4image';
    if (!empty($theme->settings->slide4image)) {
    	$slideimage = $theme->setting_file_url($setting, $setting);
    } else {
        $slideimage = null;
    }
    $css = theme_ulm_set_slideimage($css, $slideimage, $setting);

    // Set Marketing Image Height.
    if (!empty($theme->settings->marketingheight)) {
        $marketingheight = $theme->settings->marketingheight;
    } else {
        $marketingheight = null;
    }
    $css = theme_ulm_set_marketingheight($css, $marketingheight);

    // Set Marketing Images.
    $setting = 'marketing1image';
    if (!empty($theme->settings->marketing1image)) {
    	$marketingimage = $theme->setting_file_url($setting, $setting);
    } else {
        $marketingimage = null;
    }
    $css = theme_ulm_set_marketingimage($css, $marketingimage, $setting);

    $setting = 'marketing2image';
    if (!empty($theme->settings->marketing2image)) {
    	$marketingimage = $theme->setting_file_url($setting, $setting);
    } else {
        $marketingimage = null;
    }
    $css = theme_ulm_set_marketingimage($css, $marketingimage, $setting);

    $setting = 'marketing3image';
    if (!empty($theme->settings->marketing3image)) {
    	$marketingimage = $theme->setting_file_url($setting, $setting);
    } else {
        $marketingimage = null;
    }
    $css = theme_ulm_set_marketingimage($css, $marketingimage, $setting);

    $settings = (array)$theme->settings;

    foreach ($settings as $name=>$setting) {
        if (preg_match("/pane[0-9]_\w*color/", $name)) {
            if (!$setting) {
                $setting = '#00566f';
            }
            $css = theme_ulm_set_color($css, $name, $setting);
        }
    }
    // Set the font path.
    $css = theme_ulm_set_fontwww($css);
    return $css;
}

function theme_ulm_set_headingfont($css, $headingfont) {
    $tag = '[[setting:headingfont]]';
    $replacement = $headingfont;
    if (is_null($replacement)) {
        $replacement = 'sans-serif';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_bodyfont($css, $bodyfont) {
    $tag = '[[setting:bodyfont]]';
    $replacement = $bodyfont;
    if (is_null($replacement)) {
        $replacement = 'sans-serif';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_bodysize($css, $bodysize) {
    $tag = '[[setting:bodysize]]';
    $replacement = $bodysize;
    if (is_null($replacement)) {
        $replacement = '13px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_bodyweight($css, $bodyweight) {
    $tag = '[[setting:bodyweight]]';
    $replacement = $bodyweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_themecolor($css, $themecolor) {
    $tag = '[[setting:themecolor]]';
    $replacement = $themecolor;
    if (is_null($replacement)) {
        $replacement = '#ff9933';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_themesecondarycolor($css, $themesecondarycolor) {
    $tag = '[[setting:themesecondarycolor]]';
    $replacement = $themesecondarycolor;
    if (is_null($replacement)) {
        $replacement = '#e07204';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_darkenedthemecolor($css, $darkenedthemecolor) {
    $tag = '[[setting:darkenedthemecolor]]';
    $replacement = $darkenedthemecolor;
    if (is_null($replacement)) {
        $replacement = '#c1c1c1';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_footercolor($css, $footercolor) {
    $tag = '[[setting:footercolor]]';
    $replacement = $footercolor;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_thememenusep($css, $thememenusep) {
    $tag = '[[setting:thememenusep]]';
    $replacement = $thememenusep;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_footerbackground($css, $footerbackground) {
    $tag = '[[setting:footerbackground]]';
    $replacement = $footerbackground;
    if (is_null($replacement)) {
        $replacement = '#7d9aaa';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_lefthighlight($css, $lefthighlight) {
    $tag = '[[setting:lefthighlight]]';
    $replacement = $lefthighlight;
    if (is_null($replacement)) {
        $replacement = '#a5bfce';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_middlehighlight($css, $middlehighlight) {
    $tag = '[[setting:middlehighlight]]';
    $replacement = $middlehighlight;
    if (is_null($replacement)) {
        $replacement = '#C4C0B1';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_righthighlight($css, $righthighlight) {
    $tag = '[[setting:righthighlight]]';
    $replacement = $righthighlight;
    if (is_null($replacement)) {
        $replacement = '#edece8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_footerblockbg($css, $footerblockbg) {
    $tag = '[[setting:footerblockbg]]';
    $replacement = $footerblockbg;
    if (is_null($replacement)) {
        $replacement = '#edece8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_navbarsep($css, $navbarsep) {
    $tag = '[[setting:navbarsep]]';
    $replacement = $navbarsep;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_pagebackground($css, $pagebackground, $setting) {
    global $OUTPUT;
    $tag = '[[setting:pagebackground]]';
    $replacement = $pagebackground;
    if (is_null($replacement)) {
        // Get default image from themes 'bg' folder of the name in $setting.
        $replacement = 'none';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


function theme_ulm_set_slideimage($css, $slideimage, $setting) {
    global $OUTPUT;
    $tag = '[[setting:'.$setting.']]';
    $replacement = $slideimage;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_marketingheight($css, $marketingheight) {
    $tag = '[[setting:marketingheight]]';
    $replacement = $marketingheight;
    if (is_null($replacement)) {
        $replacement = 100;
    }
    $css = str_replace($tag, $replacement.'px', $css);
    return $css;
}

function theme_ulm_set_marketingimage($css, $marketingimage, $setting) {
    global $OUTPUT;
    $tag = '[[setting:'.$setting.']]';
    $replacement = $marketingimage;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_set_color($css, $name, $value) {
    $tag = '[[setting:'.$name.']]';
    $replacement = $value;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_ulm_page_init(moodle_page $page) {
    $page->requires->jquery();
    $page->requires->jquery_plugin('alerts', 'theme_ulm');
    $page->requires->jquery_plugin('cslider', 'theme_ulm');
    $page->requires->jquery_plugin('modernizr', 'theme_ulm');
    $page->requires->jquery_plugin('sticky', 'theme_ulm');
    $page->requires->jquery_plugin('ulm', 'theme_ulm');
}