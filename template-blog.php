<?
/*
Name: Blog
*/

theme::part('partials/header', array( 'title'=>'Blog')); ?>

<div class="row">

	<div class="col-md-12">
		<? foreach ($posts as $post):
			$author_meta = $author->get_meta( $post->author ); ?>

			<div id="grey" class="post <?= $post->template; ?>">
			<!--<div id="white" class="post <?= $post->template; ?>">-->
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<h3><a href="<?= BASE_URL.$post->uri ?>"><?= $post->title?></a></h3>
							<?if ( $post->excerpt != '' ): ?>
								<p class="tldr"><?= $post->excerpt; ?></p>
							<? endif; ?>
						</div>
					</div>
				</div>
				<?= render_content(); ?>
			</div>
		<? endforeach; ?>
	</div>

</div>

<? theme::part('partials/footer') ?>