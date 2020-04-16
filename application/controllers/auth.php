<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('insert_model');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_pengguna', ['email' => $email])->row_array();
        //cek email ada atau tidak
        if ($user) {
            //cek aktif atau tidak email tersebut
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'id_akses' => $user['id_akses']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum didaftarkan</div>');
            redirect('auth');
        }
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['valid_email' => 'Gunakan alamat email yang benar !!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['min_length' => 'Password too Short']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Resto';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('username', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_pengguna.email]', ['is_unique' => 'This Email has Already Registed !']);
        $this->form_validation->set_rules('akses', 'Akses', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['min_length' => 'Password too Short']);
        $this->form_validation->set_rules('tanggal_lahir', 'Date Birth', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Resto';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/regist');
            $this->load->view('auth/auth_footer');
        } else {
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    $elor =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $elor . ' File harus berformat JPG/PNG/GIF</div>');
                    redirect('auth/registrasi');
                }
            }
            //echo $new_image . "wkwkwkwkwkwk";
            $this->insert_model->insert_pengguna($new_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda sudah didaftarkan silahkan login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda telah logout</div>');
        redirect('auth');
    }
}
