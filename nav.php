<?php
$OUTPUT->bodyStart();
$R = $CFG->apphome . '/';
$T = $CFG->wwwroot . '/';
$adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
$set = new \Tsugi\UI\MenuSet();
$set->setHome($CFG->servicename, $CFG->apphome);
$set->addLeft('Store', $T.'store');
if ( file_exists('privacy.php') && ! isset($_SESSION['id']) ) {
    $set->addLeft('Privacy', $R.'privacy');
}

if ( isset($CFG->lessons) ) {
    $set->addLeft('Lessons', $R.'lessons');
if ( isset($_SESSION['id']) ) {
    $set->addLeft('My Progress', $R.'assignments');
} else {
    $set->addLeft('Assignments', $R.'assn');
}
}

if ( isset($_SESSION['id']) ) {
    $submenu = new \Tsugi\UI\Menu();
    $submenu->addLink('Profile', $R.'profile');
    if ( isset($CFG->badge_path)  ) {
        $submenu->addLink('Badges', $R.'badges');
    }
    if ( file_exists('materials.php') ) {
        $submenu->addLink('Materials', $R.'materials');
    }
    if ( file_exists('privacy.php') ) {
        $submenu->addLink('Privacy', $R.'privacy');
    }
    if ( $CFG->providekeys ) {
        $submenu->addLink('LMS Integration', $T . 'settings');
    }
    if ( isset($CFG->google_classroom_secret) ) {
        $submenu->addLink('Google Classroom', $T.'gclass/login');
    }
    $submenu->addLink('Tsugi Project', 'https://www.tsugi.org');
    $submenu->addLink('Free App Store', 'https://www.tsugicloud.org');
    if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
        $submenu->addLink('Administer', $T . 'admin/');
    }
    $submenu->addLink('Logout', $R.'logout');
    if ( isset($_SESSION['avatar']) ) {
        $set->addRight('<img src="'.$_SESSION['avatar'].'" title="'.htmlentities(__('User Profile Menu - Includes logout')).'" style="height: 2em;"/>', $submenu);
        // htmlentities($_SESSION['displayname']), $submenu);
    } else {
        $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
    }
} else {
    // $set->addRight('Login', $T.'login.php');
}
// $set->addRight('About', 'http://www.dr-chuck.com');


// Set the topNav for the session
$OUTPUT->topNavSession($set);

$OUTPUT->topNav();
$OUTPUT->flashMessages();
