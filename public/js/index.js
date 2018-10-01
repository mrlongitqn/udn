$(document).ready(function(){
    $(".carousel").carousel({
        interval: 3000
    });

    $(".carousel .vertical .item").each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(":first");
    }
    next.children(":first-child").clone().appendTo($(this));

    for (var i=1;i<2;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(":first");
        }

        next.children(":first-child").clone().appendTo($(this));
    }
});
});
$(document).ready(function(){
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
     }
     slideIndex++;
     if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

    });


