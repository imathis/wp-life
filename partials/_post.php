<?
  the_post();
  $post_cat = get_the_category();
  $post_cat = strtolower($post_cat[0]->cat_name);
?>

<div class="post<?= $post_count++; ?> <? if(is_single()){?>single<? }?>" id="post-<? the_ID(); ?>">
  <div class="article">
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="pubdate">
      <strong><? the_time('F jS, Y') ?></strong> by <span class="author"><? the_author() ?></span>
      <? if(is_user_logged_in()){ ?>
        <a class="edit" href="/wp-admin/post.php?action=edit&post=<? the_ID(); ?>">edit</a>
      <? } ?>
    </div>
    <div class="section">
      <?php the_content("This post continues"); ?>
    </div>
    <div class="meta">
      <? if(!is_single()){ ?>
        <span class="comment_counter">
          <? comments_popup_link('Leave a comment &#187;', 'Leave a Comment &#187;', 'Leave a Comment &#187;'); ?>
        </span>
      <? } ?>
      <? if(is_single()){ ?>
        Categorized under <? the_category(', ') ?><? the_tags(' | Tags: ', ', ', ' '); ?>
      <? }?>
    </div>
  </div>
  <? if(is_single()){ comments_template(); }?>
</div>