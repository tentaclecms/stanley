<div id="ww">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 centered">
                <img src="<?= get_gravatar(get::option('admin_email'), 200, 200) ?>" alt="<?= get::option('admin_author') ?>" class="img-circle"/>
                <h1>Hi, I am <?= get::option('admin_author') ?>!</h1>
                <?= the_content(snippet('hero_about')) ?>
            </div>
        </div>
    </div>
</div>