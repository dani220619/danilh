<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_admin');
        $this->load->model('Mod_user');
        $this->load->library('fungsi');
        $this->load->library('user_agent');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function user_data()
    {
        $data['title'] = "Admin Data";
        $data['user_level'] = $this->Mod_user->userlevel();
        $data['user'] = $this->Mod_admin->admin()->result();
        // dead($data);
        $this->template->load('layoutbackend', 'admin/user_data', $data);
    }

    public function update_admin()
    {
        // var_dump($this->input->post('username'));
        $id_user = $this->input->post('id_user');
        $save  = array(
            'id_user' => $id_user,
            'email' => $this->input->post('email'),
            'full_name' => $this->input->post('full_name'),
            'id_level' => $this->input->post('level'),
        );
        // dead($save);
        $this->db->where(array('id_user' => $id_user));
        $this->db->update("tbl_user", $save);
        // dead($save1);
        redirect('admin/user_data');
        // echo json_encode(array("status" => TRUE));
    }

    public function del_admin()
    {
        $id = $this->input->get('id_user');
        $g = $this->Mod_user->getImage($id)->row_array();
        if ($g != null) {
            //hapus gambar yg ada diserver
            unlink('assets/foto/user/' . $g['image']);
        }
        $this->db->delete('tbl_user', array('id_user' => $id));
        $this->session->set_flashdata('message5', '<div class="alert alert-danger" role="alert">
        Hapus Kas User Berhasil!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">&times;</span> 
   </button>
      </div>');
        redirect('admin/user_data');
    }

    public function pegawai()
    {
        $data['title'] = "Pegawai Data";
        $data['user_level'] = $this->Mod_user->userlevel();
        $data['pegawai'] = $this->Mod_admin->pegawai()->result();
        // dead($data);
        $this->template->load('layoutbackend', 'admin/pegawai', $data);
    }


    public function delete_pegawai($id)
    {
        $this->db->delete('tbl_user', array('id_user' => $id));
        $this->db->delete('biodata', array('user_id' => $id));
        $this->db->delete('pendidikan_terahir', array('id_user' => $id));
        $this->db->delete('riwayat_pelatihan', array('id_user' => $id));
        $this->db->delete('riwayat_pekerjaan', array('id_user' => $id));
        redirect('admin/pegawai');
    }
    public function delete($id)
    {
        $this->Mod_user->delete($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        $this->session->set_flashdata('success', 'Data Simpanan Wajib Berhasil Dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


    public function backup_data()
    {
        $data["title"]         = "Backup Database Dengan CodeIgniter";
        $this->template->load('layoutbackend', 'admin/backup_data', $data);
    }




    public function biodata()
    {
        $data['title'] = "Biodata";
        $id = $this->db->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $id['id_user'];
        $data['biodata'] = $this->Mod_admin->biodata($id_user)->result();
        // dead($data['biodata']);
        $this->template->load('layoutbackend', 'admin/biodata', $data);
    }
    public function edit_biodata($id_user)
    {
        $data['title'] = "Lengkapi Biodata";
        $data['jen_kel'] = ['laki-laki', 'perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['biodata'] = $this->Mod_admin->biodata($id_user)->row_array();
        // dead($data['biodata']);
        $this->template->load('layoutbackend', 'admin/edit_biodata', $data);
    }
    public function update_biodata()
    {
        // var_dump($this->input->post('username'));
        $user_id = $this->input->post('user_id');
        $id_user = $this->input->post('user_id');
        $save  = array(
            'user_id' => $user_id,
            'pos_lamar' => $this->input->post('pos_lamar'),
            'no_ktp' => $this->input->post('no_ktp'),
            'tempat_tgl_lahir' => $this->input->post('tempat_tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'gol_darah' => $this->input->post('gol_darah'),
            'status' => $this->input->post('status'),
            'alamat_ktp' => $this->input->post('alamat_ktp'),
            'alamat_tinggal' => $this->input->post('alamat_tinggal'),
            'no_tlp' => $this->input->post('no_tlp'),
            'org_terdekat' => $this->input->post('org_terdekat'),
            'skill' => $this->input->post('skill'),
            'ber_ditempatkan' => $this->input->post('ber_ditempatkan'),
            'peng_harapan' => $this->input->post('peng_harapan'),

        );
        $save1 = array(
            'full_name' => $this->input->post('full_name'),
        );
        $save2 = array(
            'jen_pen_terahir' => $this->input->post('jen_pen_terahir'),
            'nama_instusi' => $this->input->post('nama_instusi'),
            'jurusan' => $this->input->post('jurusan'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'ipk' => $this->input->post('ipk'),
        );
        $save3 = array(
            'jen_pen_terahir1' => $this->input->post('jen_pen_terahir1'),
            'nama_instusi1' => $this->input->post('nama_instusi1'),
            'jurusan1' => $this->input->post('jurusan1'),
            'tahun_lulus1' => $this->input->post('tahun_lulus1'),
            'ipk1' => $this->input->post('ipk1'),
        );
        $save4 = array(
            'nama_kursus' => $this->input->post('nama_kursus'),
            'sertifikat' => $this->input->post('sertifikat'),
            'tahun' => $this->input->post('tahun'),
        );
        $save5 = array(
            'nama_kursus1' => $this->input->post('nama_kursus1'),
            'sertifikat1' => $this->input->post('sertifikat1'),
            'tahun1' => $this->input->post('tahun1'),
        );
        $save6 = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'posisi_terahir' => $this->input->post('posisi_terahir'),
            'pendapatan_terahir' => $this->input->post('pendapatan_terahir'),
            'tahun' => $this->input->post('tahun'),
        );
        $save7 = array(
            'nama_perusahaan1' => $this->input->post('nama_perusahaan1'),
            'posisi_terahir1' => $this->input->post('posisi_terahir1'),
            'pendapatan_terahir1' => $this->input->post('pendapatan_terahir1'),
            'tahun1' => $this->input->post('tahun1'),
        );
        $save8 = array(
            'nama_perusahaan2' => $this->input->post('nama_perusahaan2'),
            'posisi_terahir2' => $this->input->post('posisi_terahir2'),
            'pendapatan_terahir2' => $this->input->post('pendapatan_terahir2'),
            'tahun2' => $this->input->post('tahun2'),
        );

        // dead($save2);
        $this->Mod_admin->updatebiodata($user_id, $save);
        $this->Mod_admin->updatependidikan($id_user, $save2);
        $this->Mod_admin->updatependidikan($id_user, $save3);
        $this->Mod_admin->updateriwkursus($id_user, $save4);
        $this->Mod_admin->updateriwkursus($id_user, $save5);
        $this->Mod_admin->updateriwpek($id_user, $save6);
        $this->Mod_admin->updateriwpek($id_user, $save7);
        $this->Mod_admin->updateriwpek($id_user, $save8);
        $this->Mod_admin->updateuser($id_user, $save1);
        // dead($save);
        if ($this->session->userdata['id_level'] == 1) {
            redirect('admin/pegawai');
        } else {
            redirect('admin/biodata');
        }

        // echo json_encode(array("status" => TRUE));
    }
    public function data_lengkap($id_user)
    {
        $data['title'] = "Biodata";
        $data['jen_kel'] = ['laki-laki', 'perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['biodata'] = $this->Mod_admin->biodata($id_user)->row_array();
        // dead($data['biodata']);
        $this->template->load('layoutbackend', 'admin/data_lengkap', $data);
    }


    public function backup()
    {

        $this->load->dbutil();
        $data['setting_school'] = "DATA";
        $prefs = [
            'format' => 'zip',
            'filename' => $data['setting_school']['setting_value'] . '-' . date("Y-m-d H-i-s") . '.sql'
        ];
        $backup = $this->dbutil->backup($prefs);
        $file_name = $data['setting_school']['setting_value'] . '-' . date("Y-m-d-H-i-s") . '.zip';
        $this->zip->download($file_name);
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('email') == '') {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'email is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('full_name') == '') {
            $data['inputerror'][] = 'full_name';
            $data['error_string'][] = 'Full Name is required';
            $data['status'] = FALSE;
        }


        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}
