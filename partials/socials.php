<div class="row m-bottom-45 m-top-45" id="socials">
    <div class="md-2 facebook">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= HISTORY ?>&t=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" class="btn-share btn-facebook"><i class="fa fa-facebook-square fa-fw"></i>Share</a>
    </div>
    <div class="md-2 reddit">
        <a href="http://www.reddit.com/submit?url=<?= HISTORY ?>&title=<?= $post->title?>" target="_blank" class="btn-share btn-reddit"> Reddit </a>
    </div>
    <div class="md-2 twitter">
        <a href="https://twitter.com/share?url=<?= HISTORY ?>&via=dayinspiration&text=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="btn-share btn-twitter"><i class="fa fa-twitter-square fa-fw"></i>Tweet</a>
    </div>
    <div class="md-2 stumbleupon">
        <a href="http://www.stumbleupon.com/submit?url=<?= HISTORY ?>&title=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=450');return false;" class="btn-share btn-stumbleupon"><i class="fa fa-stumbleupon fa-fw"></i>Stumble</a>
    </div>
    <div class="md-2 googleplus">
        <a href="https://plus.google.com/share?url=<?= HISTORY ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=500');return false;" target="_blank" title="Share on Google+" class="btn-share btn-google-plus"><i class="fa fa-google-plus-square fa-fw"></i>Share +</a>
    </div>
    <? /* https://business.pinterest.com/en/widget-builder#do_pin_it_button

javascript:void((function(d){var%20e=d.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);d.body.appendChild(e)})(document));

<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="white" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_28.png" /></a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>


<a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-lang="en"></a>
<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>


*/ ?>
    <div class="md-2 pinterest">
        <a href="http://www.pinterest.com/pin/create/bookmarklet/?url=<?= HISTORY ?>&media=<?= THEME ?>/assets/img/avatar_128.png&description=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn-share btn-pinterest">Pin-it</a>
    </div>

</div>
