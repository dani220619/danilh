<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mod_login'));
        $this->load->model(array('Mod_user'));
    }

    public function index()
    {
        $data['title'] = "User Data";
        $this->load->view('register', $data);
    }
    public function input_data()
    {
        $id_user = rand(00, 99);
        $save  = array(
            'id_user' => $id_user,
            'email' => $this->input->post('email'),
            'password'  => get_hash($this->input->post('password')),
            'id_level'  => '2',
            'is_active' => 'Y',
        );
        $save1 = array(
            'user_id' => $id_user,
        );
        $save2 = array(
            'id_user' => $id_user,
        );
        $save3 = array(
            'id_user' => $id_user,
        );
        $save4 = array(
            'id_user' => $id_user,
        );
        $this->db->insert('biodata', $save1);
        $this->db->insert('pendidikan_terahir', $save2);
        $this->db->insert('riwayat_pelatihan', $save3);
        $this->db->insert('riwayat_pekerjaan', $save4);
        // dead($save);
        $this->Mod_user->insertUser("tbl_user", $save);
        redirect('login');
    }
}
