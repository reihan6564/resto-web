</div>
<!-- footer -->
<footer class="footer">
    <div class="container">
        <nav>
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="#">Resto Web</a>, your convenience our satisfaction
            </p>
        </nav>
    </div>
</footer>
<!-- end footer -->

</div>
</body>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->

<!--  Notifications Plugin    -->
<!--  Share Plugin -->
<script src="<?= base_url(); ?>/assets/js/plugins/jquery.sharrre.js"></script>
<!--  jVector Map  -->
<script src="<?= base_url(); ?>/assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url(); ?>/assets/js/plugins/moment.min.js"></script>
<!--  DatetimePicker   -->
<script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  Sweet Alert  -->
<script src="<?= base_url(); ?>/assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
<!--  Sliders  -->
<script src="<?= base_url(); ?>/assets/js/plugins/nouislider.js" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="<?= base_url(); ?>/assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?= base_url(); ?>/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Bootstrap Table Plugin -->
<script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-table.js"></script>
<!--  DataTable Plugin -->
<script src="<?= base_url(); ?>/assets/js/plugins/jquery.dataTables.min.js"></script>
<!--  Full Calendar   -->
<script src="<?= base_url(); ?>/assets/js/plugins/fullcalendar.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>/assets/js/light-bootstrap-dashboard790f.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url(); ?>/assets/js/demo.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    function sum() {
        var txtFirstNumberValue = document.getElementById('bayar').value;
        var txtSecondNumberValue = document.getElementById('total').value;
        var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('kembalian').value = result;
        }
        if (txtFirstNumberValue == "") {

            document.getElementById('kembalian').value = "Rp. " + 0;
        }
    }
</script>
<script type="text/javascript">
    //'
    $(document).ready(function() {
        // Javascript method
        demo.showNotification();

        demo.initVectorMap();

    });
</script>
<!-- boostrap table minuman -->

<script type="text/javascript">
    $(function() {
        $('table.display').DataTable({
            "responsive": true,
        });
        $('.EditModalMakanan').on('click', function() {
            $('#titel').html("Edit Data Makanan");
            $('.modal-footer button[type=submit]').html('Update Data');
            $('.modal-content form').attr('action', 'http://localhost/resto_web/admin/update_makanan');
            /*$('#lbl_id_makanan').attr('hidden', 'hidden');*/

            console.log("aw");
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkode',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#id_makanan').val(data[0].id_makanan);
                    $('#nama_makanan').val(data[0].nama_makanan);
                    $('#jenis_makanan').val(data[0].jenis_makanan);
                    $('#harga_makanan').val(data[0].harga_makanan);
                    $('#gambar_makanan').val(data[0].gambar_makanan);
                    $('#stok_makanan').val(data[0].stok);
                }
            });
        })

        $('.EditModalMinuman').on('click', function() {
            $('#titel_m').html("Edit Data Minuman");
            $('.modal-footer button[type=submit]').html('Update Data');
            $('.modal-content form').attr('action', 'http://localhost/resto_web/admin/update_minuman');

            console.log("aw");
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkodemn',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#id_minuman').val(data[0].id_minuman);
                    $('#nama_minuman').val(data[0].nama_minuman);
                    $('#jenis_minuman').val(data[0].jenis_minuman);
                    $('#harga_minuman').val(data[0].harga_minuman);
                    $('#gambar_minuman').val(data[0].gambar_minuman);
                    $('#stok_minuman').val(data[0].stok);
                }
            });
        })

        $('.EditModalPaket').on('click', function() {
            $('#titel_p').html("Edit Data Paket");
            $('.modal-footer button[type=submit]').html('Update Data');
            $('.modal-content form').attr('action', 'http://localhost/resto_web/admin/update_paket');

            console.log("aw");
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkodepk',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#id_paket').val(data[0].id_paket);
                    $('#nama_paket').val(data[0].nama_paket);
                    $('#makanan_1').val(data[0].makanan_1);
                    $('#makanan_2').val(data[0].makanan_2);
                    $('#makanan_3').val(data[0].makanan_3);
                    $('#makanan_4').val(data[0].makanan_4);
                    $('#makanan_5').val(data[0].makanan_5);
                    $('#jmakanan_1').val(data[0].jml_mkn_1);
                    $('#jmakanan_2').val(data[0].jml_mkn_2);
                    $('#jmakanan_3').val(data[0].jml_mkn_3);
                    $('#jmakanan_4').val(data[0].jml_mkn_4);
                    $('#jmakanan_5').val(data[0].jml_mkn_5);
                    $('#minuman_1').val(data[0].minuman_1);
                    $('#minuman_2').val(data[0].minuman_2);
                    $('#minuman_3').val(data[0].minuman_3);
                    $('#minuman_4').val(data[0].minuman_4);
                    $('#minuman_5').val(data[0].minuman_5);
                    $('#jminuman_1').val(data[0].jml_mnm_1);
                    $('#jminuman_2').val(data[0].jml_mnm_2);
                    $('#jminuman_3').val(data[0].jml_mnm_3);
                    $('#jminuman_4').val(data[0].jml_mnm_4);
                    $('#jminuman_5').val(data[0].jml_mnm_5);
                    $('#harga_paket').val(data[0].total_hrg_paket);
                }
            });

        })

        $('.TambahModalMakanan').on('click', function() {
            $('#titel').html("Tambah Data Makanan");
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#id_makanan').val('');
            $('#nama_makanan').val('');
            $('#jenis_makanan').val('');
            $('#harga_makanan').val('');
            $('#gambar_makanan').val('');
            $('#stok_makanan').val('');
        })

        $('.TambahModalMinuman').on('click', function() {
            $('#titel_m').html("Tambah Data Minuman");
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#id_minuman').val('');
            $('#nama_minuman').val('');
            $('#jenis_minuman').val('');
            $('#harga_minuman').val('');
            $('#gambar_minuman').val('');
            $('#stok_minuman').val('');
        })

        $('.TambahModalPaket').on('click', function() {
            $('#titel_p').html("Tambah Data Paket");
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#id_paket').val('');
            $('#nama_paket').val('');
            $('#makanan_1').val('');
            $('#makanan_2').val('');
            $('#makanan_3').val('');
            $('#makanan_4').val('');
            $('#makanan_5').val('');
            $('#jmakanan_1').val('');
            $('#jmakanan_2').val('');
            $('#jmakanan_3').val('');
            $('#jmakanan_4').val('');
            $('#jmakanan_5').val('');
            $('#minuman_1').val('');
            $('#minuman_2').val('');
            $('#minuman_3').val('');
            $('#minuman_4').val('');
            $('#minuman_5').val('');
            $('#jminuman_1').val('');
            $('#jminuman_2').val('');
            $('#jminuman_3').val('');
            $('#jminuman_4').val('');
            $('#jminuman_5').val('');
            $('#harga_paket').val('');
        })

        $('.tampilubahstokmkn').on('click', function() {
            $('#titlestok').html("Ubah Stok Makanan");
            $('.modal-content form').attr('action', 'http://localhost/resto_web/admin/update_stok_makanan');
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkode',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#id').val(data[0].id_makanan);
                    $('#stok').val(data[0].stok);
                    $('#jenis').val(data[0].stok);
                }
            });
        });

        $('.tampilmodalubahminuman').on('click', function() {
            $('#titlestok').html("Ubah Stok Minuman");
            $('.modal-content form').attr('action', 'http://localhost/resto_web/admin/update_stok_minuman');
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkodemn',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#id').val(data[0].id_minuman);
                    $('#stok').val(data[0].stok);
                    $('#jenis').val(data[0].stok);
                }
            });
        });

        $('.ubahstatus').on('click', function() {
            $('#titlestok').html("Ubah Status Pesanan Masuk");
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkodestatus',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#waktu').val(data[0].waktu_pesanan);
                    $('#status').val(data[0].status_pesanan);
                }
            });
        });

        $('.ubahstatusPA').on('click', function() {
            $('#titlestok').html("Ubah Status Pesanan Antar");
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkodestatusPA',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#waktu').val(data[0].waktu_pesanan);
                    $('#status').val(data[0].status_pesanan);
                    $('#id_meja').val(data[0].id_meja);
                }
            });
        });

        $('.ubahstatusMJ').on('click', function() {
            $('#titlestok').html("Ubah Status Meja");
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/resto_web/admin/ambilkodestatusMJ',
                data: {
                    id2: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#status').val('Bersihkan');
                    $('#id_meja').val(data[0].id_meja);
                }
            });
        });
        $('.CekKode').on('click', function() {
            $('#tampil').attr('type', 'button');
        });


    });


    ///////////////////////////////////////
    //---------------   1  ----------------//
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });

        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            if ($tr.hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

    });
    ///////////////////////////////////////////////////////

    ////////////////////////////////////////////

    ////////////////////////////////////////
</script>

</html>