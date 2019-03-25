<?php
session_start();
$_SESSION['token'] = "sdkajsdaksjdklasjdaklsdjalkjs938092qpwoalsdalsdasdasd";
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/bank-app-edited/about.php":
        $CURRENT_PAGE = "About";
        $PAGE_TITLE = "About Us";
        break;
    case "/bank-app-edited/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact Us";
        break;
    case "/bank-app-edited/controller/logout.php":
        $CURRENT_PAGE = "Logout";
        $PAGE_TITLE = "Log Out";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to my homepage!";
}
