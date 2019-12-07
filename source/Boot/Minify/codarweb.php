<?php
if (strpos(url(), "localhost")) {
    $place = dirname(__DIR__, 3);
    
    /**
     * CSS
     */
    $minCSS = new MatthiasMullie\Minify\CSS();
    $minCSS->add($place."/node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css");
    $minCSS->add($place."/node_modules/startbootstrap-sb-admin-2/css/sb-admin-2.min.css");
    $minCSS->add($place."/shared/css/style.css");
    
    //Pega o css da pasta theme CSS
    $cssDir = scandir($place."/themes/" . CONF_VIEW_THEME . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = $place . "/themes/" . CONF_VIEW_THEME . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCSS->add($cssFile);
        }
    }
    
    //Minify CSS
    $minCSS->minify($place . "/themes/" . CONF_VIEW_THEME . "/assets/style.min.css");
    
    
    /**
     * JS
     */
    $minJS = new MatthiasMullie\Minify\JS();
    $minJS->add($place . "/node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js");
    $minJS->add($place . "/node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js");
    $minJS->add($place . "/node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js");
    $minJS->add($place . "/node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.min.js");
    
    //Pega o js do theme
    $jsDir = scandir($place . "/themes/" . CONF_VIEW_THEME . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = $place . "/themes/" . CONF_VIEW_THEME . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJS->add($jsFile);
        }
    }
    
    //Minify JS
    $minJS->minify($place . "/themes/" . CONF_VIEW_THEME . "/assets/scripts.min.js");
}
