<?
/*
Name: Work
*/
/**
display: admin
blocks:
  description: textarea:Description
  via: text:Via
  via_title: text:Via Title
  view: text:view
  github: text:Github URL
  download: text:Download
  support: text:Support
 */

theme::part('partials/header', array( 'title'=>'Work')); ?>

<div class="container pt">
	<div class="row mt">
		<div class="col-lg-6 col-lg-offset-3 centered">
			<h3>PROJECT NAME</h3>
			<hr>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
		</div>
	</div>
	<div class="row mt centered">
		<div class="col-lg-8 col-lg-offset-2">
			<p><img class="img-responsive" src="assets/img/portfolio/1.jpg" alt=""></p>
			<p><img class="img-responsive" src="assets/img/portfolio/2.jpg" alt=""></p>
			<p><img class="img-responsive" src="assets/img/portfolio/3.jpg" alt=""></p>
			<p><bt>Client: <a href="#">BlackTie.co</a></bt> - <bt>Type: <a href="#">Illustration</a></bt> - <bt>Date: <a href="#">January 2014</a></bt></p>
		</div>
	</div>
</div>

<? /*
<section class="content">
	<article>
		<div class="page-header">
			<h2><?= $post->title; ?></h2>
		</div>

		<div class="row">
			<div class="md-6 details">
				<?= $post_meta->description ?>

				<a href="<?= $post_meta->github_url ?>" class="btn btn-large btn-block btn-promo">View on Github</a>
				<a href="<?= $post_meta->download ?>" class="btn btn-large btn-block btn-promo">Download</a>
				<a href="<?= $post_meta->support ?>" class="btn btn-large btn-block btn-promo">Get Support</a>
			</div>
			<div class="md-6 content">

				<?= the_content( $post->content ); ?>
				<?= render_content(); ?>

				<a href="/request-an-estimate" class="btn btn-large btn-block  btn-promo">Like what you see?</a>
			</div>
		</div>
	</article>

</section><!-- .content -->
 */ ?>

<? theme::part('partials/footer') ?>
