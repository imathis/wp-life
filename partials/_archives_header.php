<div class="results">
  <? /* If this is a category archive */ if (is_category()) { ?>
    Archive for the <span>&#8216;<?php single_cat_title(); ?>&#8217;</span> category
  <? /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    Posts Tagged <span>&#8216;<?php single_tag_title(); ?>&#8217;</span>
  <? /* If this is a daily archive */ } elseif (is_day()) { ?>
    Archive for <span><?php the_time('F jS, Y'); ?></span>
  <? /* If this is a monthly archive */ } elseif (is_month()) { ?>
    Archive for <span><?php the_time('F, Y'); ?></span>
  <? /* If this is a yearly archive */ } elseif (is_year()) { ?>
    Archive for <span><?php the_time('Y'); ?></span>
  <? /* If this is an author archive */ } ?>
</div>