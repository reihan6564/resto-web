<style>
    @page {
        size: A5;
        /* auto is the initial value */
        margin: 0mm;
        /* this affects the margin in the printer settings */
    }

    body {
        font-family: "Comic Sans MS", cursive, sans-serif;
    }
</style>
<title>Print Pembayaran</title>
<div>
    <div style="width:500px;">
        <div style="text-align:center;">
            <h3 style="color:blueviolet">Resto Web<br>
                Pembayaran Pembelian<br>
                Lokasi di Jalan Madsupi Lami no 32 Sebelah Rujak asoy.</h3>
            _______________________________________________
        </div>
        <br>
        <?php
        $kode = $this->session->userdata('kode');
        $kode = $this->uri->segment(3);
        ?>
        Dengan Kode : <b><?= $kode; ?></b>
        <br>---------------------------------------------<br>
        Makanan yang dipesan :<br><br>
        <?php
        $dp = $this->db->get_where('tb_detail_pesan', ['kode ' => $kode])->row();
        $dpb = $this->db->get_where('tb_pembayaran', ['kode_pembayaran' => $kode])->row();

        if ($dp->makanan_1 == null) {
            $p;
        } else {
            $m1 = $this->db->get_where('tb_makanan', ['id_makanan' => $dp->makanan_1])->row_array();
            echo "-" . $m1['nama_makanan'] . " berjumlah " . $dp->jml_mkn_1 . "<br>&nbsp Harga : Rp." . $m1['harga_makanan'] . "<br>";
            if ($dp->makanan_2 == null) {
                $p;
            } else {
                $m2 = $this->db->get_where('tb_makanan', ['id_makanan' => $dp->makanan_2])->row_array();
                echo "- " . $m2['nama_makanan'] . " berjumlah " . $dp->jml_mkn_2 . "<br>&nbsp Harga : Rp." . $m2['harga_makanan'] . "<br>";
                if ($dp->makanan_3 == null) {
                    $p;
                } else {
                    $m3 = $this->db->get_where('tb_makanan', ['id_makanan' => $dp->makanan_3])->row_array();
                    echo "- " . $m3['nama_makanan'] . " berjumlah " . $dp->jml_mkn_3 . "<br>&nbsp Harga : Rp." . $m3['harga_makanan'] . "<br>";
                    if ($dp->makanan_4 == null) {
                        $p;
                    } else {
                        $m4 = $this->db->get_where('tb_makanan', ['id_makanan' => $dp->makanan_4])->row_array();
                        echo "- " . $m4['nama_makanan'] . " berjumlah " . $dp->jml_mkn_4 . "<br>&nbsp Harga : Rp." . $m4['harga_makanan'] . "<br>";
                        if ($dp->makanan_5 == null) {
                            $p;
                        } else {
                            $m5 = $this->db->get_where('tb_makanan', ['id_makanan' => $dp->makanan_5])->row_array();
                            echo "- " . $m5['nama_makanan'] . " berjumlah " . $dp->jml_mkn_5 . "<br>&nbsp Harga : Rp." . $m5['harga_makanan'] . "<br>";
                            $p;
                        }
                    }
                }
            }
        }

        $pm = 0;
        if ($dp->minuman_1 == null) {
            $pm;
        } else {
            $mm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $dp->minuman_1])->row_array();
            echo "- " . $mm1['nama_minuman'] . " berjumlah " . $dp->jml_mnm_1 . "<br>&nbsp Harga : Rp." . $mm1['harga_minuman'] . "<br>";
            if ($dp->minuman_2 == null) {
                $pm;
            } else {
                $mm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $dp->minuman_2])->row_array();
                echo "- " . $mm2['nama_minuman'] . " berjumlah " . $dp->jml_mnm_2 . "<br>&nbsp Harga : Rp." . $mm2['harga_minuman'] . "<br>";
                if ($dp->minuman_3 == null) {
                    $pm;
                } else {
                    $mm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $dp->minuman_3])->row_array();
                    echo "- " . $mm3['nama_minuman'] . " berjumlah " . $dp->jml_mnm_3 . "<br>&nbsp Harga : Rp." . $mm3['harga_minuman'] . "<br>";
                    if ($dp->minuman_4 == null) {
                        $pm;
                    } else {
                        $mm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $dp->minuman_4])->row_array();
                        echo "- " . $mm4['nama_minuman'] . " berjumlah " . $dp->jml_mnm_4 . "<br>&nbsp Harga : Rp." . $mm4['harga_minuman'] . "<br>";
                        if ($dp->minuman_5 == null) {
                            $pm;
                        } else {
                            $mm5 = $this->db->get_where('tb_minuman', ['id_minuman' => $dp->minuman_5])->row_array();
                            echo "- " . $mm5['nama_minuman'] . " berjumlah " . $dp->jml_mnm_5 . "<br>&nbsp Harga : Rp." . $mm5['harga_minuman'] . "<br>";
                            $pm;
                        }
                    }
                }
            }
        }

        ?>

        <br>---------------------------------------------<br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal Membayar . : Rp. <?= $dpb->membayar; ?><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal Pembayaran : Rp. <?= $dpb->total_pembayaran; ?><br>
        --------------------------------------------- (-) <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal Kembalian . : Rp. <?= $dpb->kembalian; ?><br>
        <br>
        Terima Kasih Selamat Belanja :v
        <br>
        <h4>Kunjungi Website Resmi di restoweb.blogspot.com</h4>
        <h4>Keseringan anda kesini Kesenangan bagi kami :v</h4>
    </div>
</div>
<?php

?>
<script>
    window.print();
</script>