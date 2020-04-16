<?php
class insert_model extends CI_Model
{
    public function insert_pengguna($new_image)
    {
        $data = [
            'nama_pengguna' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'id_akses' => htmlspecialchars($this->input->post('akses', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'gambar' => $new_image
        ];
        $this->db->insert('tb_pengguna', $data);
    }

    public function insert_makanan($new_image)
    {
        $data = [
            'nama_makanan' => htmlspecialchars($this->input->post('nama_makanan'), true),
            'jenis_makanan' => htmlspecialchars($this->input->post('jenis_makanan', true)),
            'harga_makanan' => htmlspecialchars($this->input->post('harga_makanan', true)),
            'gambar_makanan' => $new_image,
            'stok' => htmlspecialchars($this->input->post('stok_makanan', true)),
        ];
        $this->db->insert('tb_makanan', $data);
    }

    public function insert_masukan()
    {
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul'), true),
            'isian' => htmlspecialchars($this->input->post('isian', true)),
        ];
        $this->db->insert('tb_masukan', $data);
    }


    public function insert_minuman($new_image)
    {
        $data = [
            'nama_minuman' => htmlspecialchars($this->input->post('nama_minuman', true)),
            'jenis_minuman' => htmlspecialchars($this->input->post('jenis_minuman', true)),
            'harga_minuman' => htmlspecialchars($this->input->post('harga_minuman', true)),
            'gambar_minuman' => $new_image,
            'stok' => htmlspecialchars($this->input->post('stok_minuman', true)),
        ];
        $this->db->insert('tb_minuman', $data);
    }

    public function insert_paket()
    {
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
        $this->db->insert('tb_paket', $data);
    }

    public function insert_pesanan()
    {
        $data = [
            'id_meja' => htmlspecialchars($this->input->post('id_meja'), true),
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
            'paket' => htmlspecialchars($this->input->post('id_paket'), true),
            'jml_paket' => htmlspecialchars($this->input->post('jml_paket'), true),
            'waktu_pesanan' => htmlspecialchars($this->input->post('waktu'), true),
            'status_pesanan' => htmlspecialchars($this->input->post('status'), true),
        ];
        $this->db->insert('tb_detail_pesan', $data);
    }

    public function insert_pesanan_u()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $kode = "RW" . date('Ymdhis');
        $this->session->set_userdata('kode', $kode);
        if ($this->session->userdata('id1')) {
            $mkn1 = $this->session->userdata('id1');
        } else {
            $mkn1 = "";
        }
        if ($this->session->userdata('id2')) {
            $mkn2 = $this->session->userdata('id2');
        } else {
            $mkn2 = "";
        }
        if ($this->session->userdata('id3')) {
            $mkn3 = $this->session->userdata('id3');
        } else {
            $mkn3 = "";
        }
        if ($this->session->userdata('id4')) {
            $mkn4 = $this->session->userdata('id4');
        } else {
            $mkn4 = "";
        }
        if ($this->session->userdata('id5')) {
            $mkn5 = $this->session->userdata('id5');
        } else {
            $mkn5 = "";
        }
        if ($this->session->userdata('makanan1')) {
            $jml_mkn1 = $this->session->userdata('makanan1');
        } else {
            $jml_mkn1 = "0";
        }
        if ($this->session->userdata('makanan2')) {
            $jml_mkn2 = $this->session->userdata('makanan2');
        } else {
            $jml_mkn2 = "0";
        }
        if ($this->session->userdata('makanan3')) {
            $jml_mkn3 = $this->session->userdata('makanan3');
        } else {
            $jml_mkn3 = "0";
        }
        if ($this->session->userdata('makanan4')) {
            $jml_mkn4 = $this->session->userdata('makanan4');
        } else {
            $jml_mkn4 = "0";
        }
        if ($this->session->userdata('makanan5')) {
            $jml_mkn5 = $this->session->userdata('makanan5');
        } else {
            $jml_mkn5 = "0";
        }

        if ($this->session->userdata('id_m1')) {
            $mnm1 = $this->session->userdata('id_m1');
        } else {
            $mnm1 = "";
        }
        if ($this->session->userdata('id_m2')) {
            $mnm2 = $this->session->userdata('id_m2');
        } else {
            $mnm2 = "";
        }
        if ($this->session->userdata('id_m3')) {
            $mnm3 = $this->session->userdata('id_m3');
        } else {
            $mnm3 = "";
        }
        if ($this->session->userdata('id_m4')) {
            $mnm4 = $this->session->userdata('id_m4');
        } else {
            $mnm4 = "";
        }
        if ($this->session->userdata('id_m5')) {
            $mnm5 = $this->session->userdata('id_m5');
        } else {
            $mnm5 = "";
        }
        if ($this->session->userdata('minuman1')) {
            $jml_mnm1 = $this->session->userdata('minuman1');
        } else {
            $jml_mnm1 = "0";
        }
        if ($this->session->userdata('minuman2')) {
            $jml_mnm2 = $this->session->userdata('minuman2');
        } else {
            $jml_mnm2 = "0";
        }
        if ($this->session->userdata('minuman3')) {
            $jml_mnm3 = $this->session->userdata('minuman3');
        } else {
            $jml_mnm3 = "0";
        }
        if ($this->session->userdata('minuman4')) {
            $jml_mnm4 = $this->session->userdata('minuman4');
        } else {
            $jml_mnm4 = "0";
        }
        if ($this->session->userdata('minuman5')) {
            $jml_mnm5 = $this->session->userdata('minuman5');
        } else {
            $jml_mnm5 = "0";
        }

        if ($this->session->userdata('id_p')) {
            $pkt = $this->session->userdata('id_p');
        } else {
            $pkt = "";
        }
        if ($this->session->userdata('jml_pkt')) {
            $jml_pkt = $this->session->userdata('jml_pkt');
        } else {
            $jml_pkt = "0";
        }
        $data = [
            'id_meja' => htmlspecialchars($this->input->post('id_meja'), true),
            'makanan_1' => $mkn1,
            'makanan_2' => $mkn2,
            'makanan_3' => $mkn3,
            'makanan_4' => $mkn4,
            'makanan_5' => $mkn5,
            'jml_mkn_1' => $jml_mkn1,
            'jml_mkn_2' => $jml_mkn2,
            'jml_mkn_3' => $jml_mkn3,
            'jml_mkn_4' => $jml_mkn4,
            'jml_mkn_5' => $jml_mkn5,
            'minuman_1' => $mnm1,
            'minuman_2' => $mnm2,
            'minuman_3' => $mnm3,
            'minuman_4' => $mnm4,
            'minuman_5' => $mnm5,
            'jml_mnm_1' => $jml_mnm1,
            'jml_mnm_2' => $jml_mnm2,
            'jml_mnm_3' => $jml_mnm3,
            'jml_mnm_4' => $jml_mnm4,
            'jml_mnm_5' => $jml_mnm5,
            'paket' => $pkt,
            'jml_paket' => $jml_pkt,
            'waktu_pesanan' => $tgl,
            'status_pesanan' => 'Pesanan Masuk',
            'kode' => $kode,
        ];
        $this->db->insert('tb_detail_pesan', $data);
    }

    public function insert_pembayaran($tdp, $total)
    {
        $data = [
            'id_meja' => $tdp['id_meja'],
            'kode_pembayaran' => htmlspecialchars($this->input->post('kode'), true),
            'total_pembayaran' => $total,
            'status_pembayaran' => 'Belum Bayar',
        ];
        $this->db->insert('tb_pembayaran', $data);
    }
}
