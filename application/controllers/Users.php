<?php

class Users extends CI_Controller
{
    public function show()
    {
        // loads model manually
        // $this->load->model('user_model');

        $data['results'] = $this->user_model->get_users();

        $this->load->view('user_view', $data);
    }
}
