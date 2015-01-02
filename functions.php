<?
//var_dump('test');

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