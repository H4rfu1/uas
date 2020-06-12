<!--== Footer Area Start ==-->
<section id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Tentang Kami</h2>
                        <div class="widget-body">
                            <img src="<?= BASEURL; ?>/assets/img/logo.png" alt="JSOFT">
                            <p>Rental mobil terbaik di Jawa Timur.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>alamat</h2>
                        <div class="widget-body">
                            <ul class="get-touch">
                                <li><i class="fa fa-map-marker"></i>Jalan Kenanga, Bondwoso</li>
                                <li><i class="fa fa-map-marker"></i>Jalan Anggrek, Jember</li>
                                <li><i class="fa fa-map-marker"></i>Jalan Melati, Malang</li>
                                <li><i class="fa fa-map-marker"></i>Jalan Mawar, Situbondo</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Kontak Kami</h2>
                        <div class="widget-body">
                            <ul class="get-touch">
                                <li><i class="fa fa-clock-o"></i> Senin-Jumat 09.00 - 17.00</li>
                                <li><i class="fa fa-mobile"></i> +880 01 86 25 72 43</li>
                                <li><i class="fa fa-envelope"></i> cardoor@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

            </div>
        </div>
    </div>
    <!-- Footer Widget End -->
</section>
<!--== Footer Area End ==-->

<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
    <img src="<?= BASEURL; ?>/assets/img/scroll-top.png" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="<?= BASEURL; ?>/assets/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="<?= BASEURL; ?>/assets/js/main.js"></script>

<script type="text/javascript">
$('#hapusModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id') ; // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    var url = $("#hapusModal .modal-footer a").attr('href');
    $("#hapusModal .modal-footer a").attr('href', url + id);
    })
</script>

</body>

</html>
