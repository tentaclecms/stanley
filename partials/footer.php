<!-- +++++ Footer Section +++++ -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>About Me</h4>

                <p>
                    <?= snippet('footer_about') ?>
                </p>
            </div>
            <? /*
            <div class="col-md-4">
                <h4>My Bunker</h4>
                <p>
                    <?= the_content(snippet('footer_address')) ?>
                </p>
            </div>

            <div class="col-md-4">
                <h4>My Links</h4>
                <p>
                    <a href="#">Dribbble</a><br/>
                    <a href="#">Twitter</a><br/>
                    <a href="#">Facebook</a>
                </p>
            </div>*/ ?>
        </div>

    </div>
</div>

<? theme::script('assets/js/app.min.js'); ?>
</body>
</html>
