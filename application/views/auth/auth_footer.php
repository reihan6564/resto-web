</body>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="<?= base_url(); ?>assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
<!--  Share Plugin -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.sharrre.js"></script>
<!--  jVector Map  -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
<!--  DatetimePicker   -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  Sweet Alert  -->
<script src="<?= base_url(); ?>assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
<!--  Sliders  -->
<script src="<?= base_url(); ?>assets/js/plugins/nouislider.js" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Bootstrap Table Plugin -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-table.js"></script>
<!--  DataTable Plugin -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
<!--  Full Calendar   -->
<script src="<?= base_url(); ?>assets/js/plugins/fullcalendar.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>assets/js/light-bootstrap-dashboard790f.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url(); ?>assets/js/demo.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2019 04:30:14 GMT -->

</html>