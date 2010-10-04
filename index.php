<?
  /* 
    This is basically a controller that does one thing because I don't have elaborate needs.
    If you want different layouts based on page or post type, you could switch between them here. */
  if (is_page()){
    render('/layouts/page');
  } else {
    render('/layouts/default');
  }
?>