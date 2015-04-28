<?php

if ($PAGE->pagetype != 'site-index') {
        return false;
    }

    $theme = $PAGE->theme;
    if (!empty($theme->settings->pane1_promoitemtext) &&
        !empty($theme->settings->pane1_item2text) &&
        !empty($theme->settings->pane1_item3text) &&
        !empty($theme->settings->pane1_item4text) &&
        !empty($theme->settings->pane1_item5text) &&
        !empty($theme->settings->pane1_item6text) &&
        !empty($theme->settings->pane1_item7text)) {

        print '<div class="panes-wrapper">';
        print '<div class="panes">';

        print '<div class="pane pane1 no1"><div class="top">';
            print '<div class="box promo box1">';
                if ($theme->settings->pane1_promonewwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_promoitemurl.'" onclick="'.$theme->settings->pane1_promogacode.'">';
                print '<img title="'.$theme->settings->pane1_promoitemdescription.'" src="'.$theme->setting_file_url('pane1_promoitemimage', 'pane1_promoitemimage').'" />';
                print '<span class="btn">'.$theme->settings->pane1_promoitemtext.'</span>';
                print '</a>';
            print '</div>';
            print '<div class="box box2">';
                if ($theme->settings->pane1_item2newwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_item2url.'" onclick="'.$theme->settings->pane1_item2gacode.'">';
                print '<img title="'.$theme->settings->pane1_item2itemdescription.'" src="'.$theme->setting_file_url('pane1_item2image', 'pane1_item2image').'" />';
                print '<span class="btn">'.$theme->settings->pane1_item2text.'</span>';
                print '</a>';
            print '</div>';
            print '<div class="box box3">';
                if ($theme->settings->pane1_item3newwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_item3url.'" onclick="'.$theme->settings->pane1_item3gacode.'">';
                print '<img title="'.$theme->settings->pane1_item3itemdescription.'" src="'.$theme->setting_file_url('pane1_item3image', 'pane1_item3image').'" />';
                print '<span class="btn">'.$theme->settings->pane1_item3text.'</span>';
                print '</a>';
            print '</div>';
        print '</div><div class="bottom">';
            print '<div class="box box4">';
                if ($theme->settings->pane1_item4newwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_item4url.'" onclick="'.$theme->settings->pane1_item4gacode.'">';
                print '<img title="'.$theme->settings->pane1_item4itemdescription.'" src="'.$theme->setting_file_url('pane1_item4image', 'pane1_item4image').'" />';
                print '<span class="btn">'.$theme->settings->pane1_item4text.'</span>';
                print '</a>';
            print '</div>';
            print '<div class="box box5">';
                if ($theme->settings->pane1_item5newwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_item5url.'" onclick="'.$theme->settings->pane1_item5gacode.'">';
                print '<img title="'.$theme->settings->pane1_item5itemdescription.'" src="'.$theme->setting_file_url('pane1_item5image', 'pane1_item5image').'" />';
                print '<span class="btn">'.$theme->settings->pane1_item5text.'</span>';
                print '</a>';
            print '</div>';
            print '<div class="box box6">';
                if ($theme->settings->pane1_item6newwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_item6url.'" onclick="'.$theme->settings->pane1_item6gacode.'">';
                print '<img title="'.$theme->settings->pane1_item6itemdescription.'" src="'.$theme->setting_file_url('pane1_item6image', 'pane1_item6image').'" />';
                print '<span class="btn">'.$theme->settings->pane1_item6text.'</span>';
                print '</a>';
            print '</div>';
            print '<div class="box box7">';
                if ($theme->settings->pane1_item7newwindow) {
                    $target = 'target="_blank"';
                } else {
                    $target = '';
                }
                print '<a '.$target.' href="'.$theme->settings->pane1_item7url.'" onclick="'.$theme->settings->pane1_item7gacode.'">';
                print '<img title="'.$theme->settings->pane1_item7itemdescription.'" src="'.$theme->setting_file_url('pane1_item7image', 'pane1_item7image').'" />';
                print '<span class="btn">'.$theme->settings->pane1_item7text.'</span>';
                print '</a>';
            print '</div>';
        print '</div></div>';

        if ($theme->settings->useonlypane1 == '0') {
            print '<div class="pane pane2 no2"><div class="top">';
                print '<div class="box promo box1">';
                    if ($theme->settings->pane2_promonewwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_promoitemurl.'" onclick="'.$theme->settings->pane2_promogacode.'">';
                    print '<img title="'.$theme->settings->pane2_promoitemdescription.'" src="'.$theme->setting_file_url('pane2_promoitemimage', 'pane2_promoitemimage').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_promoitemtext.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box2">';
                    if ($theme->settings->pane2_item2newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_item2url.'" onclick="'.$theme->settings->pane2_item2gacode.'">';
                    print '<img title="'.$theme->settings->pane1_item2itemdescription.'" src="'.$theme->setting_file_url('pane2_item2image', 'pane2_item2image').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_item2text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box3">';
                    if ($theme->settings->pane2_item3newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_item3url.'" onclick="'.$theme->settings->pane2_item3gacode.'">';
                    print '<img title="'.$theme->settings->pane2_item3itemdescription.'" src="'.$theme->setting_file_url('pane2_item3image', 'pane2_item3image').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_item3text.'</span>';
                    print '</a>';
                print '</div>';
            print '</div><div class="bottom">';
                print '<div class="box box4">';
                    if ($theme->settings->pane2_item4newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_item4url.'" onclick="'.$theme->settings->pane2_item4gacode.'">';
                    print '<img title="'.$theme->settings->pane2_item4itemdescription.'" src="'.$theme->setting_file_url('pane2_item4image', 'pane2_item4image').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_item4text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box5">';
                    if ($theme->settings->pane2_item5newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_item5url.'" onclick="'.$theme->settings->pane2_item5gacode.'">';
                    print '<img title="'.$theme->settings->pane2_item5itemdescription.'" src="'.$theme->setting_file_url('pane2_item5image', 'pane2_item5image').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_item5text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box6">';
                    if ($theme->settings->pane2_item6newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_item6url.'" onclick="'.$theme->settings->pane2_item6gacode.'">';
                    print '<img title="'.$theme->settings->pane2_item6itemdescription.'" src="'.$theme->setting_file_url('pane2_item6image', 'pane2_item6image').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_item6text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box7">';
                    if ($theme->settings->pane2_item7newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane2_item7url.'" onclick="'.$theme->settings->pane2_item7gacode.'">';
                    print '<img title="'.$theme->settings->pane2_item7itemdescription.'" src="'.$theme->setting_file_url('pane2_item7image', 'pane2_item7image').'" />';
                    print '<span class="btn">'.$theme->settings->pane2_item7text.'</span>';
                    print '</a>';
                print '</div>';
            print '</div></div>';
            print '<div class="pane pane3 no3"><div class="top">';
                print '<div class="box promo box1">';
                    if ($theme->settings->pane3_promonewwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_promoitemurl.'" onclick="'.$theme->settings->pane3_promogacode.'">';
                    print '<img title="'.$theme->settings->pane3_promoitemdescription.'" src="'.$theme->setting_file_url('pane3_promoitemimage', 'pane3_promoitemimage').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_promoitemtext.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box2">';
                    if ($theme->settings->pane3_item2newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_item2url.'" onclick="'.$theme->settings->pane3_item2gacode.'">';
                    print '<img title="'.$theme->settings->pane3_item2itemdescription.'" src="'.$theme->setting_file_url('pane3_item2image', 'pane3_item2image').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_item2text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box3">';
                    if ($theme->settings->pane3_item3newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_item3url.'" onclick="'.$theme->settings->pane3_item3gacode.'">';
                    print '<img title="'.$theme->settings->pane3_item3itemdescription.'" src="'.$theme->setting_file_url('pane3_item3image', 'pane3_item3image').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_item3text.'</span>';
                    print '</a>';
                print '</div>';
            print '</div><div class="bottom">';
                print '<div class="box box4">';
                    if ($theme->settings->pane3_item4newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_item4url.'" onclick="'.$theme->settings->pane3_item4gacode.'">';
                    print '<img title="'.$theme->settings->pane3_item4itemdescription.'" src="'.$theme->setting_file_url('pane3_item4image', 'pane3_item4image').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_item4text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box5">';
                    if ($theme->settings->pane3_item5newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_item5url.'" onclick="'.$theme->settings->pane3_item5gacode.'">';
                    print '<img title="'.$theme->settings->pane3_item5itemdescription.'" src="'.$theme->setting_file_url('pane3_item5image', 'pane3_item5image').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_item5text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box6">';
                    if ($theme->settings->pane3_item6newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_item6url.'" onclick="'.$theme->settings->pane3_item6gacode.'">';
                    print '<img title="'.$theme->settings->pane3_item6itemdescription.'" src="'.$theme->setting_file_url('pane3_item6image', 'pane3_item6image').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_item6text.'</span>';
                    print '</a>';
                print '</div>';
                print '<div class="box box7">';
                    if ($theme->settings->pane3_item7newwindow) {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    print '<a '.$target.' href="'.$theme->settings->pane3_item7url.'" onclick="'.$theme->settings->pane3_item7gacode.'">';
                    print '<img title="'.$theme->settings->pane3_item7itemdescription.'" src="'.$theme->setting_file_url('pane3_item7image', 'pane3_item7image').'" />';
                    print '<span class="btn">'.$theme->settings->pane3_item7text.'</span>';
                    print '</a>';
                print '</div>';
            print '</div></div>';
            print '<div class="prev"><a class="prev_btn">Prev</a></div><div class="next"><a class="next_btn">Next</a></div>';
        }

        print '</div>';
        print '</div>';

        print '<script type="text/javascript">';
        print 'var autoslide = '.$theme->settings->autosliding.';';
        print 'var slidedelay = '.($theme->settings->delay*1000).';';
        print '</script>';

    }
