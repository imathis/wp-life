<li <? echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
  <? if ($comment->comment_approved == '0'){ echo 'awaiting_approval';}?><? comment_text() ?>
    <p>
      Posted by <cite><? comment_author_link() ?></cite>
      <a href="#comment-<?php comment_ID() ?>" class="comment_date" title=""><? comment_date('F jS, Y') ?> at <? comment_time() ?></a>
      <? edit_comment_link('edit','&nbsp;&nbsp;',''); ?>
      <? if ($comment->comment_approved == '0'){ echo '<em>Awaiting Moderation</em>';}?>
    </p>
</li>