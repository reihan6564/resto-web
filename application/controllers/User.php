<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tampil_model');
        $this->load->model('insert_model');
        $this->load->model('update_model');
        $this->load->model('hapus_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Resto Web';
        if ($this->session->userdata('email') == null) {

            $this->load->view('index', $data);
        }
    }

    public function daftar_menu()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Daftar Menu';
        if ($this->session->userdata('email') == null) {

            $this->load->view('pembeli/daftar_menu', $data);
        }
    }

    public function pesanan()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Pesan Makanan';
        $data['pakets'] = $this->tampil_model->tampil_paket();
        $data['makanan'] = $this->tampil_model->tampil_makanan();
        $data['minuman'] = $this->tampil_model->tampil_minuman();
        if ($this->session->userdata('email') == null) {

            $this->load->view('pembeli/pesanan', $data);
        }
    }

    public function keranjang()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Keranjang Makanan';
        if ($this->session->userdata('email') == null) {
            $this->load->view('pembeli/keranjang', $data);
        }
    }

    public function bakul()
    {
        $id = $this->input->post('id_makanan');
        $jml_mkn = $this->input->post('jml_mkn');

        //makanan-------------------------------------
        if ($this->session->userdata('id1') == NULL) {
            $data = [
                'id1' => $id,
                'makanan1' => $jml_mkn
            ];
            $this->session->set_userdata($data);
            echo $this->session->userdata('makanan1');
            redirect('user/pesanan');
        } else if ($this->session->userdata('id2') == NULL) {
            $data = [
                'id2' => $id,
                'makanan2' => $jml_mkn
            ];
            $this->session->set_userdata($data);
            echo $this->session->userdata('makanan1');
            echo $this->session->userdata('makanan2');
            redirect('user/pesanan');
        } else if ($this->session->userdata('id3') == NULL) {
            $data = [
                'id3' => $id,
                'makanan3' => $jml_mkn
            ];
            $this->session->set_userdata($data);
            echo $this->session->userdata('makanan1');
            echo $this->session->userdata('makanan2');
            echo $this->session->userdata('makanan3');
            redirect('user/pesanan');
        } else if ($this->session->userdata('id4') == NULL) {
            $data = [
                'id4' => $id,
                'makanan4' => $jml_mkn
            ];
            $this->session->set_userdata($data);
            echo $this->session->userdata('makanan1');
            echo $this->session->userdata('makanan2');
            echo $this->session->userdata('makanan3');
            echo $this->session->userdata('makanan4');
            redirect('user/pesanan');
        } else if ($this->session->userdata('id5') == NULL) {
            $data = [
                'id5' => $id,
                'makanan5' => $jml_mkn
            ];
            $this->session->set_userdata($data);
            echo $this->session->userdata('makanan1');
            echo $this->session->userdata('makanan2');
            echo $this->session->userdata('makanan3');
            echo $this->session->userdata('makanan4');
            echo $this->session->userdata('makanan5');
            redirect('user/pesanan');
        }
    }

    public function bakul2()
    {
        $id_m = $this->input->post('id_minuman');
        $jml_mnm = $this->input->post('jml_mnm');
        //minuman-------------------------------------
        if ($this->session->userdata('id_m1') == NULL) {
            $data = [
                'id_m1' => $id_m,
                'minuman1' => $jml_mnm
            ];
            $this->session->set_userdata($data);
            redirect('user/pesanan');
        } else if ($this->session->userdata('id_m2') == NULL) {
            $data = [
                'id_m2' => $id_m,
                'minuman2' => $jml_mnm
            ];
            $this->session->set_userdata($data);
            redirect('user/pesanan');
        } else if ($this->session->userdata('id_m3') == NULL) {
            $data = [
                'id_m3' => $id_m,
                'minuman3' => $jml_mnm
            ];
            $this->session->set_userdata($data);
            redirect('user/pesanan');
        } else if ($this->session->userdata('id_m4') == NULL) {
            $data = [
                'id_m4' => $id_m,
                'minuman4' => $jml_mnm
            ];
            $this->session->set_userdata($data);
            redirect('user/pesanan');
        } else if ($this->session->userdata('id_m5') == NULL) {
            $data = [
                'id_m5' => $id_m,
                'minuman5' => $jml_mnm
            ];
            $this->session->set_userdata($data);
            redirect('user/pesanan');
        }
    }


    public function bakul3()
    {
        $id_p = $this->input->post('id_paket');
        $jml_p = $this->input->post('jml_pkt');
        if ($this->session->userdata('id_p') == NULL) {
            $data = [
                'id_p' => $id_p,
                'jml_pkt' => $jml_p
            ];
            $this->session->set_userdata($data);
            redirect('user/pesanan');
        }
    }

    public function hapus_barang_mn()
    {
        $min1 =  $this->session->userdata('id_m1');
        $min2 =  $this->session->userdata('id_m2');
        $min3 =  $this->session->userdata('id_m3');
        $min4 =  $this->session->userdata('id_m4');
        $min5 =  $this->session->userdata('id_m5');
        $minuman = $this->uri->segment(3);

        if ($min1 == $minuman) {
            $this->session->unset_userdata('id_m1');
            $this->session->unset_userdata('minuman1');
            redirect('user/pesanan');
        }
        if ($min2 == $minuman) {
            $this->session->unset_userdata('id_m2');
            $this->session->unset_userdata('minuman2');
            redirect('user/pesanan');
        }
        if ($min3 == $minuman) {
            $this->session->unset_userdata('id_m3');
            $this->session->unset_userdata('minuman3');
            redirect('user/pesanan');
        }
        if ($min4 == $minuman) {
            $this->session->unset_userdata('id_m4');
            $this->session->unset_userdata('minuman4');
            redirect('user/pesanan');
        }
        if ($min5 == $minuman) {
            $this->session->unset_userdata('id_m5');
            $this->session->unset_userdata('minuman5');
            redirect('user/pesanan');
        }
    }

    public function hapus_barang_m()
    {
        $mak1 =  $this->session->userdata('id1');
        $mak2 =  $this->session->userdata('id2');
        $mak3 =  $this->session->userdata('id3');
        $mak4 =  $this->session->userdata('id4');
        $mak5 =  $this->session->userdata('id5');
        $makanan = $this->uri->segment(3);
        echo $makanan;

        if ($mak1 == $makanan) {
            $this->session->unset_userdata('id1');
            $this->session->unset_userdata('makanan1');
            redirect('user/pesanan');
        }
        if ($mak2 == $makanan) {
            $this->session->unset_userdata('id2');
            $this->session->unset_userdata('makanan2');
            redirect('user/pesanan');
        }
        if ($mak3 == $makanan) {
            $this->session->unset_userdata('id3');
            $this->session->unset_userdata('makanan3');
            redirect('user/pesanan');
        }
        if ($mak4 == $makanan) {
            $this->session->unset_userdata('id4');
            $this->session->unset_userdata('makanan4');
            redirect('user/pesanan');
        }
        if ($mak5 == $makanan) {
            $this->session->unset_userdata('id5');
            $this->session->unset_userdata('makanan5');
            redirect('user/pesanan');
        }
    }

    public function hapus_barang_p()
    {
        $pak1 =  $this->session->userdata('id_p');
        if ($pak1) {
            $this->session->unset_userdata('id_p');
            $this->session->unset_userdata('jml_pkt');
            redirect('user/pesanan');
        }
    }



    public function detail_pesan()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Daftar Menu';
        if ($this->session->userdata('email') == null) {

            $this->load->view('pembeli/detail_pesanan', $data);
        }
    }

    public function batal()
    {
        $this->session->sess_destroy();
        redirect('');
    }

    public function batal_()
    {
        $this->session->sess_destroy();
        redirect('user/pesanan');
    }

    public function pembayaran()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Kode Pembayaran';
        if ($this->session->userdata('email') == null) {
            $this->load->view('pembeli/kode_pembayaran', $data);
        }
    }

    public function pesanmakanan()
    {
        if ($this->input->post('id_meja') == "") {
            redirect('user/detail_pesan');
        } else {
              ini_set('display_errors','off');
            $makanan1 = $this->session->userdata('id1');
            $makanan2 = $this->session->userdata('id2');
            $makanan3 = $this->session->userdata('id3');
            $makanan4 = $this->session->userdata('id4');
            $makanan5 = $this->session->userdata('id5');
            $minuman1 = $this->session->userdata('id_m1');
            $minuman2 = $this->session->userdata('id_m2');
            $minuman3 = $this->session->userdata('id_m3');
            $minuman4 = $this->session->userdata('id_m4');
            $minuman5 = $this->session->userdata('id_m5');
            $s_mkn1 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->session->userdata('id1')])->row_array();
            $s_mkn2 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->session->userdata('id2')])->row_array();
            $s_mkn3 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->session->userdata('id3')])->row_array();
            $s_mkn4 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->session->userdata('id4')])->row_array();
            $s_mkn5 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->session->userdata('id5')])->row_array();
            $s_mnm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->session->userdata('id_m1')])->row_array();
            $s_mnm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->session->userdata('id_m2')])->row_array();
            $s_mnm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->session->userdata('id_m3')])->row_array();
            $s_mnm4 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->session->userdata('id_m4')])->row_array();
            $s_mnm5 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->session->userdata('id_m5')])->row_array();
            $jmakanan1 = $this->session->userdata('makanan1');
            $jmakanan2 = $this->session->userdata('makanan2');
            $jmakanan3 = $this->session->userdata('makanan3');
            $jmakanan4 = $this->session->userdata('makanan4');
            $jmakanan5 = $this->session->userdata('makanan5');
            $jminuman1 = $this->session->userdata('minuman1');
            $jminuman2 = $this->session->userdata('minuman2');
            $jminuman3 = $this->session->userdata('minuman3');
            $jminuman4 = $this->session->userdata('minuman4');
            $jminuman5 = $this->session->userdata('minuman5');
            $smkn1 = $s_mkn1['stok'] - intval($jmakanan1) . "<br>";
            $smkn2 = $s_mkn2['stok'] - intval($jmakanan2) . "<br>";
            $smkn3 = $s_mkn3['stok'] - intval($jmakanan3) . "<br>";
            $smkn4 = $s_mkn4['stok'] - intval($jmakanan4) . "<br>";
            $smkn5 = $s_mkn5['stok'] - intval($jmakanan5) . "<br>";
            $smnm1 = $s_mnm1['stok'] - intval($jminuman1) . "<br>";
            $smnm2 = $s_mnm2['stok'] - intval($jminuman2) . "<br>";
            $smnm3 = $s_mnm3['stok'] - intval($jminuman3) . "<br>";
            $smnm4 = $s_mnm4['stok'] - intval($jminuman4) . "<br>";
            $smnm5 = $s_mnm5['stok'] - intval($jminuman5) . "<br>";
            $this->db->query("UPDATE tb_makanan SET stok = '$smkn1' where id_makanan = '$makanan1'");
            $this->db->query("UPDATE tb_makanan SET stok = '$smkn2' where id_makanan = '$makanan2'");
            $this->db->query("UPDATE tb_makanan SET stok = '$smkn3' where id_makanan = '$makanan3'");
            $this->db->query("UPDATE tb_makanan SET stok = '$smkn4' where id_makanan = '$makanan4'");
            $this->db->query("UPDATE tb_makanan SET stok = '$smkn5' where id_makanan = '$makanan5'");
            $this->db->query("UPDATE tb_minuman SET stok = '$smnm1' where id_minuman = '$minuman1'");
            $this->db->query("UPDATE tb_minuman SET stok = '$smnm2' where id_minuman = '$minuman2'");
            $this->db->query("UPDATE tb_minuman SET stok = '$smnm3' where id_minuman = '$minuman3'");
            $this->db->query("UPDATE tb_minuman SET stok = '$smnm4' where id_minuman = '$minuman4'");
            $this->db->query("UPDATE tb_minuman SET stok = '$smnm5' where id_minuman = '$minuman5'");
            $this->insert_model->insert_pesanan_u();
            $this->update_model->update_meja();
            redirect('user/pembayaran');
        }
    }
}
