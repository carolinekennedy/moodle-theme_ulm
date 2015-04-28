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
 * @author     Synergy Learning
 * @author     Based on code originally written by G J Bernard, Mary Evans, Bas Brands, Stuart Lamour, David Scotson and Julian Ridden.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/lib/outputcomponents.php');

class theme_ulm_custom_menu_item extends custom_menu_item {
	/**
     * @var string The text to show for the item
     */
    protected $text;

    /**
     * @var moodle_url The link to give the icon if it has no children
     */
    protected $url;

    /**
     * @var string A class to display a fontawesome icon.
     */
    protected $icon;

    /**
     * @var string A title to apply to the item. By default the text
     */
    protected $title;

    /**
     * @var int A sort order for the item, not necessary if you order things in
     * the CFG var.
     */
    protected $sort;

    /**
     * @var custom_menu_item A reference to the parent for this item or NULL if
     * it is a top level item
     */
    protected $parent;

    /**
     * @var array A array in which to store children this item has.
     */
    protected $children = array();

    /**
     * @var int A reference to the sort var of the last child that was added
     */
    protected $lastsort = 0;

    /**
     * Constructs the new custom menu item
     *
     * @param string $text
     * @param moodle_url $url A moodle url to apply as the link for this item [Optional]
     * @param string $icon A fontawesome class to apply to this item [Optional]
     * @param string $title A title to apply to this item [Optional]
     * @param int $sort A sort or to use if we need to sort differently [Optional]
     * @param custom_menu_item $parent A reference to the parent custom_menu_item this child
     *        belongs to, only if the child has a parent. [Optional]
     */
    public function __construct($text, moodle_url $url=null, $icon=null, $title=null, $sort = null, custom_menu_item $parent = null) {
        $this->text = $text;
        $this->url = $url;
        $this->icon = $icon;
        $this->title = $title;
        $this->sort = (int)$sort;
        $this->parent = $parent;
    }

    /**
     * Adds a custom menu item as a child of this node given its properties.
     *
     * @param string $text
     * @param moodle_url $url
     * @param string $icon
     * @param string $title
     * @param int $sort
     * @return custom_menu_item
     */
    public function add($text, moodle_url $url = null, $icon=null, $title = null, $sort = null) {
        $key = count($this->children);
        if (empty($sort)) {
            $sort = $this->lastsort + 1;
        }
        $this->children[$key] = new theme_ulm_custom_menu_item($text, $url, $icon, $title, $sort, $this);
        $this->lastsort = (int)$sort;
        return $this->children[$key];
    }

    /**
     * Returns the text for this item
     * @return string
     */
    public function get_text() {
    	$content = $this->get_icon();
    	$content .= $this->text;
        return $content;
    }

    /**
     * Returns the icon class for this item
     * @return string
     */
    public function get_icon() {
        if($this->icon) {
            $content = html_writer::start_tag('i', array('class'=>'fa fa-'.$this->icon));
            $content .= html_writer::end_tag('i');
        } else {
            $content = '';
        }
        return $content;
    }

    /**
     * Sets the fontawesome icon class
     * @param string $icon
     */
    public function set_icon($icon) {
        $this->icon = (string)$icon;
    }
}

class theme_ulm_custom_menu extends theme_ulm_custom_menu_item {

    /**
     * Creates the custom menu
     *
     * @param string $definition the menu items definition in syntax required by {@link convert_text_to_menu_nodes()}
     * @param string $currentlanguage the current language code, null disables multilang support
     */
    public function __construct($definition = '', $currentlanguage = null) {
        $this->currentlanguage = $currentlanguage;
        parent::__construct('root'); // create virtual root element of the menu
        if (!empty($definition)) {
            $this->override_children(self::convert_text_to_menu_nodes($definition, $currentlanguage));
        }
    }

    /**
     * Overrides the children of this custom menu. Useful when getting children
     * from $CFG->custommenuitems
     *
     * @param array $children
     */
    public function override_children(array $children) {
        $this->children = array();
        foreach ($children as $child) {
            if ($child instanceof custom_menu_item) {
                $this->children[] = $child;
            }
        }
    }

	/**
     * Converts a string into a structured array of custom_menu_items which can
     * then be added to a custom menu.
     *
     * Structure:
     *     text|url|icon|title|langs
     * The number of hyphens at the start determines the depth of the item. The
     * languages are optional, comma separated list of languages the line is for.
     *
     * Example structure:
     *     First level first item|http://www.moodle.com/
     *     -Second level first item|http://www.moodle.com/partners/
     *     -Second level second item|http://www.moodle.com/hq/
     *     --Third level first item|http://www.moodle.com/jobs/
     *     -Second level third item|http://www.moodle.com/development/
     *     First level second item|http://www.moodle.com/feedback/
     *     First level third item
     *     English only|http://moodle.com|English only item|en
     *     German only|http://moodle.de|Deutsch|de,de_du,de_kids
     *
     *
     * @static
     * @param string $text the menu items definition
     * @param string $language the language code, null disables multilang support
     * @return array
     */
    public static function convert_text_to_menu_nodes($text, $language = null) {
        $lines = explode("\n", $text);
        $children = array();
        $lastchild = null;
        $lastdepth = null;
        $lastsort = 0;
        foreach ($lines as $line) {
            $line = trim($line);
            $bits = explode('|', $line, 5);    // name|url|icon|title|langs
            if (!array_key_exists(0, $bits) or empty($bits[0])) {
                // Every item must have a name to be valid
                continue;
            } else {
                $bits[0] = ltrim($bits[0],'-');
            }
            if (!array_key_exists(1, $bits) or empty($bits[1])) {
                // Set the url to null
                $bits[1] = null;
            } else {
                // Make sure the url is a moodle url
                $bits[1] = new moodle_url(trim($bits[1]));
            }
            if (!array_key_exists(2, $bits) or empty($bits[2])) {
                // Set the icon class to null
                $bits[2] = null;
            }
            if (!array_key_exists(3, $bits) or empty($bits[3])) {
                // Set the title to null seeing as there isn't one
                $bits[3] = $bits[0];
            }
            if (!array_key_exists(4, $bits) or empty($bits[4])) {
                // The item is valid for all languages
                $itemlangs = null;
            } else {
                $itemlangs = array_map('trim', explode(',', $bits[3]));
            }
            if (!empty($language) and !empty($itemlangs)) {
                // check that the item is intended for the current language
                if (!in_array($language, $itemlangs)) {
                    continue;
                }
            }
            // Set an incremental sort order to keep it simple.
            $lastsort++;
            if (preg_match('/^(\-*)/', $line, $match) && $lastchild != null && $lastdepth !== null) {
                $depth = strlen($match[1]);
                if ($depth < $lastdepth) {
                    $difference = $lastdepth - $depth;
                    if ($lastdepth > 1 && $lastdepth != $difference) {
                        $tempchild = $lastchild->get_parent();
                        for ($i =0; $i < $difference; $i++) {
                            $tempchild = $tempchild->get_parent();
                        }
                        $lastchild = $tempchild->add($bits[0], $bits[1], $bits[2], $bits[3], $lastsort);
                    } else {
                        $depth = 0;
                        $lastchild = new theme_ulm_custom_menu_item($bits[0], $bits[1], $bits[2], $bits[3], $lastsort);
                        $children[] = $lastchild;
                    }
                } else if ($depth > $lastdepth) {
                    $depth = $lastdepth + 1;
                    $lastchild = $lastchild->add($bits[0], $bits[1], $bits[2], $bits[3], $lastsort);
                } else {
                    if ($depth == 0) {
                        $lastchild = new theme_ulm_custom_menu_item($bits[0], $bits[1], $bits[2], $bits[3], $lastsort);
                        $children[] = $lastchild;
                    } else {
                        $lastchild = $lastchild->get_parent()->add($bits[0], $bits[1], $bits[2], $bits[3], $lastsort);
                    }
                }
            } else {
                $depth = 0;
                $lastchild = new theme_ulm_custom_menu_item($bits[0], $bits[1], $bits[2], $bits[3], $lastsort);
                $children[] = $lastchild;
            }
            $lastdepth = $depth;
        }
        return $children;
    }
}