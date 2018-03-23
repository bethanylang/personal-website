var data = {
	slides:[
	{
		image:'https://metrouk2.files.wordpress.com/2017/03/512366437.jpg?w=748&h=498&crop=1',
		tag: 'This is a cute puppy',
		url:'https://www.puppiesmakemehappy.com'	
	},{
		image:'https://www.popsci.com/sites/popsci.com/files/styles/1000_1x_/public/images/2017/10/terrier-puppy.jpg?itok=rIgh3ArV&fc=50,50',
		tag:'This is also a cute puppy',
		url:'https://www.puppiesmakemehappy.com'
	},{
		image:'http://cdn1-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/thumbs/thumbs_impossibly-cute-puppy-5.jpg',
		tag:'This one is v smol',
		url:'https://www.puppiesmakemehappy.com'
	},
]
}

var link = document.getElementById('link');
var headline = document.getElementById('headline');
var slide = document.getElementsByClassName('slide')[0];
var next_btn = document.getElementById('next');
var previous_btn = document.getElementById('previous');
var current_slide = 0;

window.addEventListener('load', init);
next_btn.addEventListener('click', on_next_click);
previous_btn.addEventListener('click', on_previous_click);

function init(event){
  console.log('I have lodead');
  current_slide = Math.floor(Math.random()*data.slides.length);
  update_slide(current_slide);
}

function on_next_click(event){
  event.preventDefault();
  if(current_slide<data.slides.length-1){
    current_slide++;
  }else{
    current_slide = 0;
  }
  update_slide(current_slide)
}

function on_previous_click(event){
  event.preventDefault();
  if(current_slide>0){
    current_slide--;
  }else{
    current_slide = data.slides.length-1;
  }
  update_slide(current_slide)
}

function update_slide(slide_number){
	headline.innerHTML = data.slides[slide_number].tag;
	link.href = data.slides[slide_number].url;
	slide.style.backgroundImage = 'url('+data.slides[slide_number].image+')';
}
