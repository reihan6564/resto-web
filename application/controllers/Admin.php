<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tampil_model');
        $this->load->model('insert_model');
        $this->load->model('update_model');
        $this->load->model('hapus_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
       // $this->load->library('excel');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Resto Web';
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            if ($this->session->userdata('id_akses') == 1) {
                $data['akses'] = 'Manager';
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/index', $data);
                $this->load->view('admin/footer', $data);
            } else if ($this->session->userdata('id_akses') == 2) {
                $data['akses'] = 'Kasir';
                $data['hitung_pb'] = $this->tampil_model->hitung_pb();
                $data['hitung_ps'] = $this->tampil_model->hitung_ps();
                $data['pembayaran_b'] = $this->tampil_model->tampil_pembayaran_b();
                $data['pembayaran'] = $this->tampil_model->tampil_pembayaran();
                $data['pesanan_s'] = $this->tampil_model->pesanan_selesai();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/pembayaran', $data);
                $this->load->view('admin/footer', $data);
            } else if ($this->session->userdata('id_akses') == 3) {
                $data['akses'] = 'Kepala Koki';
                $data['makanan'] = $this->tampil_model->tampil_makanan();
                $data['minuman'] = $this->tampil_model->tampil_minuman();
                $data['paket'] = $this->tampil_model->tampil_paket();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/stok', $data);
                $this->load->view('admin/footer', $data);
            } else if ($this->session->userdata('id_akses') == 4) {
                $data['akses'] = 'Pelayan';
                $data['join_meja'] = $this->tampil_model->join_meja();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/dm', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function kirim_masukan()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Pengaduan Aplikasi';
            $data['akses'] = 'Semua Akses';
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/kirim_masukan', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $this->update_model->update_status_m();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/kirim_masukan', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function edit_profile($edit)
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['edit'] = $this->tampil_model->edit_profile($edit);
            $data['title'] = 'Edit Profile';
            $data['akses'] = 'Semua Akses';
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/edit_profile', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function PDM()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Daftar Meja';
            $data['akses'] = 'Pelayan';
            $data['join_meja'] = $this->tampil_model->join_meja();
            $this->form_validation->set_rules('id_meja', 'ID Meja', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/dm', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $this->update_model->update_status_m();
                $data['join_meja'] = $this->tampil_model->join_meja();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/dm', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function PA()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Antar Pesanan';
            $data['akses'] = 'Pelayan';
            $data['pesanan_a'] = $this->tampil_model->pesanan_diantar();
            $data['pesanan_d'] = $this->tampil_model->pesanan_diterima();
            $data['hitung_pa'] = $this->tampil_model->hitung_pa();
            $data['hitung_pd'] = $this->tampil_model->hitung_pd();
            $data['join_meja'] = $this->tampil_model->join_meja();
            $this->form_validation->set_rules('status_b', 'status_b', 'required|trim');
            $this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
            $this->form_validation->set_rules('id_meja', 'id_meja', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pa', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $this->update_model->update_status();
                $this->update_model->update_kode();
                $data['pesanan_a'] = $this->tampil_model->pesanan_diantar();
                $data['pesanan_d'] = $this->tampil_model->pesanan_diterima();
                $data['hitung_pa'] = $this->tampil_model->hitung_pa();
                $data['hitung_pd'] = $this->tampil_model->hitung_pd();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pa', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function hari_ini()
    {
        $hari = date("D");

        switch ($hari) {
            case 'Sun':
                $hari_ini = "Minggu";
                break;

            case 'Mon':
                $hari_ini = "Senin";
                break;

            case 'Tue':
                $hari_ini = "Selasa";
                break;

            case 'Wed':
                $hari_ini = "Rabu";
                break;

            case 'Thu':
                $hari_ini = "Kamis";
                break;

            case 'Fri':
                $hari_ini = "Jumat";
                break;

            case 'Sat':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }

        return $hari_ini;
    }

    public function bulan_ini()
    {
        $bulan = Date('m');
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
            default:
                $bulan = Date('F');
                break;
        }
        return $bulan;
    }

    public function print_pembayaran()
    {
        $data['hari_ini'] = $this->hari_ini();
        $data['bulan_ini'] = $this->bulan_ini();
        $data['title'] = "Print Pembayaran";
        $this->load->view('admin/laporan/lp_pembayaran', $data);
    }

    public function laporan_mkn()
    {
        $data['hari_ini'] = $this->hari_ini();
        $data['bulan_ini'] = $this->bulan_ini();
        $this->load->view('admin/laporan/lp_mkn', $data);
    }

    public function laporan_mkn_e()
    {
        $data['hari_ini'] = $this->hari_ini();
        $data['bulan_ini'] = $this->bulan_ini();
        $this->load->view('admin/laporan/lp_mkn_e', $data);
    }

    public function laporan_mnm()
    {

        $data['hari'] = $this->hari_ini();
        $data['bulan'] = $this->bulan_ini();
        $this->load->view('admin/laporan/lp_mnm', $data);
    }

    public function laporan_mnm_e()
    {

        $data['hari_ini'] = $this->hari_ini();
        $data['bulan_ini'] = $this->bulan_ini();
        $this->load->view('admin/laporan/lp_mnm_e', $data);
    }

    public function laporan_pkt()
    {
        $data['hari'] = $this->hari_ini();
        $data['bulan'] = $this->bulan_ini();
        $this->load->view('admin/laporan/lp_pkt', $data);
    }

    public function laporan_pkt_e()
    {
        $data['hari'] = $this->hari_ini();
        $data['bulan'] = $this->bulan_ini();
        $this->load->view('admin/laporan/lp_pkt_e', $data);
    }

    public function laporan_p_penjualan()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $tanggal1 = $this->input->post('tanggal_1');
        $tanggal2 = $this->input->post('tanggal_2');
        $this->form_validation->set_rules('tanggal_1', 'tanggal 1', 'required|trim');
        $this->form_validation->set_rules('tanggal_2', 'tanggal 1', 'required|trim');
        if ($this->form_validation->run() == false) {
            redirect('admin/lp');
        } else {
            $pecah1 = explode("-", $tanggal1);
            $hasil1 = $pecah1[0] . "-" . $pecah1[1] . "-" . $pecah1[2];
            $pecah2 = explode("-", $tanggal2);
            $hasil2 = $pecah2[0] . "-" . $pecah2[1] . "-" . $pecah2[2];
            if ($this->input->post('print')) {
                $data['hasil1'] = $hasil1;
                $data['hasil2'] = $hasil2;
                $data['hari'] = $this->hari_ini();
                $data['bulan'] = $this->bulan_ini();
                $this->load->view('admin/laporan/lp_p_penjualan', $data);
            } else if ($this->input->post('excel')) {
                $data['hasil1'] = $hasil1;
                $data['hasil2'] = $hasil2;
                $data['hari'] = $this->hari_ini();
                $data['bulan'] = $this->bulan_ini();
                $this->load->view('admin/laporan/lp_p_penjualan_e', $data);
            }
        }
    }

    public function laporan_b_penjualan()
    {
        $bulan1 = $this->input->post('bulan');
        $tahun1 = $this->input->post('tahun');
        $hasil = $tahun1 . "-" . $bulan1;
        $this->form_validation->set_rules('bulan', 'bulan', 'required|trim');
        $this->form_validation->set_rules('tahun', 'tahun', 'required|trim');
        if ($this->form_validation->run() == false) {
            redirect('admin/lp');
        } else {
            if ($this->input->post('print')) {
                $data['hasil'] = $hasil;
                $data['hari'] = $this->hari_ini();
                $data['bulan'] = $this->bulan_ini();
                $this->load->view('admin/laporan/lp_b_penjualan', $data);
            } else if ($this->input->post('excel')) {
                $data['hasil'] = $hasil;
                $data['hari'] = $this->hari_ini();
                $data['bulan'] = $this->bulan_ini();
                $this->load->view('admin/laporan/lp_b_penjualan_e', $data);
            }
        }
    }

    public function ambilkode()
    {
        echo json_encode($this->tampil_model->tampil_id_mkn());
    }

    public function ambilkodemn()
    {
        echo json_encode($this->tampil_model->tampil_id_mnm());
    }

    public function ambilkodepk()
    {
        echo json_encode($this->tampil_model->tampil_id_pkt());
    }

    public function ambilkodestatus()
    {
        echo json_encode($this->tampil_model->tampil_waktu_status());
    }

    public function ambilkodestatusPA()
    {
        echo json_encode($this->tampil_model->tampil_waktu_status());
    }

    public function ambilkodestatusMJ()
    {
        echo json_encode($this->tampil_model->tampil_meja_status());
    }


    public function stok()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['akses'] = 'Kepala Koki';
            $data['title'] = 'Stok';
            $data['makanan'] = $this->tampil_model->tampil_makanan();
            $data['minuman'] = $this->tampil_model->tampil_minuman();
            $data['paket'] = $this->tampil_model->tampil_paket();
            $this->form_validation->set_rules('stok', 'stok', 'required|trim');
            $this->form_validation->set_rules('id', 'id', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/stok', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $this->update_model->update_stok();
                $data['makanan'] = $this->tampil_model->tampil_makanan();
                $data['minuman'] = $this->tampil_model->tampil_minuman();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/stok', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }
    public function PM()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Pesanan Masuk';
            $data['akses'] = 'Kepala Koki';
            $data['pesanan_m'] = $this->tampil_model->pesanan_masuk();
            $data['pesanan_a'] = $this->tampil_model->pesanan_diantar();
            $data['hitung_pm'] = $this->tampil_model->hitung_pm();
            $data['hitung_pa'] = $this->tampil_model->hitung_pa();
            $this->form_validation->set_rules('status_b', 'status_b', 'required|trim');
            $this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pm', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $this->update_model->update_status();
                $data['pesanan_m'] = $this->tampil_model->pesanan_masuk();
                $data['pesanan_a'] = $this->tampil_model->pesanan_diantar();
                $data['hitung_pm'] = $this->tampil_model->hitung_pm();
                $data['hitung_pa'] = $this->tampil_model->hitung_pa();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pm', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function pk()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Pesanan Masuk';
            $data['akses'] = 'Kasir';
            $data['pesanan_m'] = $this->tampil_model->pesanan_masuk();
            $data['hitung_pm'] = $this->tampil_model->hitung_pm();
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pk', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $data['pesanan_m'] = $this->tampil_model->pesanan_masuk();
                $data['hitung_pm'] = $this->tampil_model->hitung_pm();
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pk', $data);
                $this->load->view('admin/footer', $data);
            }
        }
    }

    public function pembayaran()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $this->session->unset_userdata(array('kode', 'id'));
            $data['title'] = 'Pembayaran';
            $data['akses'] = 'Kasir';
            $data['hitung_pb'] = $this->tampil_model->hitung_pb();
            $data['hitung_ps'] = $this->tampil_model->hitung_ps();
            $data['pembayaran_b'] = $this->tampil_model->tampil_pembayaran_b();
            $data['pembayaran'] = $this->tampil_model->tampil_pembayaran();
            $data['pesanan_s'] = $this->tampil_model->pesanan_selesai();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/pembayaran', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function lp()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Laporan';
            $data['akses'] = 'Kasir';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/lp', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function tampil_kode()
    {
        ini_set('display_errors','off');
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Pembayaran';
            $data['akses'] = 'Kasir';
            $data['hitung_pb'] = $this->tampil_model->hitung_pb();
            $data['hitung_ps'] = $this->tampil_model->hitung_ps();
            $data['pembayaran_b'] = $this->tampil_model->tampil_pembayaran_b();
            $data['pembayaran'] = $this->tampil_model->tampil_pembayaran();
            $data['pesanan_s'] = $this->tampil_model->pesanan_selesai();
            $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pembayaran', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $kode = $this->input->post('kode');
                $hasil = $this->db->get_where('tb_detail_pesan', ['kode' => $kode])->row_array();
                $hasilp = $this->db->get_where('tb_pembayaran', ['kode_pembayaran' => $kode])->row_array();
                if ($hasil) {
                    if ($hasilp) {
                        $this->session->unset_userdata('message');
                        $data['tampil_pembayaran'] = $this->tampil_model->tampil_kode($data);
                        $data['tampil'] = "<input type='button' class='btn btn-outline btn-primary right'  data-toggle='collapse' data-target='#hasil' aria-expanded='false' aria-controls='collapseExample' value='Tampilkan'>";
                        $this->load->view('admin/header', $data);
                        $this->load->view('admin/sidebar', $data);
                        $this->load->view('admin/navbar', $data);
                        $this->load->view('admin/pembayaran', $data);
                        $this->load->view('admin/footer', $data);
                    } else {
                        //$this->__buat_pembayaran($kode);
                        $tdp = $this->db->get_where('tb_detail_pesan', ['kode' => $kode])->row_array();
                        $h1 = $this->db->get_where('tb_makanan', ['id_makanan' => $tdp['makanan_1']])->row_array();
                        $h2 = $this->db->get_where('tb_makanan', ['id_makanan' => $tdp['makanan_2']])->row_array();
                        $h3 = $this->db->get_where('tb_makanan', ['id_makanan' => $tdp['makanan_3']])->row_array();
                        $h4 = $this->db->get_where('tb_makanan', ['id_makanan' => $tdp['makanan_4']])->row_array();
                        $h5 = $this->db->get_where('tb_makanan', ['id_makanan' => $tdp['makanan_5']])->row_array();
                        $hm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $tdp['minuman_1']])->row_array();
                        $hm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $tdp['minuman_2']])->row_array();
                        $hm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $tdp['minuman_3']])->row_array();
                        $hm4 = $this->db->get_where('tb_minuman', ['id_minuman' => $tdp['minuman_4']])->row_array();
                        $hm5 = $this->db->get_where('tb_minuman', ['id_minuman' => $tdp['minuman_5']])->row_array();
                        $p1 = $this->db->get_where('tb_paket', ['id_paket' => $tdp['paket']])->row_array();
                        $mkn1 = $h1['harga_makanan'] * $tdp['jml_mkn_1'];
                        $mkn2 = $h2['harga_makanan'] * $tdp['jml_mkn_2'];
                        $mkn3 =  $h3['harga_makanan'] * $tdp['jml_mkn_3'];
                        $mkn4 =  $h4['harga_makanan'] * $tdp['jml_mkn_4'];
                        $mkn5 =  $h5['harga_makanan'] * $tdp['jml_mkn_5'];
                        $mnm1 =  $hm1['harga_minuman'] * $tdp['jml_mnm_1'];
                        $mnm2 = $hm2['harga_minuman'] * $tdp['jml_mnm_2'];
                        $mnm3 =  $hm3['harga_minuman'] * $tdp['jml_mnm_3'];
                        $mnm4 =  $hm4['harga_minuman'] * $tdp['jml_mnm_4'];
                        $mnm5 =  $hm5['harga_minuman'] * $tdp['jml_mnm_5'];
                        $p1 =  $p1['total_hrg_paket'];
                        $total = $mkn1 + $mkn2 + $mkn3 + $mkn4 + $mkn5 + $mnm1 + $mnm2 + $mnm3 + $mnm4 + $mnm5 + $p1;
                        $this->insert_model->insert_pembayaran($tdp, $total);
                        $this->session->unset_userdata('message');
                        $data['pembayaran_b'] = $this->tampil_model->tampil_pembayaran_b();
                        $data['pembayaran'] = $this->tampil_model->tampil_pembayaran();
                        $data['pesanan_s'] = $this->tampil_model->pesanan_selesai();
                        $data['tampil_pembayaran'] = $this->tampil_model->tampil_kode($data);
                        $data['tampil'] = "<input type='button' class='btn btn-outline btn-primary right'  data-toggle='collapse' data-target='#hasil' aria-expanded='false' aria-controls='collapseExample' value='Tampilkan'>";
                        $this->load->view('admin/header', $data);
                        $this->load->view('admin/sidebar', $data);
                        $this->load->view('admin/navbar', $data);
                        $this->load->view('admin/pembayaran', $data);
                        $this->load->view('admin/footer', $data);
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="row"><div class="col-md-7"></div><div class="alert alert-danger col-md-4 text-center" role="alert">Kode yang anda kirimkan Tidak Benar</div></div>');
                    redirect('admin/pembayaran');
                }
            }
        }
    }

    public function tampil_meja()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Pembayaran';
            $data['akses'] = 'Kasir';
            $data['hitung_pb'] = $this->tampil_model->hitung_pb();
            $data['hitung_ps'] = $this->tampil_model->hitung_ps();
            $data['pembayaran_b'] = $this->tampil_model->tampil_pembayaran_b();
            $data['pembayaran'] = $this->tampil_model->tampil_pembayaran();
            $data['pesanan_s'] = $this->tampil_model->pesanan_selesai();
            $this->form_validation->set_rules('nomor_meja', 'Kode', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header', $data);
                $this->load->view('admin/sidebar', $data);
                $this->load->view('admin/navbar', $data);
                $this->load->view('admin/pembayaran', $data);
                $this->load->view('admin/footer', $data);
            } else {
                $kode = $this->input->post('nomor_meja');
                $hasil = $this->db->get_where('tb_pembayaran', ['id_meja' => $kode])->row_array();
                if ($hasil) {
                    $this->session->unset_userdata('message');
                    $data['tampil_pembayaran'] = $this->tampil_model->tampil_meja($data);
                    $data['tampil'] = "<input type='button' class='btn btn-outline btn-primary right'  data-toggle='collapse' data-target='#hasil' aria-expanded='false' aria-controls='collapseExample' value='Tampilkan'>";
                    $this->load->view('admin/header', $data);
                    $this->load->view('admin/sidebar', $data);
                    $this->load->view('admin/navbar', $data);
                    $this->load->view('admin/pembayaran', $data);
                    $this->load->view('admin/footer', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="row"><div class="col-md-7"></div><div class="alert alert-danger col-md-4 text-center" role="alert">Kode yang anda kirimkan Tidak Benar</div></div>');
                    $this->load->view('admin/header', $data);
                    $this->load->view('admin/sidebar', $data);
                    $this->load->view('admin/navbar', $data);
                    $this->load->view('admin/pembayaran', $data);
                    $this->load->view('admin/footer', $data);
                }
            }
        }
    }

    public function tampil_stok()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Tabel Stok';
            $data['akses'] = 'Kepala Koki';
            $data['tampil_mkn'] = $this->tampil_model->tampil_makanan();
            $data['tampil_mnm'] = $this->tampil_model->tampil_minuman();
            $data['tampil_pkt'] = $this->tampil_model->tampil_paket();
            $data['pesanan_m'] = $this->tampil_model->pesanan_masuk();
            $data['pesanan_a'] = $this->tampil_model->pesanan_diantar();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/ts', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function detail_p($id)
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Detail Paket';
            $data['akses'] = 'Kepala Koki';
            $data['detail_p'] = $this->tampil_model->tampil_id_paket($id);
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/detail_p', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function detail_PB($id)
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Detail Pembayaran';
            $data['akses'] = 'Pembayaran';
            $data['id'] = $id;
            $data['detail_PB'] = $this->tampil_model->tampil_id_pembayaran($id);
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/detail_PB', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function edit_p($id)
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Paket';
            $data['akses'] = 'Kepala Koki';
            $data['edit_p'] = $this->tampil_model->tampil_id_paket($id);
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/edit_p', $data);
            $this->load->view('admin/footer', $data);
        }
    }
    public function edit_PB($id)
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Paket';
            $data['akses'] = 'Kepala Koki';
            $data['edit_p'] = $this->tampil_model->tampil_id_paket($id);
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/edit_PB', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function tambah_p()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Detail Makanan';
            $data['akses'] = 'Kepala Koki';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/tambah_p', $data);
            $this->load->view('admin/footer', $data);
        }
    }

    public function tambahPB()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            $data['title'] = 'Detail Makanan';
            $data['akses'] = 'Kepala Koki';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('admin/tambahPB', $data);
            $this->load->view('admin/footer', $data);
        }
    }


    public function tambah_makanan()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'required|trim');
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required|trim');
        $this->form_validation->set_rules('harga_makanan', 'Harga Makanan', 'required|trim');
        $this->form_validation->set_rules('stok_makanan', 'Stok Makanan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/tampil_stok');
        } else {
            $upload_image = $_FILES['gambar']['name'];
            $old_image = $data['user']['gambar'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat JPG/PNG/GIF</div>');
                    redirect('admin/tampil_stok');
                }
            } else {
                $new_image = $old_image;
            }

            $this->insert_model->insert_makanan($new_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil ditambahkan </div>');
            redirect('admin/tampil_stok');
        }
    }

    public function tambah_minuman()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'required|trim');
        $this->form_validation->set_rules('jenis_minuman', 'Jenis Minuman', 'required|trim');
        $this->form_validation->set_rules('harga_minuman', 'Harga Minuman', 'required|trim');
        $this->form_validation->set_rules('stok_minuman', 'Stok Minuman', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/tampil_stok');
        } else {
            $upload_image = $_FILES['gambar']['name'];
            $old_image = $data['user']['gambar'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat JPG/PNG/GIF</div>');
                    redirect('auth/edit_profile');
                }
            } else {
                $new_image = $old_image;
            }
            $this->insert_model->insert_minuman($new_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil ditambahkan </div>');
            redirect('admin/tampil_stok');
        }
    }

    public function tambah_paket()
    {
        $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required|trim');
        $this->form_validation->set_rules('makanan_1', 'Makanan 1', 'required|trim');
        $this->form_validation->set_rules('makanan_2', 'Makanan 2', 'trim');
        $this->form_validation->set_rules('makanan_3', 'Makanan 3', 'trim');
        $this->form_validation->set_rules('makanan_4', 'Makanan 4', 'trim');
        $this->form_validation->set_rules('makanan_5', 'Makanan 5', 'trim');
        $this->form_validation->set_rules('jmakanan_1', 'Jumlah Makanan 1', 'required|trim');
        $this->form_validation->set_rules('jmakanan_2', 'Jumlah Makanan 2', 'trim');
        $this->form_validation->set_rules('jmakanan_3', 'Jumlah Makanan 3', 'trim');
        $this->form_validation->set_rules('jmakanan_4', 'Jumlah Makanan 4', 'trim');
        $this->form_validation->set_rules('jmakanan_5', 'Jumlah Makanan 5', 'trim');
        $this->form_validation->set_rules('minuman_1', 'Minuman 1', 'required|trim');
        $this->form_validation->set_rules('minuman_2', 'Minuman 2', 'trim');
        $this->form_validation->set_rules('minuman_3', 'Minuman 3', 'trim');
        $this->form_validation->set_rules('minuman_4', 'Minuman 4', 'trim');
        $this->form_validation->set_rules('minuman_5', 'Minuman 5', 'trim');
        $this->form_validation->set_rules('jminuman_1', 'Jumlah Minuman 1', 'required|trim');
        $this->form_validation->set_rules('jminuman_2', 'Jumlah Minuman 2', 'trim');
        $this->form_validation->set_rules('jminuman_3', 'Jumlah Minuman 3', 'trim');
        $this->form_validation->set_rules('jminuman_4', 'Jumlah Minuman 4', 'trim');
        $this->form_validation->set_rules('jminuman_5', 'Jumlah Minuman 5', 'trim');
        $this->form_validation->set_rules('harga_paket', 'Total Harga Paket', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/tampil_stok');
        } else {
            $this->insert_model->insert_paket();
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil ditambahkan </div>');
            redirect('admin/tampil_stok');
        }
    }

    public function tambah_masukan()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('isian', 'isian', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkaps</div>');
            redirect('admin/kirim_masukan');
        } else {
            $this->insert_model->insert_masukan();
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">usulan telah dikirimkan</div>');
            redirect('admin/tampil_stok');
        }
    }

    public function tambah_pesanan()
    {
        $this->form_validation->set_rules('id_meja', 'ID Meja', 'trim');
        $this->form_validation->set_rules('makanan_1', 'Makanan 1', 'required|trim');
        $this->form_validation->set_rules('makanan_2', 'Makanan 2', 'trim');
        $this->form_validation->set_rules('makanan_3', 'Makanan 3', 'trim');
        $this->form_validation->set_rules('makanan_4', 'Makanan 4', 'trim');
        $this->form_validation->set_rules('makanan_5', 'Makanan 5', 'trim');
        $this->form_validation->set_rules('jmakanan_1', 'Jumlah Makanan 1', 'required|trim');
        $this->form_validation->set_rules('jmakanan_2', 'Jumlah Makanan 2', 'trim');
        $this->form_validation->set_rules('jmakanan_3', 'Jumlah Makanan 3', 'trim');
        $this->form_validation->set_rules('jmakanan_4', 'Jumlah Makanan 4', 'trim');
        $this->form_validation->set_rules('jmakanan_5', 'Jumlah Makanan 5', 'trim');
        $this->form_validation->set_rules('minuman_1', 'Minuman 1', 'required|trim');
        $this->form_validation->set_rules('minuman_2', 'Minuman 2', 'trim');
        $this->form_validation->set_rules('minuman_3', 'Minuman 3', 'trim');
        $this->form_validation->set_rules('minuman_4', 'Minuman 4', 'trim');
        $this->form_validation->set_rules('minuman_5', 'Minuman 5', 'trim');
        $this->form_validation->set_rules('jminuman_1', 'Jumlah Minuman 1', 'required|trim');
        $this->form_validation->set_rules('jminuman_2', 'Jumlah Minuman 2', 'trim');
        $this->form_validation->set_rules('jminuman_3', 'Jumlah Minuman 3', 'trim');
        $this->form_validation->set_rules('jminuman_4', 'Jumlah Minuman 4', 'trim');
        $this->form_validation->set_rules('jminuman_5', 'Jumlah Minuman 5', 'trim');
        $this->form_validation->set_rules('waktu', 'Waktu Pesan', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Pesan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/PA');
        } else {
            $this->insert_model->insert_pesanan();
            $jmakanan1 = $this->input->post('jmakanan_1');
            $jmakanan2 = $this->input->post('jmakanan_2');
            $jmakanan3 = $this->input->post('jmakanan_3');
            $jmakanan4 = $this->input->post('jmakanan_4');
            $jmakanan5 = $this->input->post('jmakanan_5');
            $makanan1 = $this->input->post('makanan_1');
            $makanan2 = $this->input->post('makanan_2');
            $makanan3 = $this->input->post('makanan_3');
            $makanan4 = $this->input->post('makanan_4');
            $makanan5 = $this->input->post('makanan_5');
            $jminuman1 = $this->input->post('jminuman_1');
            $jminuman2 = $this->input->post('jminuman_2');
            $jminuman3 = $this->input->post('jminuman_3');
            $jminuman4 = $this->input->post('jminuman_4');
            $jminuman5 = $this->input->post('jminuman_5');
            $minuman1 = $this->input->post('minuman_1');
            $minuman2 = $this->input->post('minuman_2');
            $minuman3 = $this->input->post('minuman_3');
            $minuman4 = $this->input->post('minuman_4');
            $minuman5 = $this->input->post('minuman_5');
            $s_mkn1 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_1')])->row_array();
            $s_mkn2 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_2')])->row_array();
            $s_mkn3 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_3')])->row_array();
            $s_mkn4 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_4')])->row_array();
            $s_mkn5 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_5')])->row_array();
            $s_mnm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_1')])->row_array();
            $s_mnm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_2')])->row_array();
            $s_mnm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_3')])->row_array();
            $s_mnm4 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_4')])->row_array();
            $s_mnm5 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_5')])->row_array();
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
            $id = htmlspecialchars($this->input->post('id_makanan', true));
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
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil dikirimkan ke kepala koki </div>');
            redirect('admin/PA');
        }
    }

    public function tambah_pesananK()
    {
        $this->form_validation->set_rules('id_meja', 'ID Meja', 'trim');
        $this->form_validation->set_rules('makanan_1', 'Makanan 1', 'required|trim');
        $this->form_validation->set_rules('makanan_2', 'Makanan 2', 'trim');
        $this->form_validation->set_rules('makanan_3', 'Makanan 3', 'trim');
        $this->form_validation->set_rules('makanan_4', 'Makanan 4', 'trim');
        $this->form_validation->set_rules('makanan_5', 'Makanan 5', 'trim');
        $this->form_validation->set_rules('jmakanan_1', 'Jumlah Makanan 1', 'required|trim');
        $this->form_validation->set_rules('jmakanan_2', 'Jumlah Makanan 2', 'trim');
        $this->form_validation->set_rules('jmakanan_3', 'Jumlah Makanan 3', 'trim');
        $this->form_validation->set_rules('jmakanan_4', 'Jumlah Makanan 4', 'trim');
        $this->form_validation->set_rules('jmakanan_5', 'Jumlah Makanan 5', 'trim');
        $this->form_validation->set_rules('minuman_1', 'Minuman 1', 'required|trim');
        $this->form_validation->set_rules('minuman_2', 'Minuman 2', 'trim');
        $this->form_validation->set_rules('minuman_3', 'Minuman 3', 'trim');
        $this->form_validation->set_rules('minuman_4', 'Minuman 4', 'trim');
        $this->form_validation->set_rules('minuman_5', 'Minuman 5', 'trim');
        $this->form_validation->set_rules('jminuman_1', 'Jumlah Minuman 1', 'required|trim');
        $this->form_validation->set_rules('jminuman_2', 'Jumlah Minuman 2', 'trim');
        $this->form_validation->set_rules('jminuman_3', 'Jumlah Minuman 3', 'trim');
        $this->form_validation->set_rules('jminuman_4', 'Jumlah Minuman 4', 'trim');
        $this->form_validation->set_rules('jminuman_5', 'Jumlah Minuman 5', 'trim');
        $this->form_validation->set_rules('waktu', 'Waktu Pesan', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Pesan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/pk');
        } else {
            $this->insert_model->insert_pesanan();
            $jmakanan1 = $this->input->post('jmakanan_1');
            $jmakanan2 = $this->input->post('jmakanan_2');
            $jmakanan3 = $this->input->post('jmakanan_3');
            $jmakanan4 = $this->input->post('jmakanan_4');
            $jmakanan5 = $this->input->post('jmakanan_5');
            $makanan1 = $this->input->post('makanan_1');
            $makanan2 = $this->input->post('makanan_2');
            $makanan3 = $this->input->post('makanan_3');
            $makanan4 = $this->input->post('makanan_4');
            $makanan5 = $this->input->post('makanan_5');
            $jminuman1 = $this->input->post('jminuman_1');
            $jminuman2 = $this->input->post('jminuman_2');
            $jminuman3 = $this->input->post('jminuman_3');
            $jminuman4 = $this->input->post('jminuman_4');
            $jminuman5 = $this->input->post('jminuman_5');
            $minuman1 = $this->input->post('minuman_1');
            $minuman2 = $this->input->post('minuman_2');
            $minuman3 = $this->input->post('minuman_3');
            $minuman4 = $this->input->post('minuman_4');
            $minuman5 = $this->input->post('minuman_5');
            $s_mkn1 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_1')])->row_array();
            $s_mkn2 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_2')])->row_array();
            $s_mkn3 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_3')])->row_array();
            $s_mkn4 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_4')])->row_array();
            $s_mkn5 = $this->db->get_where('tb_makanan', ['id_makanan' => $this->input->post('makanan_5')])->row_array();
            $s_mnm1 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_1')])->row_array();
            $s_mnm2 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_2')])->row_array();
            $s_mnm3 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_3')])->row_array();
            $s_mnm4 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_4')])->row_array();
            $s_mnm5 = $this->db->get_where('tb_minuman', ['id_minuman' => $this->input->post('minuman_5')])->row_array();
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
            $id = htmlspecialchars($this->input->post('id_makanan', true));
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
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil dikirimkan ke kepala koki </div>');
            redirect('admin/pk');
        }
    }

    public function update_makanan()
    {
        $id = $this->input->post('id_makanan');
        $data['makanan'] = $this->db->query("select * from tb_makanan where id_makanan = '$id'")->row_array();
        $this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'required|trim');
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required|trim');
        $this->form_validation->set_rules('harga_makanan', 'Harga Makanan', 'required|trim');
        $this->form_validation->set_rules('stok_makanan', 'Stok Makanan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkaps</div>');
            redirect('admin/tampil_stok');
        } else {
            $upload_image = $_FILES['gambar']['name'];
            $old_image = $data['makanan']['gambar_makanan'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat JPG/PNG/GIF</div>');
                    redirect('auth/edit_profile');
                }
            } else {
                $new_image = $old_image;
            }
            $this->update_model->update_makanan($new_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil diupdate </div>');
            redirect('admin/tampil_stok');
        }
    }

    public function update_minuman()
    {
        $id = $this->input->post('id_minuman');
        $data['minuman'] = $this->db->query("select * from tb_minuman where id_minuman = '$id'")->row_array();
        $this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'required|trim');
        $this->form_validation->set_rules('jenis_minuman', 'Jenis Minuman', 'required|trim');
        $this->form_validation->set_rules('harga_minuman', 'Harga Minuman', 'required|trim');
        $this->form_validation->set_rules('stok_minuman', 'Stok Minuman', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkaps</div>');
            redirect('admin/tampil_stok');
        } else {
            $upload_image = $_FILES['gambar']['name'];
            $old_image = $data['minuman']['gambar_minuman'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat JPG/PNG/GIF</div>');
                    redirect('auth/edit_profile');
                }
            } else {
                $new_image = $old_image;
            }
            $this->update_model->update_minuman($new_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil diupdate </div>');
            redirect('admin/tampil_stok');
        }
    }

    public function update_stok_makanan()
    {
        $this->form_validation->set_rules('stok', 'stok', 'required|trim');
        $this->form_validation->set_rules('id', 'id', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkaps</div>');
            redirect('admin/stok');
        } else {
            $this->update_model->update_stok();
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil diupdate </div>');
            redirect('admin/stok');
        }
    }

    public function update_stok_minuman()
    {
        $this->form_validation->set_rules('stok', 'stok', 'required|trim');
        $this->form_validation->set_rules('id', 'id', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkaps</div>');
            redirect('admin/stok');
        } else {
            $this->update_model->update_stok2();
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil diupdate </div>');
            redirect('admin/stok');
        }
    }

    public function update_profile()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('id_pengguna', 'Id Pengguna', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('message', '<div class="alert alert-danfer col-md-6 text-center" role="alert">Ada data yang kurang tepat</div>');
                redirect('admin/edit_profile');
            } else {
                $upload_image = $_FILES['gambar']['name'];
                $old_image = $data['user']['gambar'];

                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/img/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('gambar')) {
                        if ($old_image != 'default.png') {
                            unlink(FCPATH . 'assets/img/' . $old_image);
                        }
                        $new_image = $this->upload->data('file_name');
                    } else {
                        $elor =  $this->upload->display_errors();
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat JPG/PNG/GIF</div>');
                        redirect('auth/edit_profile');
                    }
                } else {
                    $new_image = $old_image;
                }

                $this->update_model->update_profile($new_image);
                redirect('admin');
            }
        }
    }
    public function update_password()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('password_lama', 'password Lama', 'required|trim|min_length[3]', ['min_length' => 'Password too Short']);
        $this->form_validation->set_rules('password_baru', 'password Baru', 'required|trim|min_length[3]', ['min_length' => 'Password too Short']);

        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Data kurang tepat</div>');
                redirect('admin');
            } else {
                if (!password_verify($this->input->post('password_lama'), $data['user']['password'])) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Pasword Lama anda Salah</div>');
                    redirect('admin');
                } else {
                    $this->update_model->update_password();
                    redirect('admin');
                }
            }
        }
    }

    public function update_transaksi()
    {
        $this->form_validation->set_rules('bayar', 'Kembalian', 'required|trim');
        $this->form_validation->set_rules('kembalian', 'Kembalian', 'required|trim');

        if ($this->session->userdata('email') == null) {
            redirect('auth');
        } else {
            if (($this->input->post('bayar')) < ($this->input->post('total'))) {
                $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">Bayar nya kurang Kang</div>');
                redirect('admin/pembayaran');
            } else {
                $this->update_model->update_bayar();
                $this->update_model->update_status_s();
                $id = $this->input->post('id');
                $kode = $this->input->post('kode');
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('kode', $kode);
                $pb = $this->session->userdata('id');
                redirect('admin/detail_PB/' . $pb);
            }
        }
    }

    public function update_paket()
    {
        $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required|trim');
        $this->form_validation->set_rules('makanan_1', 'Makanan 1', 'required|trim');
        $this->form_validation->set_rules('makanan_2', 'Makanan 2', 'trim');
        $this->form_validation->set_rules('makanan_3', 'Makanan 3', 'trim');
        $this->form_validation->set_rules('makanan_4', 'Makanan 4', 'trim');
        $this->form_validation->set_rules('makanan_5', 'Makanan 5', 'trim');
        $this->form_validation->set_rules('jmakanan_1', 'Jumlah Makanan 1', 'required|trim');
        $this->form_validation->set_rules('jmakanan_2', 'Jumlah Makanan 2', 'trim');
        $this->form_validation->set_rules('jmakanan_3', 'Jumlah Makanan 3', 'trim');
        $this->form_validation->set_rules('jmakanan_4', 'Jumlah Makanan 4', 'trim');
        $this->form_validation->set_rules('jmakanan_5', 'Jumlah Makanan 5', 'trim');
        $this->form_validation->set_rules('minuman_1', 'Minuman 1', 'required|trim');
        $this->form_validation->set_rules('minuman_2', 'Minuman 2', 'trim');
        $this->form_validation->set_rules('minuman_3', 'Minuman 3', 'trim');
        $this->form_validation->set_rules('minuman_4', 'Minuman 4', 'trim');
        $this->form_validation->set_rules('minuman_5', 'Minuman 5', 'trim');
        $this->form_validation->set_rules('jminuman_1', 'Jumlah Minuman 1', 'required|trim');
        $this->form_validation->set_rules('jminuman_2', 'Jumlah Minuman 2', 'trim');
        $this->form_validation->set_rules('jminuman_3', 'Jumlah Minuman 3', 'trim');
        $this->form_validation->set_rules('jminuman_4', 'Jumlah Minuman 4', 'trim');
        $this->form_validation->set_rules('jminuman_5', 'Jumlah Minuman 5', 'trim');
        $this->form_validation->set_rules('harga_paket', 'Total Harga Paket', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-6 text-center" role="alert">Isi data dengan lengkap</div>');
            redirect('admin/tampil_stok');
        } else {
            $this->update_model->update_paket();
            echo "berhasil";
            $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6 text-center" role="alert">1 baris berhasil diupdate </div>');
            redirect('admin/tampil_stok');
        }
    }

    public function hapus_makanan($id)
    {
        $this->hapus_model->hapus_makanan($id);
        redirect('admin/tampil_stok');
    }

    public function hapus_minuman($id)
    {
        $this->hapus_model->hapus_minuman($id);
        redirect('admin/tampil_stok');
    }

    public function hapus_paket($id)
    {
        $this->hapus_model->hapus_paket($id);
        redirect('admin/tampil_stok');
    }
}
