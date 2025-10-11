<?
$visitCounter = 0;
$lastVisit = "";

if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = (int)$_COOKIE['visitCounter'];
}

$visitCounter++;

if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = date('d.m.Y H:i:s', $_COOKIE['lastVisit']);
}

$visitCounter = isset($_COOKIE['visitCounter']) ? (int)$_COOKIE['visitCounter'] + 1 : 1;

setcookie('visitCounter', $visitCounter, time() + 86400);
setcookie('lastVisit', time(), time() + 86400);
