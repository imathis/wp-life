<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <? render('/layouts/_head'); ?>
  <body>
    <? render('/layouts/_header'); ?>
    <div id="page">
      <?
        if (have_posts()){
          $post_count = 1;
    
          // Adding search results header
          if (is_search()){ render('/partials/_search_header'); }
  
          // Adding archives Header
          elseif (is_archive()){ render('/partials/_archives_header'); }
    
          // The Post Loop
          while (have_posts()){ render('/partials/_post'); }

        // No search results
        } elseif (is_search()){ render('/partials/_no_search_results');
 
        // No posts are found
        } else { render('/partials/_not_found'); }
      ?>
      <div class="pagination">
        <div class="next"><? previous_posts_link('Newer Posts') ?></div>
        <div class="prev"><? next_posts_link('Older Posts') ?></div>
      </div>
    </div>
    <? render('/layouts/_footer'); ?>
  </body>
</html>