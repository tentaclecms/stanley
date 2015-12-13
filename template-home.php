<?
/*
Name: Home
URI: http://tcms.me/
*/
/**
display: admin
secondary-title: text:Secondary Title
blocks:
  instagram: text:Instagram URL
 */

theme::part('partials/header', array( 'title'=>'Home'));

theme::part('partials/hero') ?>

    <div class="container m-top-60 instagram">
        <div class="row mt centered">
            <?
            $blocks = array_reverse($post_meta->collection['blocks']);

            foreach ($blocks as $collection ):
                if ($collection['instagram'] != ''):
                    $url = $collection['instagram']; ?>
                <div class="col-md-4">
                    <?

                    $o_image = oembed_content($url, true); ?>
                    <a href="<?=$url?>" target="_blank">
                        <? if(!isset($o_image->thumbnail_url)) { ?>
                            <img src="<?= get_instagram_photo(file_get_contents($url)) ?>" alt="<?= $o_image->title ?>" class="m-bottom-15"/>
                        <? } else { ?>
                            <img src="<?= $o_image->thumbnail_url ?>" alt="<?= $o_image->title ?>" class="m-bottom-15"/>
                        <? } ?>
                    </a>
                    <p>
                        <?= $o_image->title ?>
                    </p>
                </div>
                <? endif;
            endforeach; ?>
        </div>
    </div>

<? theme::part('partials/footer') ?>
