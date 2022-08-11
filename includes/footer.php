<footer class="main-footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <a href="javascript:void(0)" class="ft-logo">
                        <img src="assets/images/ft-logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-7 offset-lg-1 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <h3 class="ft-head">
                                Mapa strony
                            </h3>
                            <ul class="ft-link">
                                <li>
                                    <a href="javascript:void(0)">
                                        Strona główna
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        O nas
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Oferta
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Kontakt
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <h3 class="ft-head">
                                Kontakt
                            </h3>
                            <ul class="ft-link">
                                <li>
                                    <a href="mailto:zawadzki@biuro.pl">
                                        zawadzki@biuro.pl
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:48600300501">
                                        +48 600 300 501
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Miasto 30-302
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        ul. Ulicowa 3A
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <h3 class="ft-head">
                                Dane firmy
                            </h3>
                            <ul class="ft-link">
                                <li>
                                    <a href="javascript:void(0)">
                                        Zawadzki sp. z o. o.
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        NIP: 832-931-03-23
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        REGON: 395239133
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/js/app.js"></script> -->
    <script>
        let menuIcon = document.querySelector(".menu-icon");
        let lines = Array.from(menuIcon.children);

        function toggleMenu(e) {
            lines.forEach((line) => {
                menuIcon.classList.toggle("active");
                line.classList.toggle("active");
                line.classList.toggle("no-animation");
            });
        }
        menuIcon.addEventListener("click", toggleMenu);

        $(".menu-icon").click(function () {
            $(".navbar-collapse").slideToggle();
        });

        var swiper = new Swiper(".offer-carousel", {
            loop: false,
            navigation: {
                nextEl: ".swiper-btn-next",
                prevEl: ".swiper-btn-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4.7,
                    spaceBetween: 20,
                },
            },
        });
        var swiper = new Swiper(".pc-carousel", {
            loop: false,
            navigation: {
                nextEl: ".swiper-btn-next",
                prevEl: ".swiper-btn-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });

        if($('.pr-wrapper').length){
            $('.pr-wrapper').each(function(){
                console.log($(this));
                var pr = $(this).attr('data-percent');
                var sp = $(this).find('span');
                $(this).find('p').html(pr+'%');
                if(pr > 40){
                    $(this).find('p').addClass('white');
                }
                sp.css('width', pr+'%')
            })
        }
    </script>
</body>

</html>