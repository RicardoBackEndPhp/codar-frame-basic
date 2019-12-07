<?php
if (strpos(url(), "localhost")) {
    $place = dirname(__DIR__, 3);
    
    /**
     * CSS
     */
    $minCSS = new MatthiasMullie\Minify\CSS();
    $minCSS->add($place."/shared/styles/boot.css");
    $minCSS->add($place."/shared/styles/styles.css");
    
    //Pega o css da pasta theme CSS
    $cssDir = scandir($place."/themes/" . CONF_VIEW_TEST . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = $place . "/themes/" . CONF_VIEW_TEST . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCSS->add($cssFile);
        }
    }
    
    //Minify CSS
    $minCSS->minify($place . "/themes/" . CONF_VIEW_TEST . "/assets/style.min.css");
    
    
    /**
     * JS
     */
    $minJS = new MatthiasMullie\Minify\JS();
    $minJS->add($place . "/shared/scripts/jquery.min.js");
    $minJS->add($place . "/shared/scripts/jquery-ui.js");
    
    //Pega o js do theme
    $jsDir = scandir($place . "/themes/" . CONF_VIEW_TEST . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = $place . "/themes/" . CONF_VIEW_TEST . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJS->add($jsFile);
        }
    }
    
    //Minify JS
    $minJS->minify($place . "/themes/" . CONF_VIEW_TEST . "/assets/scripts.min.js");
}
