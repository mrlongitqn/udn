<footer>
    <section class="footer-center text-center">
        <span>Bản quyền (C) 2018 thuộc Đại học Đà Nẵng</span><br>
        <span>41 Lê Duẩn, Quận Hải Châu, Thành phố Đà Nẵng</span><br>
        <span>Điện thoại: (84-236) 3822041; Fax: (84-236) 3823683; Email: webmaster@ac.udn.vn</span>
    </section>
    <a href="#" id="back-to-top" title="Back to top"><i class="fas fa-arrow-up"></i></a>
    <script>
        if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
    backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
            $('#back-to-top').addClass('show');
        } else {
            $('#back-to-top').removeClass('show');
        }
    };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
</script>

</footer>
<script>

    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>



</body>
</html>
