# What is wp-life?

I wrote a very minimal WordPress theme for my family blog. This is it. When I say minimal, I mean it.
Here's a list of what **this doesn't have**:

- A sidebar
- Navigation
- Search
- Widgets
- And More!

### Who is this for?

Me. But you can use it too if you like. If you're like me and you want to make your family blog look nice, but you're sick of flipping through crappy free WordPress themes or suffering through editing a crappy free WordPress theme, just to share pictures of your son with your mother-in-law. Perhaps you'll like this instead.

### WordPress Themes suck (a short rant)

I strongly dislike (to put it mildly) how nearly all WordPress themes are written. There is almost no concept of reuse built in, and WordPress uses annoying functions like get_header(); to basically import header.php. Changing your HTML layout usually means
making the same edits across many different files. It just plain sucks. You already know this because you learned to write WordPress themes by modifying existing themes.

With WordPress themes frequently HTML tags (like `<div id="wrapper">`) opened in one file and closed in another file, which is liked through a magical WordPress function. This makes editing a real pain since you can use text editor folding, and you have to keep track
of closed divs across multiple files. This leads to lots of inline HTML comments like `<!-- closing #wrapper-7-big-blue-crappy-theme -->` scattered across the theme.
Updating custom WordPress themes is a pain which typically involves messing about with replacing files over ftp.

### How WP-Life fixes that

1. **Layouts & Partials** - WordPress conditions call a simple render function using server site imports to create sensible layouts and partials. This maximizes reuse and allows for sensible HTML.
2. **Rsync Deployment** - Update the Rakefile with your hosting account's ssh username and theme path eg. "user@host.com" "~/document_root/wp-content/themes/wp-life". Then run `rake push` from the terminal to update your theme instantly.
3. **Compass/Sass** - Simple organized stylesheets with Compass and Sass. All my projects use this. Yours should too.
4. **Modernizer & HTML5 video support** - I'm using the HTML5 video element with h.264 and I'm not re-encoding my video for FireFox. Instead I'm using [Modernizer.js](http://modernizr.com) (included) to detect h.264 support and MooTools to swap out for a flash player using the same h.264 video.
5. **Captioned images** - If images have a title attribute set, that's all you need. I've written some javascript (in site.js) that adds nicely styled captions. Also if you prefer, you can add captions as a `<q>` element after any image. The script will detect it and add it to the preceding image.
6. **Font-face** - For that custom-web flavor, I'm using CSS3's @font-face support (with free fonts from [FontSquirrel](http://fontsquirrel.com/)). Checkout /stylesheets/partials/_typography.sass to change this.

### Got a problem?

If you have problems with it, I'll read issues posted on github or comments here &mdash; but I'm not going to hold your hand or anything.