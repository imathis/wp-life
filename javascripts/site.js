window.addEvent('domready', function() {
  html5toFlash();
  captionizer();
});

function html5toFlash(){
  var videos = $$('video');
  if(!videos){return}
  videos.each(function(video){
    source = video.getElement('source').get('src');
    if(!source.contains('mp4') || !Modernizr.video.h264){
      span = new Element('span', {'class':'video'}).wraps(video);
      flashvid = new Swiff(flashplayerlocation, {
        width   : video.get('width').toInt(),
        height  : video.get('height').toInt() + 29,
        params  : {
          movie : source,
          wmode : "opaque",
          allowfullscreen : "true"
        },
        vars : {
          file : source,
          image : video.get('poster'),
          skin : flashplayerskin
        },
        container: span
      });
      video.dispose();
    } else if(video.get('preload') == "none"){
      video.addEvent('click', function(event){
        clickToLoad(video);
      });
    }
  })
}

function clickToLoad(video){
  video.set('preload', true);
  if(!video.get('autoplay')){
    video.set('autoplay', true);
  }
  video.removeEvent('click', clickToLoad);
}

function captionizer(){
  //add captions from titles
  $$('img[title]').filter(function(img){ return !img.getParent('.gallery-item')}).each(function(image){
    captionImage(image, image.get('title'));
  });
  //add captions from quotes
  $$('q').each(function(caption){
    text = caption.get('html');
    target = caption.getPrevious('img')
    if(!target){
      p = caption.getParent();
      target = p.getPrevious().getLast('img')
      console.log(p)
      p.destroy();
    }
    caption.destroy();
    captionImage(target, text);
  });
  
}
function captionImage(image, caption){
  title = caption
  wrap = new Element('span', {'class':'img-wrap', 'styles':{'width':image.get('width').toInt()+'px'}}).wraps(image);
  new Element('span', {'class':'caption', 'html':title, 'styles':{'width':(image.get('width').toInt() - 10 )+'px'}}).inject(image, 'after');
}