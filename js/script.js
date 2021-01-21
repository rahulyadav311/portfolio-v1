//  Animation On Scroll
AOS.init();

//  Owl Carousel
$('.home-work-carousel').owlCarousel({
	loop:true,
	dots:false,
	margin:15,
	nav:true,
	responsive:{
		0:{items:1},
		600:{items:3},
		1000:{items:5}
	}
})


/*const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', e => {
	cursor.setAttribute('style', 'top:'+(e.pageY-10)+'px; left:'+(e.pageX-10)+'px;')
})
document.addEventListener('click', () => {
	cursor.classList.add('cursorExpand');
	setTimeout(() => {
		cursor.classList.remove('cursorExpand');
	}, 500)
})*/
