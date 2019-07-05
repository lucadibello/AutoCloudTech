<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-5 flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic">
                        <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> AutoCloudTech</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- JQuery -->
<script type="text/javascript" src="./application/assets/mdb/js/jquery-3.4.1.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="./application/assets/mdb/js/bootstrap.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="./application/assets/mdb/js/popper.min.js"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="./application/assets/mdb/js/mdb.min.js"></script>

<!-- Jarallax -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>

<!-- Navbar js script -->
<script src="./application/assets/js/navbar.js"></script>

<!-- More text js script -->
<script src="./application/assets/js/more.js"></script>

<!-- Swiper Js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

<script>
    $(document).ready(function() {
        console.log($(".jarallax"));

        //initialize parallax background
        $(".jarallax").jarallax({
            speed: 0.2,
        });

        //initialize swiper when document ready
        var swiper = new Swiper($(".swiper-container"), {
            direction: 'vertical',
            slidesPerView: 1,
            spaceBetween: 100,
            mousewheel: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Initialize slider
        swiper.init();
    });
</script>

</body>

</html>