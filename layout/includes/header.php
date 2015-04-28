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

$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
$haslinkedin    = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
$hasyoutube     = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
$hasflickr      = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
$hasvk          = (empty($PAGE->theme->settings->vk)) ? false : $PAGE->theme->settings->vk;
$haspinterest   = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
$hasinstagram   = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
$hasskype       = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
$hasios         = (empty($PAGE->theme->settings->ios)) ? false : $PAGE->theme->settings->ios;
$hasandroid     = (empty($PAGE->theme->settings->android)) ? false : $PAGE->theme->settings->android;
$haswebsite     = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;

$hasgreytitle    = (empty($PAGE->theme->settings->greytitle)) ? false : $PAGE->theme->settings->greytitle;
$hasmaintitle    = (empty($PAGE->theme->settings->maintitle)) ? false : $PAGE->theme->settings->maintitle;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasfacebook || $hastwitter || $hasgoogleplus || $hasflickr || $hasinstagram || $hasvk || $haslinkedin || $haspinterest || $hasskype || $haslinkedin || $haswebsite || $hasyoutube ) ? true : false;
$hasmobileapps = ($hasios || $hasandroid ) ? true : false;

//$courseheader = $OUTPUT->course_header();

/* Modified to check for IE 7/8. Switch headers to remove backgound-size CSS (in Custom CSS) functionality if true */
$checkuseragent = '';
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $checkuseragent = $_SERVER['HTTP_USER_AGENT'];
}
?>

<?php
// Check if IE7 browser and display message
if (strpos($checkuseragent, 'MSIE 7')) {
	echo get_string('ie7message', 'theme_ulm');
}?>

<?php
if (strpos($checkuseragent, 'MSIE 8') || strpos($checkuseragent, 'MSIE 7')) {?>
    <header id="page-header-IE7-8" class="clearfix navbar navbar-fixed-top">
<?php
} else { ?>
    <header id="page-header" class="clearfix navbar navbar-fixed-top">
<?php
} ?>
    <nav role="navigation" class="navbar-inner">
    <div class="container-fluid">
    <div class="row-fluid">
    <!-- HEADER: LOGO AREA -->

        <?php
        if (!$haslogo) { ?>
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $CFG->wwwroot .'/theme/ulm/pix/logo.svg' ?>" alt="<?php echo $PAGE->heading ?>" /></a>
        <?php } else {
            $logo = $PAGE->theme->setting_file_url('logo', 'logo');
        ?>
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logo ?>" alt="<?php echo $PAGE->heading ?>" /></a>
        <?php
        } ?>

        <?php if ($hasmaintitle) { ?>
            <div class="header-text-container">
                <h2 class="header-text header-left"><?php echo format_text($hasgreytitle); ?></h2>
                <h2 class="header-text header-right"><?php echo format_text($hasmaintitle); ?></h2>
            </div>
        <?php } ?>

        <?php
        // If true, displays the heading and available social links; displays nothing if false.
        if ($hassocialnetworks) {
        ?>
        <div class="span3 pull-right">
        <p id="socialheading"><?php echo get_string('socialnetworks','theme_ulm')?></p>
            <ul class="socials unstyled">
                <?php if ($haswebsite) { ?>
                <li><a href="<?php echo $haswebsite; ?>" class="website"><span class="fa-stack"><i class="fa-sign-blank fa-stack-base"></i><i class="fa-globe fa-light"></i></span></a></li>
                <?php } ?>
                <?php if ($hasgoogleplus) { ?>
                <li><a href="<?php echo $hasgoogleplus; ?>" class="googleplus"><i class="fa-google-plus-sign"></i></a></li>
                <?php } ?>
                <?php if ($hastwitter) { ?>
                <li><a href="<?php echo $hastwitter; ?>" class="twitter"><i class="fa-twitter-sign"></i></a></li>
                <?php } ?>
                <?php if ($hasfacebook) { ?>
                <li><a href="<?php echo $hasfacebook; ?>" class="facebook"><i class="fa-facebook-sign"></i></a></li>
                <?php } ?>
                <?php if ($haslinkedin) { ?>
                <li><a href="<?php echo $haslinkedin; ?>" class="linkedin"><i class="fa-linkedin-sign"></i></a></li>
                <?php } ?>
                <?php if ($hasyoutube) { ?>
                <li><a href="<?php echo $hasyoutube; ?>" class="youtube"><i class="fa-youtube-sign"></i></a></li>
                <?php } ?>
                <?php if ($hasflickr) { ?>
                <li><a href="<?php echo $hasflickr; ?>" class="flickr"><i class="fa-flickr"></i></a></li>
                <?php } ?>
                <?php if ($haspinterest) { ?>
                <li><a href="<?php echo $haspinterest; ?>" class="pinterest"><i class="fa-pinterest-sign"></i></a></li>
                <?php } ?>
                <?php if ($hasinstagram) { ?>
                <li><a href="<?php echo $hasinstagram; ?>" class="instagram"><span class="fa-stack"><i class="fa-sign-blank fa-stack-base"></i><i class="fa-instagram fa-light"></i></span></a></li>
                <?php } ?>
                <?php if ($hasvk) { ?>
                <li><a href="<?php echo $hasvk; ?>" class="vk"><span class="fa-stack"><i class="fa-sign-blank fa-stack-base"></i><i class="fa-vk fa-light"></i></span></a></li>
                <?php } ?>
                <?php if ($hasskype) { ?>
                <li><a href="<?php echo $hasskype; ?>" class="skype"><span class="fa-stack"><i class="fa-sign-blank fa-stack-base"></i><i class="fa-skype fa-light"></i></span></a></li>
                <?php } ?>
	    </ul>
        </div>
        <?php
        }

        // If true, displays the heading and available social links; displays nothing if false.
        if ($hasmobileapps) {
        ?>
        <div class="span2 pull-right">
        <p id="socialheading"><?php echo get_string('mobileappsheading','theme_ulm')?></p>
            <ul class="socials unstyled">
                <?php if ($hasios) { ?>
                <li><a href="<?php echo $hasios; ?>" class="ios"><span class="fa-stack"><i class="fa-sign-blank fa-stack-base"></i><i class="fa-apple fa-light"></i></span></a></li>
                <?php } ?>
                <?php if ($hasandroid) { ?>
                <li><a href="<?php echo $hasandroid; ?>" class="android"><span class="fa-stack"><i class="fa-sign-blank fa-stack-base"></i><i class="fa-android fa-light"></i></span></a></li>
                <?php } ?>
	    </ul>
        </div>
        <?php } ?>

        <?php
        if (!empty($courseheader)) { ?>
            <div id="course-header"><?php echo $courseheader; ?></div>
        <?php } ?>
    </div>
    </nav>
</header>
