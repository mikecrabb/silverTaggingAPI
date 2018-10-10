<?php
header("Access-Control-Allow-Origin: *");
define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //API Routes
    //get
    'api/apiGuidelines' => "/api/guidelines",
    'api/apiSingleGuideline' => "/api/guidelines/(?'guidelineID'[\w\-]+)",
    'api/apiMethods' => "/api/methods",
    'api/apiSingleMethod' => "/api/methods/(?'methodID'[\w\-]+)",
    'api/apiTagCategories' => "/api/categories",
    'api/apiSingleTagCategory' => "/api/categories/(?'categoryID'[\w\-]+)",
    'api/apiTags' => "/api/tags",
    'api/apiSingleTag' => "/api/tags/(?'categoryID'[\w\-]+)",
    'api/apiCategoryTags' => "/api/categoryTags/(?'categoryID'[\w\-]+)",
    'api/apiGuidelineMethods' => "/api/guidelineMethods/(?'categoryID'[\w\-]+)",
    'api/apiMethodGuidelines' => "/api/methodGuidelines/(?'categoryID'[\w\-]+)",
    'api/apiTaggedMethods' => "/api/taggedMethods/(?'categoryID'[\w\-]+)",

    //
    //
    'webApp/guidelines' => "/guidelines",

    //

    'home' => "/"
    //
    // Style
    //
);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');

?>
