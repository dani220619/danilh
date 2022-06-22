<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Create By ARYO
 */
class Mod_admin extends CI_Model
{
    public function count_all()
    {
        $this->db->from('aplikasi');
        return $this->db->count_all_results();
    }
    public function admin()
    {
        $query = $this->db->query("
        select * 
        from tbl_user tu 
        left join tbl_userlevel tul
        on tu.id_level=tul.id_level
        where tu.id_level = '1'
        ");
        return $query;
    }
    public function biodata($id_user)
    {
        $query = $this->db->query("
        select tu.*, b.*, pt.*, rp.*, rk.*, tul.*
        from tbl_user tu
        left join tbl_userlevel tul
        on tu.id_level=tul.id_level
        left join biodata b
        on tu.id_user=b.user_id
        left join pendidikan_terahir pt
        on tu.id_user=pt.id_user
        left join riwayat_pelatihan rp
        on tu.id_user=rp.id_user
        left join riwayat_pekerjaan rk
        on tu.id_user=rk.id_user
        where tu.id_user = " . $id_user . " 
        ");
        return $query;
    }
    function updatebiodata($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('biodata', $data);
    }
    function updateuser($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
    }
    function updatependidikan($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('pendidikan_terahir', $data);
    }
    function updateriwkursus($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('riwayat_pelatihan', $data);
    }
    function updateriwpek($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('riwayat_pekerjaan', $data);
    }
    public function pegawai()
    {
        $query = $this->db->query("
        select tu.*, b.* 
        from tbl_user tu
        left join biodata b
        on tu.id_user=b.user_id
        where id_level = '2'
        ");
        return $query;
    }
}
