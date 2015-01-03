<section class="author row m-top-45">
    <figure class="author-image col-sm-2 col-xs-4 col-xs-center col-sm-center md-center">
        <img src="<?= get_gravatar(get::option('admin_email'), 100, 100) ?>" alt="<?= get::option('admin_author') ?>" class="img-circle"/>
    </figure>
    <section class="author">
        <h4>Hi, I am <?= get::option('admin_author') ?>!</h4>
        <?= the_content(snippet('hero_about')) ?>
    </section>
</section>

<section class="row m-bottom-45">
    <div class="col-md-12">
        <h3>Signup for my mailing list</h3>
        <p>Receive other rambings like this on design, code, and some times food.</p>
        <? theme::part('partials/email-list' ); ?>
    </div>
</section>