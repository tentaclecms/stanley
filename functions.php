<?php

event::on('init_theme', 'init_theme', 1);
function init_theme($theme){
//    $snippets = load::model('snippets');
//    $snippets->add_by_theme('hero_about','Hero About');
//    $snippets->add_by_theme('footer_about','Footer Footer');
//    $snippets->add_by_theme('footer_address','Footer Address');
}

function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

// We need a unique ID for the host so hash it to keep it private and send it over
function universal_ui( $id = null ){

    if($_SERVER['HTTP_HOST'] == "localhost")
    {
        $id = $_SERVER['HTTP_HOST'].time();
    }
    else
    {
        $id = $_SERVER['HTTP_HOST'];
    }

    if(function_exists('sha1'))
    {
        $hash_id = sha1($id);
    }
    else
    {
        $hash_id = md5($id);
    }

    echo $hash_id;
}

function get_instagram_photo($contents){
    $old_libxml_error = libxml_use_internal_errors(true);

    $dom = new DOMDocument;

    if(@$dom->loadHTML($contents) === false) {
        throw new RuntimeException("Contents is empty");
    }

    libxml_use_internal_errors($old_libxml_error);

    foreach($dom->getElementsByTagName('meta') as $tag) {
        if ($tag->hasAttribute('property') && $tag->hasAttribute('content')) {
            if($tag->getAttribute('property') == 'og:image')
                return $tag->getAttribute('content');
        }
    }
    unset($dom);
}