<?php


/**
 * ###############
 * ###   URL   ###
 * ###############
 */

/**
 * @param string $path
 * @return string
 */
function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost") > -1) {
        if ($path) {
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }
    
    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    
    return CONF_URL_BASE;
}

/**
 * @return string
 */
function url_back(): string
{
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

/**
 * @param string|null $path
 * @return string
 */
function url_theme(string $path = null, string $theme = CONF_VIEW_THEME): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost") > -1) {
        if ($path) {
            return CONF_URL_TEST . "/themes/" . $theme . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        
        return CONF_URL_TEST . "/themes/" . $theme;
    }
    
    if ($path) {
        return CONF_URL_BASE . "/themes/" . $theme . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    
    return CONF_URL_BASE . "/themes/" . $theme;
}
