<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= get::option('blogname').' - '. $title ?></title>

    <?
    render_meta( );
    render_description( );
    render_keywords( );
    render_cards( );
    render_shortlink( );
    ?>

    <script type="text/javascript">
        var base_theme      = '<?= THEME ?>';
        var base_url        = '<?= BASE_URL ?>';
    </script>

    <!--

    _/_/_/_/_/                      _/                          _/
       _/      _/_/    _/_/_/    _/_/_/_/    _/_/_/    _/_/_/  _/    _/_/
      _/    _/_/_/_/  _/    _/    _/      _/    _/  _/        _/  _/_/_/_/
     _/    _/        _/    _/    _/      _/    _/  _/        _/  _/
    _/      _/_/_/  _/    _/      _/_/    _/_/_/    _/_/_/  _/    _/_/_/
    ======================================================================-->

    <? theme::css('assets/css/main.css'); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <? theme::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'); ?>
    <? theme::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'); ?>
    <![endif]-->

    <? render_header( ); ?>
</head>

<body <? body_class(); ?>>

<? theme::part('partials/navigation') ?>