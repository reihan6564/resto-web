<?php
class update_model extends CI_Model
{
    public function update_status()
    {
        $status = htmlspecialchars($this->input->post('status_b', true));
        $data = array('status_pesanan' => $status);
        $waktu = htmlspecialchars($this->input->post('waktu', true));
        $this->db->where('waktu_pesanan', $waktu);
        $this->db->update('tb_detail_pesan', $data);
    }

    public function update_kode()
    {
        $id_meja = htmlspecialchars($this->input->post('id_meja', true));
        $status_pesan = htmlspecialchars($this->input->post('status_b', true));
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('dmYHis');
        $kode = "RW" . $tgl;
        $query = $this->db->query("UPDATE tb_detail_pesan SET kode = '$kode' where id_meja = '$id_meja' AND status_pesanan = '$status_pesan' ");
    }

    public function update_status_m()
    {
        $data = array('id_status_meja' => '2');
        $waktu = htmlspecialchars($this->input->post('id_meja', true));
        $this->db->where('id_meja', $waktu);
        $this->db->update('tb_meja', $data);
    }

    public function update_bayar()
    {
        $data = [
            'membayar' => htmlspecialchars($this->input->post('bayar', true)),
            'kembalian' => htmlspecialchars($this->input->post('kembalian', true)),
            'status_pembayaran' => "Sudah Bayar",
        ];
        $id = $this->input->post('id');
        $this->db->where('id_pembayaran', $id);
        $this->db->update('tb_pembayaran', $data);
    }

    public function update_password()
    {
        $data = array('password' => password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT));
        $id = $this->input->post('id_pengguna');
        $this->db->where('id_pengguna', $id);
        $this->db->update('tb_pengguna', $data);
    }


    public function update_profile($new_image)
    {
        $data = [
            'nama_pengguna' => htmlspecialchars($this->input->post('username', true)),
            'id_akses' => htmlspecialchars($this->input->post('akses', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'gambar' => $new_image,
        ];
        $id = $this->input->post('id_pengguna');
        $this->db->where('id_pengguna', $id);
        $this->db->update('tb_pengguna', $data);
    }

    public function update_status_s()
    {
        $data = array('status_pesanan' => 'Selesai');
        $id = $this->input->post('kode');
        $this->db->where('kode', $id);
        $this->db->update('tb_detail_pesan', $data);
    }

    public function update_stok()
    {
        $stok = htmlspecialchars($this->input->post('stok', true));
        $data = array('stok' => $stok);
        $id = htmlspecialchars($this->input->post('id', true));
        $this->db->where('id_makanan', $id);
        $this->db->update('tb_makanan', $data);
    }

    public function update_stok_mkn()
    {
        $stok = htmlspecialchars($this->input->post('stok', true));
        $data = array('stok' => $stok);
        $id = htmlspecialchars($this->input->post('id', true));
        $this->db->where('id_makanan', $id);
        $this->db->update('tb_makanan', $data);
    }

    public function update_stok2()
    {
        $stok = htmlspecialchars($this->input->post('stok', true));
        $data = array('stok' => $stok);
        $id = htmlspecialchars($this->input->post('id', true));
        $this->db->where('id_minuman', $id);
        $this->db->update('tb_minuman', $data);
    }

    public function update_meja()
    {
        $meja = htmlspecialchars($this->input->post('id_meja', true));
        $data = array('id_status_meja' => '1');
        $this->db->where('id_meja', $meja);
        $this->db->update('tb_meja', $data);
    }

    public function update_makanan($new_image)
    {
        $id = htmlspecialchars($this->input->post('id_makanan', true));
        $data = [
            'nama_makanan' => htmlspecialchars($this->input->post('nama_makanan', true)),
            'jenis_makanan' => htmlspecialchars($this->input->post('jenis_makanan', true)),
            'harga_makanan' => htmlspecialchars($this->input->post('harga_makanan', true)),
            'gambar_makanan' => $new_image,
            'stok' => htmlspecialchars($this->input->post('stok_makanan', true)),
        ];
        $this->db->where('id_makanan', $id);
        $this->db->update('tb_makanan', $data);
    }

    public function update_minuman($new_image)
    {
        $id = htmlspecialchars($this->input->post('id_minuman', true));
        $data = [
            'nama_minuman' => htmlspecialchars($this->input->post('nama_minuman', true)),
            'jenis_minuman' => htmlspecialchars($this->input->post('jenis_minuman', true)),
            'harga_minuman' => htmlspecialchars($this->input->post('harga_minuman', true)),
            'gambar_minuman' => $new_image,
            'stok' => htmlspecialchars($this->input->post('stok_minuman', true)),
        ];
        $this->db->where('id_minuman', $id);
        $this->db->update('tb_minuman', $data);
    }

    public function update_paket()
    {
        $id = htmlspecialchars($this->input->post('id_paket', true));
        $data = [
            'nama_paket' => htmlspecialchars($this->input->post('nama_paket'), true),
            'makanan_1' => htmlspecialchars($this->input->post('makanan_1'), true),
            'makanan_2' => htmlspecialchars($this->input->post('makanan_2'), true),
            'makanan_3' => htmlspecialchars($this->input->post('makanan_3'), true),
            'makanan_4' => htmlspecialchars($this->input->post('makanan_4'), true),
            'makanan_5' => htmlspecialchars($this->input->post('makanan_5'), true),
            'jml_mkn_1' => htmlspecialchars($this->input->post('jmakanan_1'), true),
            'jml_mkn_2' => htmlspecialchars($this->input->post('jmakanan_2'), true),
            'jml_mkn_3' => htmlspecialchars($this->input->post('jmakanan_3'), true),
            'jml_mkn_4' => htmlspecialchars($this->input->post('jmakanan_4'), true),
            'jml_mkn_5' => htmlspecialchars($this->input->post('jmakanan_5'), true),
            'minuman_1' => htmlspecialchars($this->input->post('minuman_1'), true),
            'minuman_2' => htmlspecialchars($this->input->post('minuman_2'), true),
            'minuman_3' => htmlspecialchars($this->input->post('minuman_3'), true),
            'minuman_4' => htmlspecialchars($this->input->post('minuman_4'), true),
            'minuman_5' => htmlspecialchars($this->input->post('minuman_5'), true),
            'jml_mnm_1' => htmlspecialchars($this->input->post('jminuman_1'), true),
            'jml_mnm_2' => htmlspecialchars($this->input->post('jminuman_2'), true),
            'jml_mnm_3' => htmlspecialchars($this->input->post('jminuman_3'), true),
            'jml_mnm_4' => htmlspecialchars($this->input->post('jminuman_4'), true),
            'jml_mnm_5' => htmlspecialchars($this->input->post('jminuman_5'), true),
            'total_hrg_paket' => htmlspecialchars($this->input->post('harga_paket'), true),
        ];
        $this->db->where('id_paket', $id);
        $this->db->update('tb_paket', $data);
    }
}
