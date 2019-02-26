
<?php 
// config.php
// THIS_PAGE is a file path
define ('THIS_PAGE', $_SERVER['PHP_SELF']);
define ('FILE_NAME', basename(THIS_PAGE));
define ('INTERIOR_DESIGN', '/interior-design');
define ('PHOTOGRAPHY', '/photography');
define ('PORFOLIO', '/pofolio');

// helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

// get confidential file
include ("confidential.php");

// parent directory
$parentDir = dirname(THIS_PAGE, 1);

// dynamic page variables
$title = '';
$homeActive = '';
$aboutActive = '';
$serviceActive = '';
$interiorActive = '';
$photographyActive = '';
$portfolioActive = '';
$interiorPortfolioActive = '';
$photographyPortfolioActive = '';
$videoPortfolioActive = '';
$contactActive = '';

// edit dynamic page
if ($parentDir == INTERIOR_DESIGN) {
    $title = "Interior Design";
    //$logo="fa-box";
    $serviceActive = 'active';
    $interiorActive = 'active';
} elseif ($parentDir == PHOTOGRAPHY) {
    $title = "Photography";
    //$logo="fa-project-diagram";
    $serviceActive = 'active';
    $photographyActive = 'active';
// } elseif ($parentDir == PORFOLIO) {
//     $title = "Pofolio";
//     $logo="fa-project-diagram";
//     $portfolioActive = 'active';
} else {
    $title = FILE_NAME;
    switch(FILE_NAME){
        case 'index.php':
            $title = "DS Home Studio";
            //$logo="fa-home";
            $homeActive = 'active';
        break;

        case 'about.php':
            $title = "About Us";
            //$logo="fa-mail-bulk";
            $aboutActive = 'active';
        break;

        case 'interior.php':
            $title = "Interior Portfolio";
            //$logo="fa-mail-bulk";
            $portfolioActive = 'active';
            $interiorPortfolioActive = 'active';
        break;

        case 'photography.php':
            $title = "Photography Portfolio";
            //$logo="fa-mail-bulk";
            $portfolioActive = 'active';
            $photographyPortfolioActive = 'active';
        break;

        case 'videos.php':
            $title = "Videos Portfolio";
            //$logo="fa-mail-bulk";
            $portfolioActive = 'active';
            $videoPortfolioActive = 'active';
        break;

        case 'contact.php':
            $title = "Contact Us";
            //$logo="fa-chart-bar";
            $contactActive = 'active';
            $cssForm='<link rel="stylesheet" href="css/form.css">';
        break;
    };
}
?>