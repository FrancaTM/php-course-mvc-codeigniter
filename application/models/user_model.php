<?php

class User_model extends CI_Model
{
    public function get_users($user_id, $username)
    {
        // $this->db->where('id', $user_id);
        $this->db->where([
            'id' => $user_id,
            'username' => $username
        ]);

        $query = $this->db->get('users');
        return $query->result();

        // $query = $this->db->query("SELECT * FROM users");
        // return $query->num_rows(); // this will give the rows count
        // return $query->num_fields(); // this will give the columns number

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

    public function create_users($data)
    {
        $this->db->insert('users', $data);
    }

    public function update_users($data, $id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update('users', $data);
    }

    public function delete_users($id)
    {
        $this->db->where(['id' => $id]);
        $this->db->delete('users');
    }
}
