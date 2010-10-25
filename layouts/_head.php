<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=yes" />
  
  <link href="<? bloginfo('template_url')?>/favicon.png" rel="shortcut icon" type="image/png" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <link rel="stylesheet" href="<? bloginfo('stylesheet_url')?>" type="text/css" media="screen" />
    
  <script type="text/javascript">
    var flashplayerlocation = "<? bloginfo('template_url')?>/jwplayer/player.swf";
    var flashplayerskin = "<? bloginfo('template_url')?>/jwplayer/glow/glow.xml";
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.4/mootools-yui-compressed.js" type="text/javascript"></script>
  <script src="<? bloginfo('template_url')?>/javascripts/modernizr-1.6.min.js" type="text/javascript"></script>
  <script src="<? bloginfo('template_url')?>/javascripts/site.js" type="text/javascript"></script>
  
  <?php wp_head(); ?>
</head>