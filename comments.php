<? 
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
    die ('Please do not load this page directly. Thanks!');
  }
  // if there's a password
  if (!empty($post->post_password)) {
    // and it doesn't match the cookie
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
      <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
      <? return; 
    }
  }
  /* This variable is for alternating comment background */
  $oddcomment = 'class="alt" ';
?>

<div id="comment-section">

<? if ($comments) : ?>
  <h3><? comments_number('No Comments', 'One Comment', '% Comments' );?></h3>
  <ol id="comments">
    <? foreach ($comments as $comment) {
      render('/partials/_comment');
    } ?>
<? else : // There are no comments so far ?>
  <? if ('open' == $post->comment_status) : ?>
    <p class="nocomments">No Comments yet</p>
  <? else : // comments are closed ?>
    <p class="nocomments">Comments are closed.</p>
  <? endif; ?>
<? endif; ?>



<? if ('open' == $post->comment_status) { ?>
<h4>Leave a Comment</h4>
  <? if ( get_option('comment_registration') && !$user_ID ) : ?>
    <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
  <? else : ?>
    <? if ( $user_ID ) { ?>
      <p class="logged_in">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
    <? } ?>
  
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <fieldset>
        <? if (!$user_ID ) { ?>
          <p>
            <label class="textbox" for="author">Name<?php if ($req) echo "*"; ?></label>
            <input class="textbox" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
          </p>
          <p>
            <label class="textbox" for="email">E-mail<?php if ($req) echo "*"; ?> <small>(kept private)</small></label>
            <input class="textbox" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
          </p>
          <p>
            <label class="textbox" for="url">Website</label>
            <input class="textbox" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
          </p>
        <? } ?>
        <p>
          <label class="textbox" for="comment">Comment</label>
          <textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea>
        </p>
      </fieldset>
      <button name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment"><span>Submit Comment</span></button>
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      <? do_action('comment_form', $post->ID); ?>
    </form>
  <? endif; ?>
<? } ?>
</div>