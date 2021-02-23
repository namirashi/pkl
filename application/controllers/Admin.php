<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
<<<<<<< HEAD
=======
        //Gunakan array jangan menggunakan "[" sebagai array karena itu versi lama dalam php

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
>>>>>>> a3f08f5f5db96b55245745d0c9b7d343068c4b2e

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
