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

require_once(dirname(__FILE__).'/setup.php');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- iOS Homescreen Icons -->
    <?php require_once(dirname(__FILE__).'/includes/iosicons.php'); ?>

</head>

<body <?php echo $OUTPUT->body_attributes('one-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php require_once(dirname(__FILE__).'/includes/header.php'); ?>

<header role="banner" class="menu navbar navbar-fixed-top">
	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="fa fa-bar"></span>
        <span class="fa fa-bar"></span>
        <span class="fa fa-bar"></span>
	</a>

    <nav role="navigation" class="navbar-inner container-fluid">
        <div class="nav-collapse collapse">
            <?php echo $OUTPUT->custom_menu(); ?>

            <div class="dd_extra">
	            <ul>
		            <li class="help_btn">
					<a title="<?php echo get_string('help'); ?>" href="<?php echo $hashelp ?>">
						<em><i class="fa fa-question" title="<?php echo get_string('help'); ?>"></i></em><span class="help_text">Help</span>
					</a>
				</li>
				<li class="dd_extra_search">
				    <form action="<?php echo $CFG->wwwroot ?>/course/search.php" method="get">

	                    <div class="searchbtn"><i class="fa fa-search" title="Search"></i></div>

	                    <div id="searchdropdownmenu">
	                    <input type="text" size="12" name="search" alt="<?php echo get_string('searchcourses');; ?>" value="<?php echo get_string('searchcourses');; ?>" onFocus="this.value = this.value=='<?php echo get_string('searchcourses');; ?>'?'':this.value;" onBlur="this.value = this.value==''?'<?php echo get_string('searchcourses');; ?>':this.value;" />
	                    </div>
	                </form>
				</li>
				<li class="dd_extra_login">
				    <?php if (isloggedin()) { ?>
                         <a id="loginbtn" href="<?php echo $CFG->wwwroot;?>/login/logout.php"><i class="fa fa-sign-out" title="<?php echo get_string('logout'); ?>"></i><span class="help_text">Logout</span></a>
                    <?php } else { ?>
                         <a id="loginbtn" href="<?php echo $CFG->wwwroot;?>/login/"><i class="fa fa-sign-in" title="<?php echo get_string('login'); ?>"></i><span class="help_text">Login</span></a>
                    <?php }; ?>
				</li>

	            </ul>

            </div><!--dd_extra -->


            <div id="rightbuttons">

            	<?php if (isloggedin()) { ?>
                         <a id="loginbtn" href="<?php echo $CFG->wwwroot;?>/login/logout.php"><i class="fa fa-sign-out" title="<?php echo get_string('logout'); ?>"></i><span class="help_text">Logout</span></a>
                    <?php } else { ?>
                         <a id="loginbtn" href="<?php echo $CFG->wwwroot;?>/login/"><i class="fa fa-sign-in" title="<?php echo get_string('login'); ?>"></i><span class="help_text">Login</span></a>
                    <?php }; ?>

	            <div id="topsearch">
	                <form action="<?php echo $CFG->wwwroot ?>/course/search.php" method="get">

	                    <div class="searchbtn"><i class="fa fa-search" title="Search"></i></div>

	                    <div id="searchdropdown">
	                    <input type="text" size="12" name="search" alt="<?php echo get_string('searchcourses');; ?>" value="<?php echo get_string('searchcourses');; ?>" onFocus="this.value = this.value=='<?php echo get_string('searchcourses');; ?>'?'':this.value;" onBlur="this.value = this.value==''?'<?php echo get_string('searchcourses');; ?>':this.value;" />
	                    </div>
	                </form>
				</div>
				<li class="help_btn">
					<a title="<?php echo get_string('help'); ?>" href="<?php echo $hashelp ?>">
						<em><i class="fa fa-question" title="<?php echo get_string('help'); ?>"></i></em>
					</a>
				</li>

            </div>

        </div>
    </nav>
</header>

<div id="page-navbar">
    <div id="page-navbar-inner" class="container-fluid">
        <?php echo $OUTPUT->navbar(); ?>
        <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
    </div>
</div>

<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix">
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>

    <?php require_once(dirname(__FILE__).'/includes/alerts.php'); ?>

    <!-- Start Slideshow -->
    <?php
        if ($PAGE->pagelayout == 'frontpage') {
            if($PAGE->theme->settings->toggleslideshow==1) {
                require_once(dirname(__FILE__).'/includes/slideshow.php');
            } else if($PAGE->theme->settings->toggleslideshow==2 && !isloggedin()) {
                require_once(dirname(__FILE__).'/includes/slideshow.php');
            } else if($PAGE->theme->settings->toggleslideshow==3 && isloggedin()) {
                require_once(dirname(__FILE__).'/includes/slideshow.php');
            }

            // Start Frontpage Content -->
            if($PAGE->theme->settings->usefrontcontent ==1) {
                echo $PAGE->theme->settings->frontcontentarea;
                echo '<div class="bor" style="margin-top: 10px;"></div>';
            }
            // End Frontpage Content -->


            // Start Marketing Spots -->
            if($PAGE->theme->settings->togglemarketing==1) {
                require_once(dirname(__FILE__).'/includes/marketingspots.php');
            } else if($PAGE->theme->settings->togglemarketing==2 && !isloggedin()) {
                require_once(dirname(__FILE__).'/includes/marketingspots.php');
            } else if($PAGE->theme->settings->togglemarketing==3 && isloggedin()) {
                require_once(dirname(__FILE__).'/includes/marketingspots.php');
            }
            // End Marketing Spots -->

        }
    ?>
    <!-- End Slideshow -->

    <div id="page-content" class="row-fluid">
        <div id="<?php echo $regionbsid ?>">
            <div class="row-fluid">
                <section id="region-main">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
            </div>
        </div>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

    <!-- Start Google Analytics -->
    <?php if ($hasanalytics) { ?>
        <?php require_once(dirname(__FILE__).'/includes/analytics.php'); ?>
    <?php } ?>
    <!-- End Google Analytics -->

</div>
<footer id="page-footer">
    <div class="container-fluid">
        <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
    </div>
</footer>

<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>

</body>
</html>
