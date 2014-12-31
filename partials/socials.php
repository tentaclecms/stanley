<div class="row m-bottom-45 m-top-45" id="socials">
    <div class="col-xs-2 facebook">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= HISTORY ?>&t=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" class="btn-share btn-facebook"><i class="fa fa-facebook-square fa-fw"></i>Share</a>
    </div>
    <div class="col-xs-2 reddit">
        <a href="http://www.reddit.com/submit?url=<?= HISTORY ?>&title=<?= $post->title?>" target="_blank" class="btn-share btn-reddit"> Reddit </a>
    </div>
    <div class="col-xs-2 twitter">
        <a href="https://twitter.com/share?url=<?= HISTORY ?>&via=dayinspiration&text=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="btn-share btn-twitter"><i class="fa fa-twitter-square fa-fw"></i>Tweet</a>
    </div>
    <div class="col-xs-2 stumbleupon">
        <a href="http://www.stumbleupon.com/submit?url=<?= HISTORY ?>&title=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=450');return false;" class="btn-share btn-stumbleupon"><i class="fa fa-stumbleupon fa-fw"></i>Stumble</a>
    </div>
    <div class="col-xs-2 googleplus">
        <a href="https://plus.google.com/share?url=<?= HISTORY ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=500');return false;" target="_blank" title="Share on Google+" class="btn-share btn-google-plus"><i class="fa fa-google-plus-square fa-fw"></i>Share +</a>
    </div>
    <div class="col-xs-2 pinterest">
        <a href="http://www.pinterest.com/pin/create/bookmarklet/?url=<?= HISTORY ?>&media=<?= THEME ?>/assets/img/avatar_128.png&description=<?= $post->title?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn-share btn-pinterest">Pin-it</a>
    </div>
</div>