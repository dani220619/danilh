<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_login extends CI_Model
{
    function Aplikasi()
    {
        return $this->db->get('aplikasi');
    }

    function Auth($email, $password)
    {

        //menggunakan active record . untuk menghindari sql injection
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $this->db->where("is_active", 'Y');
        return $this->db->get("tbl_user");
    }

    function check_db($email)
    {
        return $this->db->get_where('tbl_user', array('email' => $email));
    }
}
