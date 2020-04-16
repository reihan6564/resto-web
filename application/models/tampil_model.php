<?php
class tampil_model extends CI_Model
{
    public function join_meja()
    {
        $query = "SELECT * FROM tb_meja INNER JOIN tb_status_meja ON tb_meja.id_status_meja = tb_status_meja.id_status_meja";
        return $this->db->query($query)->result_array();
    }

    public function pesanan_diantar()
    {
        return $this->db->get_where('tb_detail_pesan', ['status_pesanan' => 'Pesanan Antar'])->result_array();
    }

    public function pesanan_selesai()
    {
        return $this->db->get_where('tb_detail_pesan', ['status_pesanan' => 'Pesanan Selesai'])->result_array();
    }


    public function pesanan_diterima()
    {
        return $this->db->get_where('tb_detail_pesan', ['status_pesanan' => 'Pesanan Diterima'])->result_array();
    }

    public function pesanan_masuk()
    {
        return $this->db->get_where('tb_detail_pesan', ['status_pesanan' => 'Pesanan Masuk'])->result_array();
    }

    public function hitung_pm()
    {
        $query = "SELECT count(id_meja) as jumlah_pm FROM tb_detail_pesan where status_pesanan = 'Pesanan Masuk'";
        return $this->db->query($query)->result_array();
    }

    public function hitung_pa()
    {
        $query = "SELECT count(id_meja) as jumlah_pa FROM tb_detail_pesan where status_pesanan = 'Pesanan Antar'";
        return $this->db->query($query)->result_array();
    }

    public function hitung_pd()
    {
        $query = "SELECT count(id_meja) as jumlah_pd FROM tb_detail_pesan where status_pesanan = 'Pesanan Diterima'";
        return $this->db->query($query)->result_array();
    }

    public function hitung_pb()
    {
        $query = "SELECT count(id_pembayaran) as jumlah_pb FROM tb_pembayaran where status_pembayaran = 'Belum Bayar'";
        return $this->db->query($query)->result_array();
    }

    public function hitung_ps()
    {
        $query = "SELECT count(id_pembayaran) as jumlah_ps FROM tb_pembayaran where status_pembayaran = 'Sudah Bayar'";
        return $this->db->query($query)->result_array();
    }

    public function tampil_makanan()
    {
        return $this->db->get('tb_makanan')->result_array();
    }

    public function edit_profile($id_pengguna)
    {
        return $this->db->get_where('tb_pengguna', ['id_pengguna' => $id_pengguna])->result_array();
    }

    public function tampil_pembayaran()
    {
        return $this->db->get_where('tb_pembayaran', ['status_pembayaran' => 'Sudah Bayar'])->result_array();
    }

    public function tampil_pembayaran_b()
    {
        return $this->db->get_where('tb_pembayaran', ['status_pembayaran' => 'Belum Bayar'])->result_array();
    }

    public function tampil_minuman()
    {
        return $this->db->get('tb_minuman')->result_array();
    }

    public function tampil_paket()
    {
        return $this->db->get('tb_paket')->result_array();
    }

    public function tampil_kode()
    {
        $kode = $this->input->post('kode');
        return $this->db->get_where('tb_pembayaran', ['kode_pembayaran' => $kode])->result_array();
    }

    public function tampil_meja()
    {
        $kode = $this->input->post('nomor_meja');
        return $this->db->get_where('tb_pembayaran', ['id_meja' => $kode])->result_array();
    }

    public function tampil_id_mkn()
    {
        $id = $this->input->post('id2');
        return $this->db->get_where('tb_makanan', ['id_makanan' => $id])->result_array();
    }

    public function tampil_id_mnm()
    {
        $id = $this->input->post('id2');
        return $this->db->get_where('tb_minuman', ['id_minuman' => $id])->result_array();
    }

    public function tampil_waktu_status()
    {
        $id = $this->input->post('id2');
        return $this->db->get_where('tb_detail_pesan', ['waktu_pesanan' => $id])->result_array();
    }

    public function tampil_id_pkt()
    {
        $id = $this->input->post('id2');
        return $this->db->get_where('tb_paket', ['id_paket' => $id])->result_array();
    }

    public function tampil_id_paket($id)
    {
        return $this->db->get_where('tb_paket', ['id_paket' => $id])->result_array();
    }

    public function tampil_id_pembayaran($id)
    {
        return $this->db->get_where('tb_pembayaran', ['id_pembayaran' => $id])->result_array();
    }
    public function tampil_meja_status()
    {
        $id = $this->input->post('id2');
        return $this->db->get_where('tb_meja', ['id_meja' => $id])->result_array();
    }
}
