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
		<!--	<div id="white">-->
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<p><img src="<?= THEME ?>/assets/img/user.png" width="50px" height="50px">
								<ba><?= $author_meta->first_name;?> <?= $author_meta->last_name;?></ba>
							</p>
							<p><bd><? date::show($post->date) ?></bd></p>
							<h4><?= $post->title?></h4>
							<?= the_content( $post->content ); ?>
							<p><a href="<?= BASE_URL.$post->uri ?>">Continue Reading...</a></p>
						</div>

					</div>
				</div>
				<?= render_content(); ?>
			</div>
		<? endforeach; ?>
	</div>

</div>

<? theme::part('partials/footer') ?>