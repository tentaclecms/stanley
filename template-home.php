<?
/*
Name: Home
URI: http://tcms.me/
*/
/**
display: admin
name: text:Name:Full Name
options: options(Canada,United States, Mexico):Select a country
twitter: text:Twitter:Twitter username, without the @ symbol.
 */

theme::part('partials/header', array( 'title'=>'Home'));

theme::part('partials/hero') ?>

    <div class="container pt">
        <div class="row mt centered">
            <div class="md-4">
                <a class="zoom green" href="work01.html"><img class="img-responsive" src="<?= THEME ?>/assets/img/portfolio/port01.jpg" alt="" /></a>
                <p>APE</p>
            </div>
            <div class="md-4">
                <a class="zoom green" href="work01.html"><img class="img-responsive" src="<?= THEME ?>/assets/img/portfolio/port02.jpg" alt="" /></a>
                <p>RAIDERS</p>
            </div>
            <div class="md-4">
                <a class="zoom green" href="work01.html"><img class="img-responsive" src="<?= THEME ?>/assets/img/portfolio/port03.jpg" alt="" /></a>
                <p>VIKINGS</p>
            </div>
        </div><!-- /row -->
        <div class="row mt centered">
            <div class="md-4">
                <a class="zoom green" href="work01.html"><img class="img-responsive" src="<?= THEME ?>/assets/img/portfolio/port04.jpg" alt="" /></a>
                <p>YODA</p>
            </div>
            <div class="md-4">
                <a class="zoom green" href="work01.html"><img class="img-responsive" src="<?= THEME ?>/assets/img/portfolio/port05.jpg" alt="" /></a>
                <p>EMPERORS</p>
            </div>
            <div class="md-4">
                <a class="zoom green" href="work01.html"><img class="img-responsive" src="<?= THEME ?>/assets/img/portfolio/port06.jpg" alt="" /></a>
                <p>CHIEFS</p>
            </div>
        </div>
    </div>

<? theme::part('partials/footer') ?>