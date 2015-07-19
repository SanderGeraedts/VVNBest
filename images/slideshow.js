var int_index = 0;
var ar_slides = 	[
						'<img src="slide_1.JPG" />',
						'<img src="slide_2.JPG" />',
						'<img src="slide_3.JPG" />',
						'<img src="slide_4.JPG" />'
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