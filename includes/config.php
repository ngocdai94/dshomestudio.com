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

$parentDir = dirname(THIS_PAGE, 1);
$title = '';

if ($parentDir == INTERIOR_DESIGN) {
    $title = "Interior Design";
    $logo="fa-box";
} elseif ($parentDir == PHOTOGRAPHY) {
    $title = "Photography";
    $logo="fa-project-diagram";
} elseif ($parentDir == PORFOLIO) {
    $title = "Pofolio";
    //$logo="fa-project-diagram";
} else {
    $title = FILE_NAME;
    switch(FILE_NAME){
        case 'index.php':
            $title = "DS Home Studio";
            $logo="fa-home";
        break;

        case 'contact.php':
            $title = "Contact Us";
            $logo="fa-chart-bar";
            $cssForm='<link rel="stylesheet" href="css/form.css">';
        break;

        case 'about.php':
            $title = "About Us";
            $logo="fa-mail-bulk";
        break;

        case 'interior.php':
        $title = "Interior Pofolio";
        //$logo="fa-mail-bulk";
        break;

        case 'photography.php':
        $title = "Photography Pofolio";
        //$logo="fa-mail-bulk";
        break;

        case 'photography.php':
        $title = "Videos Pofolio";
        //$logo="fa-mail-bulk";
        break;
    };
}

// //place URL & labels in the array here for navigation:
// $nav1['index.php'] = "DS Home Studio";
// $nav1['interior-design/index.php'] = "Interior Desgin";
// $nav1['photography/index.php'] = "Photography";
// $nav1['about.php'] = "About Us";
// $nav1['contact.php'] = "Contact Us";
    
// /*
// makeLinks function will create our dynamic nav when called.
// Call like this:
// echo makeLinks($nav1); #in which $nav1 is an associative array of links
// */
// function makeLinks($linkArray)
// {
//     $myReturn = '';

//     foreach($linkArray as $url => $text)
//     {
//         if($url == THIS_PAGE)
//         {//selected page - add class reference
//             $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
//         }else{
//             $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
//         }    
//     }
//     return $myReturn;    
// }
?>