<?
/*
Type: Post
*/

theme::part('partials/header', array( 'title'=>'Contact', 'post'=>$post, 'post_meta'=> $post_meta));
$author_meta = $author->get_meta( $post->author ); ?>

<div id="white">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p><bd><? date::show($post->date) ?></bd></p>
				<h4><?= $post->title?></h4>
				<?= the_content( $post->content ); ?>
				<p><bt>
					<? foreach( $relations = $tag->get_relations( $post->id ) as $relation ): ?>
						<a href="<?=BASE_URL?>tag/<?=$relation->slug ?>">#<?= $relation->name ?></a>
					<? endforeach; ?>
				</bt></p>
				<hr>
				<? theme::part('partials/author' ); ?>

				<? theme::part('partials/socials', array( 'title'=>$post->title, 'post'=>$post, 'post_meta'=> $post_meta ) ); ?>

				<?= render_content(); ?>

				<? disqus::comments_form( $post->id ); ?>
			</div>

		</div>
	</div>
</div>

<? theme::part('partials/footer') ?>