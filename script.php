<<<<<<< HEAD
<a href="javascript:" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution/revolution.extension.actions.min.js"></script>
<script src="js/revolution/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/revolution.extension.migration-2.min.js"></script>
<script src="js/revolution/revolution.extension.parallax.min.js"></script>
<script src="js/revolution/revolution.extension.navigation.min.js"></script>
<script src="js/revolution/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution/revolution.extension.video.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tabslet.js/1.7.3/jquery.tabslet.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
=======
<a href="javascript:" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<script>
    $(document).ready(function() {
        $(".search").keyup(function() {
            var searchTerm = $(".search").val();
            var listItem = $('.results tbody').children('tr');
            var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

            $.extend($.expr[':'], {
                'containsi': function(elem, i, match, array) {
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
            });

            $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
                $(this).attr('visible', 'false');
            });

            $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                $(this).attr('visible', 'true');
            });

            var jobCount = $('.results tbody tr[visible="true"]').length;
            $('.counter').text(jobCount + ' item');

            if (jobCount == '0') {
                $('.no-result').show();
            } else {
                $('.no-result').hide();
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution/revolution.extension.actions.min.js"></script>
<script src="js/revolution/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/revolution.extension.migration-2.min.js"></script>
<script src="js/revolution/revolution.extension.parallax.min.js"></script>
<script src="js/revolution/revolution.extension.navigation.min.js"></script>
<script src="js/revolution/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution/revolution.extension.video.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tabslet.js/1.7.3/jquery.tabslet.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
>>>>>>> 8c27b20 (	new file:   about.php)
<script src="js/map.js"></script>