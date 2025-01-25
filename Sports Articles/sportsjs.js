var slideIndex=0;
showSlides();
function showSlides() {
	var i;
	var slides=document.getElementsByClassName("sSlides");
	for (i=0;
	i < slides.length;
	i++) {
		slides[i].style.display="none";
	}
	slideIndex++;
	if (slideIndex > slides.length) {
		slideIndex=1
	}
	slides[slideIndex-1].style.display="block";
	setTimeout(showSlides, 3000);
}

function toggleword() 
            {
            var element = document.getElementById("like");
            element.classList.toggle("liked");
            var word=document.getElementById("icon").innerHTML;
            switch(word){
            case "Like":
            icon.innerHTML = "Liked";
            break;
            case "Liked":
            icon.innerHTML = "Like";
            break;
            }
		}