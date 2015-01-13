var int_index = 0;
var ar_slides = 	[
							'<img src="images/image_slide (1).jpg" />',
							'<img src="images/image_slide (2).jpg" />',
							'<img src="images/image_slide (3).jpg" />',
							'<img src="images/image_slide (4).jpg" />'
						];
var elem_slideshow = document.getElementById("HP_slideshow"); 

slideshowSlide();

function slideshowNext()
{
	int_index++;
	elem_slideshow.style.opacity = 0;
	if(int_index > (ar_slides.length - 1))
	{
		int_index = 0;
	}
	
	setTimeout('slideshowSlide()',1000);
}

function slideshowSlide()
{
	elem_slideshow.innerHTML = ar_slides[int_index];
	elem_slideshow.style.opacity = 1;
	setTimeout('slideshowNext()', 5000);
}