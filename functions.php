<?php

define('ATP_PROJECT_NAME', 'Auto Trader Theme');
define('ATP_PAGE_SLUG', 'atp');

function generateFileInitiatorName()
{
    $fileSlug ='';
    $backtraceArray = debug_backtrace();
    foreach ($backtraceArray as $initiator){
        if($initiator['function'] === 'get_header'){
            $fileInitiator = $initiator['file'];
            break;
        }
    }

    if(isset($fileInitiator)){
        $fileExploded = explode('/', $fileInitiator);
        $fileName = end($fileExploded);
        $fileSlug = explode('.', $fileName)[0];
    }

    return $fileSlug === 'index' ? 'home' : $fileSlug;
}

do_action('generateFileInitiatorName');

function handleThemesPagesUri()
{
    $url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/');
    $path = explode('/', $url_path);
    $isThemePage = strtolower($path[0]) === strtolower(ATP_PAGE_SLUG);

    if($isThemePage){
        $templateToLoad = 'pages/' . $path[1] . '.php';
        $filename = get_theme_file_path() . '/'. $templateToLoad;

        $templateExist = file_exists($filename);
        if($templateExist){
            locate_template($templateToLoad, true);
        } else {
            locate_template('404.php', true);
        }
        exit;
    }
}

add_action('init', 'handleThemesPagesUri');

