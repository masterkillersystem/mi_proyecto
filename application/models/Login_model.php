<?php
class Login_model extends CI_model{

  public function __construct()
    {
        $this->load->database();
    }

	public function admin($email, $password){
		$query = $this->db->get_where('admin', array('email_admin' => $email, 'pass_admin' => md5($password)));

        return $query->row_array();
		}

}
