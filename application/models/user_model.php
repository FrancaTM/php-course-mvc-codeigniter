<?php

class User_model extends CI_Model
{
    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();

        // loads database automatically
        // $config['hostname'] = 'localhost';
        // $config['username'] = "root";
        // $config['password'] = "";
        // $config['database'] = "errand_db_course";

        // $config_2['hostname'] = 'localhost';
        // $config_2['username'] = "root";
        // $config_2['password'] = "";
        // $config_2['database'] = "errand_db_course_2";

        // $connection = $this->load->database($config);
        // $connection_2 = $this->load->database($config_2);
    }
}
