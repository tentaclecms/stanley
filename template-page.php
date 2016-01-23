<?
/*
Name: Page
*/

theme::part('partials/header', array('title' => 'About')); ?>

    <div class="container pt">

        <div class="page-header">
            <h1><?= $post->title; ?></h1>
        </div>

        <?= the_content($post->content); ?>
    </div>

<? theme::part('partials/footer') ?>