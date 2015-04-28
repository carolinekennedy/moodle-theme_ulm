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
 * ulm theme with the underlying Bootstrap theme.
 *
 * @package    theme
 * @subpackage ulm
 * @author     Andrew Davidson
 * @author     Based on code originally written by G J Bernard, Mary Evans, Bas Brands, Stuart Lamour, David Scotson and Julian Ridden.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/theme/bootstrapbase/renderers/core_renderer.php');
require_once($CFG->dirroot.'/message/lib.php');
require_once($CFG->dirroot.'/course/renderer.php');

 class theme_ulm_core_renderer extends theme_bootstrapbase_core_renderer {

 	/*
     * This renders a notification message.
     * Uses bootstrap compatible html.
     */
    public function notification($message, $classes = 'notifyproblem') {
        $message = clean_text($message);
        $type = '';

        if ($classes == 'notifyproblem') {
            $type = 'alert alert-error';
        }
        if ($classes == 'notifysuccess') {
            $type = 'alert alert-success';
        }
        if ($classes == 'notifymessage') {
            $type = 'alert alert-info';
        }
        if ($classes == 'redirectmessage') {
            $type = 'alert alert-block alert-info';
        }
        return "<div class=\"$type\">$message</div>";
    }

    /**
     * Outputs the page's footer
     * @return string HTML fragment
     */
    public function footer() {
        global $CFG, $DB, $USER;

        $output = $this->container_end_all(true);

        $footer = $this->opencontainers->pop('header/footer');

        if (debugging() and $DB and $DB->is_transaction_started()) {
            // TODO: MDL-20625 print warning - transaction will be rolled back
        }

        // Provide some performance info if required
        $performanceinfo = '';
        if (defined('MDL_PERF') || (!empty($CFG->perfdebug) and $CFG->perfdebug > 7)) {
            $perf = get_performance_info();
            if (defined('MDL_PERFTOLOG') && !function_exists('register_shutdown_function')) {
                error_log("PERF: " . $perf['txt']);
            }
            if (defined('MDL_PERFTOFOOT') || debugging() || $CFG->perfdebug > 7) {
                $performanceinfo = ulm_performance_output($perf);
            }
        }

        $footer = str_replace($this->unique_performance_info_token, $performanceinfo, $footer);

        $footer = str_replace($this->unique_end_html_token, $this->page->requires->get_end_code(), $footer);

        $this->page->set_state(moodle_page::STATE_DONE);

        if(!empty($this->page->theme->settings->persistentedit) && property_exists($USER, 'editing') && $USER->editing && !$this->really_editing) {
            $USER->editing = false;
        }

        return $output . $footer;
    }

    /*
     * Overriding the custom_menu function ensures the custom menu is
     * always shown, even if no menu items are configured in the global
     * theme settings page.
     */
    public function custom_menu($custommenuitems = '') {
        global $CFG;

        if (empty($custommenuitems) && !empty($CFG->custommenuitems)) {
            $custommenuitems = $CFG->custommenuitems;
        }
        $custommenu = new theme_ulm_custom_menu($custommenuitems, current_language());
        return $this->theme_ulm_render_custom_menu($custommenu);
    }

    protected function theme_ulm_render_custom_menu(theme_ulm_custom_menu_item $menu) {
        global $CFG, $USER;
        static $menucount = 0;

        // TODO: eliminate this duplicated logic, it belongs in core, not
        // here. See MDL-39565.
        $addlangmenu = true;
        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2
            or empty($CFG->langmenu)
            or ($this->page->course != SITEID and !empty($this->page->course->lang))) {
            $addlangmenu = false;
        }

        $hasdisplaymydashboard = (empty($this->page->theme->settings->displaymydashboard)) ? false : $this->page->theme->settings->displaymydashboard;
        if (!$menu->has_children() && $addlangmenu === false && !$hasdisplaymydashboard) {
            return '';
        }

        // Add 'My Moodle' item
        $mymoodleurl = new moodle_url('/my/index.php');
        $branchlabel = '<em><i class="fa fa-home"></i><span class="mobileonly">'.get_string('myhome').'</span></em>';
        $menu->add($branchlabel, $mymoodleurl, null, get_string('mymoodle', 'theme_ulm'), 1000);

    	/*
    	* This code replaces adds the current enrolled
    	* courses to the custommenu.
    	*/
    	$hasdisplaymycourses = (empty($this->page->theme->settings->displaymycourses)) ? false : $this->page->theme->settings->displaymycourses;
        if (isloggedin() && $hasdisplaymycourses) {
        	$mycoursetitle = $this->page->theme->settings->mycoursetitle;
            if ($mycoursetitle == 'module') {
				$branchlabel = '<i class="fa fa-graduation-cap"></i>'.get_string('mymodules', 'theme_ulm');
				$branchtitle = get_string('mymodules', 'theme_ulm');
			} else if ($mycoursetitle == 'unit') {
				$branchlabel = '<i class="fa-graduation-cap"></i>'.get_string('myunits', 'theme_ulm');
				$branchtitle = get_string('myunits', 'theme_ulm');
			} else if ($mycoursetitle == 'class') {
				$branchlabel = '<i class="fa fa-graduation-cap"></i>'.get_string('myclasses', 'theme_ulm');
				$branchtitle = get_string('myclasses', 'theme_ulm');
			} else {
				$branchlabel = '<i class="fa fa-graduation-cap"></i>'.get_string('mycourses', 'theme_ulm');
				$branchtitle = get_string('mycourses', 'theme_ulm');
			}
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 1001;

            $branch = $menu->add($branchlabel, $branchurl, null, $branchtitle, $branchsort);
 			if ($courses = enrol_get_my_courses(NULL, 'fullname ASC')) {
 				foreach ($courses as $course) {
 					if ($course->visible){
 						$branch->add(format_string($course->fullname), new moodle_url('/course/view.php?id='.$course->id), format_string($course->shortname));
 					}
 				}
 			} else {
 				$branch->add('<em>'.get_string('noenrolments', 'theme_ulm').'</em>',new moodle_url('/'),get_string('noenrolments', 'theme_ulm'));
 			}
        }

        /*
        * This code replaces adds the My Dashboard
        * functionality to the custommenu.
        */
        if (isloggedin() && $hasdisplaymydashboard) {

            $unreadmessages = message_count_unread_messages();
            $badge = '';
            if ($unreadmessages > 0) {
                $badge = html_writer::tag('div', $unreadmessages, array('class'=>'unreadmessages'));
                $unreadmessages = '('.$unreadmessages.')';
            } else {
                $unreadmessages = '';
            }

            $branchlabel = $badge.'<i class="fa fa-user"></i>'. $USER->firstname;
            $branchurl   = new moodle_url('/my/index.php');
            $branchtitle = get_string('mydashboard', 'theme_ulm');
            $branchsort  = 1004;

            $branch = $menu->add($branchlabel, $branchurl, null, $branchtitle, $branchsort);
            $topbranch = $this->user_picture($USER, array('link'=>false,'size'=>'40')).' '
                            .$this->login_info().html_writer::tag('div', '', array('class'=>'clearer'));
            $branch->add($topbranch);
            $branch->add('<em><i class="fa fa-user"></i>'.get_string('profile').'</em>',new moodle_url('/user/profile.php'),null,get_string('profile'));
            $branch->add('<em><i class="fa fa-edit"></i>'.get_string('editmyprofile').'</em>',new moodle_url('/user/edit.php', array('id'=>$USER->id)),null,get_string('profile'));
            $branch->add('<em><i class="fa fa-file"></i>'.get_string('privatefiles', 'block_private_files').'</em>',new moodle_url('/user/files.php'),null,get_string('privatefiles', 'block_private_files'));
            $branch->add('<em><i class="fa fa-calendar"></i>'.get_string('pluginname', 'block_calendar_month').'</em>',new moodle_url('/calendar/view.php'),null,get_string('pluginname', 'block_calendar_month'));
            $branch->add('<em><i class="fa fa-certificate"></i>'.get_string('badges').'</em>',new moodle_url('/badges/mybadges.php'),null,get_string('badges'));
            $branch->add('<em><i class="fa fa-envelope"></i>'.get_string('pluginname', 'block_messages').' '.$unreadmessages.'</em>',new moodle_url('/message/index.php'),null,get_string('pluginname', 'block_messages'));

            if ($addlangmenu) {
                $strlang =  get_string('language');
                $currentlang = current_language();

                $languages = "<div class='btn-group btn-group-justified' role='group'>";
                foreach ($langs as $langtype => $langname) {
                    $class = '';
                    if ($currentlang == $langtype) {
                        $class = 'active';
                    }
                    $languages .= "<a href='".new moodle_url($this->page->url, array('lang' => $langtype))."' class='btn $class'>"
                                    .html_writer::empty_tag('img',
                                        array('src'=>$CFG->wwwroot.'/theme/ulm/pix/countries/'.$langtype.'.png', 'width'=>'16', 'height'=>'16'))
                                    ."</a>";
                }
                $languages .= "</div>";

                $langlabel = '<em><i class="fa fa-globe"></i>'.$languages.'</em>';
                $this->language = $branch->add($langlabel);
            }

            $branch->add('<em><i class="fa fa-sign-out"></i>'.get_string('logout').'</em>',new moodle_url('/login/logout.php'),null,get_string('logout'));
        }

        $content = '<ul class="nav">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->theme_ulm_render_custom_menu_item($item, 1);
        }
        $content .= '</ul>';

        return $content;
    }

    /*
     * This code renders the custom menu items for the
     * bootstrap dropdown menu.
     */
    protected function theme_ulm_render_custom_menu_item(theme_ulm_custom_menu_item $menunode, $level = 0 ) {
        static $submenucount = 0;

        if ($menunode->has_children()) {

            if ($level == 1) {
                $class = 'dropdown';
            } else {
                $class = 'dropdown-submenu';
            }

            if ($menunode === $this->language) {
                $class .= ' langmenu';
            }
            $content = html_writer::start_tag('li', array('class' => $class));
            // If the child has menus render it as a sub menu.
            $submenucount++;
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#cm_submenu_'.$submenucount;
            }
            $content .= html_writer::start_tag('a', array('href'=>$url, 'class'=>'dropdown-toggle', 'data-toggle'=>'dropdown', 'title'=>$menunode->get_title()));
            $content .= $menunode->get_text();
            if ($level == 1) {
                $content .= '<b class="caret"></b>';
            }
            $content .= '</a>';
            $content .= '<ul class="dropdown-menu">';
            foreach ($menunode->get_children() as $menunode) {
                $content .= $this->theme_ulm_render_custom_menu_item($menunode, 0);
            }
            $content .= '</ul>';
        } else {
            $content = '<li>';
            // The node doesn't have children so produce a final menuitem.
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
				$content .= html_writer::link($url, $menunode->get_text(), array('title'=>$menunode->get_title()));
            } else {
				$content .= html_writer::tag('div', $menunode->get_text(), array('title'=>$menunode->get_title()));
            }
        }
        return $content;
    }

    /**
     * Return the standard string that says whether you are logged in (and switched
     * roles/logged in as another user).
     * @param bool $withlinks if false, then don't include any links in the HTML produced.
     * If not set, the default is the nologinlinks option from the theme config.php file,
     * and if that is not set, then links are included.
     * @return string HTML fragment.
     */
    public function login_info($withlinks = null) {
        global $USER, $CFG, $DB, $SESSION;

        if (during_initial_install()) {
            return '';
        }

        if (is_null($withlinks)) {
            $withlinks = empty($this->page->layout_options['nologinlinks']);
        }

        $loginpage = ((string)$this->page->url === get_login_url());
        $course = $this->page->course;
        if (\core\session\manager::is_loggedinas()) {
            $realuser = \core\session\manager::get_realuser();
            $fullname = fullname($realuser, true);
            if ($withlinks) {
                $loginastitle = get_string('loginas');
                $realuserinfo = " [<a href=\"$CFG->wwwroot/course/loginas.php?id=$course->id&amp;sesskey=".sesskey()."\"";
                $realuserinfo .= "title =\"".$loginastitle."\">$fullname</a>] ";
            } else {
                $realuserinfo = " [$fullname] ";
            }
        } else {
            $realuserinfo = '';
        }

        $loginurl = get_login_url();

        if (empty($course->id)) {
            // $course->id is not defined during installation
            return '';
        } else if (isloggedin()) {
            $context = context_course::instance($course->id);

            $fullname = fullname($USER, true);
            // Since Moodle 2.0 this link always goes to the public profile page (not the course profile page)
            if ($withlinks) {
                $linktitle = get_string('viewprofile');
                $username = "<a href=\"$CFG->wwwroot/user/profile.php?id=$USER->id\" title=\"$linktitle\">$fullname</a>";
            } else {
                $username = $fullname;
            }
            if (is_mnet_remote_user($USER) and $idprovider = $DB->get_record('mnet_host', array('id'=>$USER->mnethostid))) {
                if ($withlinks) {
                    $username .= " from <a href=\"{$idprovider->wwwroot}\">{$idprovider->name}</a>";
                } else {
                    $username .= " from {$idprovider->name}";
                }
            }
            if (isguestuser()) {
                $loggedinas = $realuserinfo.get_string('loggedinasguest');
                if (!$loginpage && $withlinks) {
                    $loggedinas .= " (<a href=\"$loginurl\">".get_string('login').'</a>)';
                }
            } else if (is_role_switched($course->id)) { // Has switched roles
                $rolename = '';
                if ($role = $DB->get_record('role', array('id'=>$USER->access['rsw'][$context->path]))) {
                    $rolename = ': '.role_get_name($role, $context);
                }
                $loggedinas = get_string('loggedinas', 'moodle', $username).$rolename;
                if ($withlinks) {
                    $url = new moodle_url('/course/switchrole.php', array('id'=>$course->id,'sesskey'=>sesskey(), 'switchrole'=>0, 'returnurl'=>$this->page->url->out_as_local_url(false)));
                    $loggedinas .= ' ('.html_writer::tag('a', get_string('switchrolereturn'), array('href' => $url)).')';
                }
            } else {
                $loggedinas = $realuserinfo.get_string('loggedinas', 'moodle', $username);
            }
        }

        $loggedinas = "<div class='logininfo'>$loggedinas</div>";

        if (isset($SESSION->justloggedin)) {
            unset($SESSION->justloggedin);
            if (!empty($CFG->displayloginfailures)) {
                if (!isguestuser()) {
                    // Include this file only when required.
                    require_once($CFG->dirroot . '/user/lib.php');
                    if ($count = user_count_login_failures($USER)) {
                        $loggedinas .= '<div class="loginfailures">';
                        $a = new stdClass();
                        $a->attempts = $count;
                        $loggedinas .= get_string('failedloginattempts', '', $a);
                        if (file_exists("$CFG->dirroot/report/log/index.php") and has_capability('report/log:view', context_system::instance())) {
                            $loggedinas .= ' ('.html_writer::link(new moodle_url('/report/log/index.php', array('chooselog' => 1,
                                    'id' => 0 , 'modid' => 'site_errors')), get_string('logs')).')';
                        }
                        $loggedinas .= '</div>';
                    }
                }
            }
        }

        return $loggedinas;
    }

 	/*
    * This code replaces the icons in the Admin block with
    * FontAwesome variants where available.
    */

 	protected function render_pix_icon(pix_icon $icon) {
        if (self::replace_moodle_icon($icon->pix) !== false && $icon->attributes['alt'] === '' && (isset($icon->attributes['title']) && $icon->attributes['title'] === '')) {
            return self::replace_moodle_icon($icon->pix);
        } else {
            return parent::render_pix_icon($icon);
        }
    }

    private static function replace_moodle_icon($name) {
        $icons = array(
            'add' => 'plus',
            'book' => 'book',
            'chapter' => 'file',
            'docs' => 'question-circle',
            'generate' => 'gift',
            'i/backup' => 'upload',
            'i/checkpermissions' => 'user',
            'i/edit' => 'pencil',
            'i/filter' => 'filter',
            'i/grades' => 'table',
            'i/group' => 'group',
            'i/hide' => 'eye',
            'i/import' => 'download',
            'i/move_2d' => 'move',
            'i/navigationitem' => 'circle-o',
            'i/outcomes' => 'magic',
            'i/publish' => 'globe',
            'i/reload' => 'refresh',
            'i/report' => 'list',
            'i/restore' => 'download',
            'i/return' => 'repeat',
            'i/roles' => 'user',
            'i/settings' => 'flask',
            'i/show' => 'eye-slash',
            'i/switchrole' => 'random',
            'i/user' => 'user',
            'i/users' => 'user',
            't/right' => 'arrow-right',
            't/left' => 'arrow-left',
        );
        if (isset($icons[$name])) {
            return "<i class=\"fa fa-fw fa-$icons[$name]\" id=\"icon\"></i>";
        } else {
            return false;
        }
    }

    /**
    * Get the HTML for blocks in the given region.
    *
    * @since 2.5.1 2.6
    * @param string $region The region to get HTML for.
    * @return string HTML.
    */

    public function synergyblocks($region, $classes = array(), $tag = 'aside') {
        $classes = (array)$classes;
        $classes[] = 'block-region';
        $attributes = array(
            'id' => 'block-region-'.preg_replace('#[^a-zA-Z0-9_\-]+#', '-', $region),
            'class' => join(' ', $classes),
            'data-blockregion' => $region,
            'data-droptarget' => '1'
        );
        $content = '';
        if ($this->page->blocks->region_has_content($region, $this)) {
            $content = $this->blocks_for_region($region);
        }
        return html_writer::tag($tag, $content, $attributes);
    }

   /**
     * Returns HTML to display a "Turn editing on/off" button in a form.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     * @return string HTML the button
     */
    public function edit_button(moodle_url $url) {

        $url->param('sesskey', sesskey());
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $icon = '<i class="fa fa-pencil"></i>';
            $editstring = get_string('turneditingoff');
        } else {
            $url->param('edit', 'on');
            $icon = '<i class="fa fa-pencil"></i>';
            $editstring = get_string('turneditingon');
        }
        $title = $editstring;

        return html_writer::tag('a', $icon.$editstring, array('href' => $url, 'class' => 'singlebutton', 'title' => $title));
    }

    /*
     * This renders the navbar.
     * Uses bootstrap compatible html.
     */
    public function navbar() {
        $items = $this->page->navbar->get_items();
        if (empty($items)) {
            return '';
        }
        $breadcrumbs = array();
        foreach ($items as $item) {
            $item->hideicon = true;
            if ($item->type == 20) {
            	$breadcrumbs[] = '<strong>'.$this->render($item).'</strong>';
            } else {
	            $breadcrumbs[] = $this->render($item);
            }
        }
        $divider = '<span class="divider">'.get_separator().'</span>';
        $list_items = '<li>'.join(" $divider</li><li>", $breadcrumbs).'</li>';
        $title = '<span class="accesshide">'.get_string('pagepath').'</span>';
        return $title . "<ul class=\"breadcrumb\">$list_items</ul>";
    }

}

 class theme_ulm_core_renderer_maintenance extends core_renderer_maintenance {

    public function synergyblocks($region, $classes = array(), $tag = 'aside') {
        $classes = (array)$classes;
        $classes[] = 'block-region';
        $attributes = array(
            'id' => 'block-region-'.preg_replace('#[^a-zA-Z0-9_\-]+#', '-', $region),
            'class' => join(' ', $classes),
            'data-blockregion' => $region,
            'data-droptarget' => '1'
        );
        return html_writer::tag($tag, $this->blocks_for_region($region), $attributes);
    }

 }


class theme_ulm_core_course_renderer extends core_course_renderer {
    /**
     * Displays one course in the list of courses.
     *
     * This is an internal function, to display an information about just one course
     * please use {@link core_course_renderer::course_info_box()}
     *
     * @param coursecat_helper $chelper various display options
     * @param course_in_list|stdClass $course
     * @param string $additionalclasses additional classes to add to the main <div> tag (usually
     *    depend on the course position in list - first/last/even/odd)
     * @return string
     */
    protected function coursecat_coursebox(coursecat_helper $chelper, $course, $additionalclasses = '') {
        global $CFG;
        if (!isset($this->strings->summary)) {
            $this->strings->summary = get_string('summary');
        }
        if ($chelper->get_show_courses() <= self::COURSECAT_SHOW_COURSES_COUNT) {
            return '';
        }
        if ($course instanceof stdClass) {
            require_once($CFG->libdir. '/coursecatlib.php');
            $course = new course_in_list($course);
        }
        $content = '';
        $classes = trim('coursebox clearfix '. $additionalclasses);
        if ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $nametag = 'h3';
        } else {
            $classes .= ' collapsed';
            $nametag = 'div';
        }

        // .coursebox
        $content .= html_writer::start_tag('div', array(
            'class' => $classes,
            'data-courseid' => $course->id,
            'data-type' => self::COURSECAT_TYPE_COURSE,
        ));

        $content .= html_writer::start_tag('div', array('class' => 'info'));

        // course name
        $coursename = $chelper->get_course_formatted_name($course);
        $coursenamelink = html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)),
                                            $coursename, array('class' => $course->visible ? '' : 'dimmed'));
        $content .= html_writer::tag($nametag, $coursenamelink, array('class' => 'coursename'));
        // If we display course in collapsed form but the course has summary or course contacts, display the link to the info page.
        $content .= html_writer::start_tag('div', array('class' => 'courseicons'));
        $content .= html_writer::start_tag('div', array('class' => 'moreinfo'));
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            if ($course->has_summary() || $course->has_course_contacts() || $course->has_course_overviewfiles()) {
                $url = new moodle_url('/course/info.php', array('id' => $course->id));
                $image = html_writer::empty_tag('img', array('src' => $this->output->pix_url('i/info'),
                    'alt' => $this->strings->summary));
                $content .= html_writer::link($url, $image, array('title' => $this->strings->summary));
                // Make sure JS file to expand course content is included.
                $this->coursecat_include_js();
            }
        }
        $content .= html_writer::end_tag('div'); // .moreinfo

        // print enrolmenticons
        if ($icons = enrol_get_course_info_icons($course)) {
            $content .= html_writer::start_tag('div', array('class' => 'enrolmenticons'));
            foreach ($icons as $pix_icon) {
                $content .= $this->render($pix_icon);
            }
            $content .= html_writer::end_tag('div'); // .enrolmenticons
        }

        $content .= html_writer::end_tag('div'); // .courseicons

        $content .= html_writer::end_tag('div'); // .info

        $content .= html_writer::start_tag('div', array('class' => 'content'));
        $content .= $this->coursecat_coursebox_content($chelper, $course);
        $content .= html_writer::end_tag('div'); // .content

        $content .= html_writer::end_tag('div'); // .coursebox
        return $content;
    }
}

