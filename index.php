<?php
// Main entry point for the PHP application
$title = "My PHP Website";
$currentPage = $_GET['page'] ?? 'home';

// Include the header
include 'includes/header.php';

// Route to different pages
switch($currentPage) {
    case 'about':
        include 'pages/about.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    case 'home':
    default:
        include 'pages/home.php';
        break;
}

// Include the footer
include 'includes/footer.php';
?>