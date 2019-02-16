<?php

class Users extends CI_Controller
{
    public function show($user_id)
    {
        // loads model manually
        // $this->load->model('user_model');

        $data['results'] = $this->user_model->get_users($user_id, 'rico');

        $this->load->view('user_view', $data);
    }

    public function insert()
    {
        $username = "peter";
        $password = "secret";

        $this->user_model->create_users([
            'username' => $username,
            'password' => $password,
        ]);
    }

    public function update()
    {
        $id = 3;
        $username = "will i am";
        $password = "not so secret";

        $this->user_model->update_users([
            'username' => $username,
            'password' => $password,
        ], $id);
    }

    public function delete()
    {
        $id = 3;
        $this->user_model->delete_users($id);
    }

    public function login()
    {
        // echo $_POST['username']; // regular php
        // echo $this->input->post('username'); // ci

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
    }
}
