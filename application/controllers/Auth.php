<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('Email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('Password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('nav/navbaruser');
            $this->load->view('login_view');
            $this->load->view('nav/footer');

        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Password');
        $user = $this->db->get_where('user', ['Email' => $Email])->row_array();

        // jika usernya ada
        if ($user) {
            // cek password
            if ($user['Password'] == $Password) {
                // jika benar
                $data = [
                    'Email' => $user['Email'],
                    'Password' => $user['Password'],
                    'IsActive' => $user['IsActive'],
                ];
                $this->session->set_userdata($data);
                if ($user['IsActive'] == 1) {
                    // jika admin
                    redirect('Property');
                } else {
                // jika user
                redirect('user');
                }

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
                </div>');
                redirect('auth');
            }

            // jika usernya tidak ada
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!
            </div>');
            redirect('auth');
        }
    }

    public function registration()
        {
            $this->load->view('nav/navbaruser');
            $this->load->view('registration');
            $this->load->view('nav/footer');
        }

    public function save()
        
        {            
            $Nama = $this->input->post('Nama');
            $Email = $this->input->post('Email');
            $Password = $this->input->post('Password');
            $IsActive = $this->input->post('IsActive');
            
            $this->User_model->save($Nama,$Email,$Password,$IsActive);
            redirect('Auth');
        
        }

    public function logout()
        {
            $this->session->unset_userdata('Email');
            $this->session->unset_userdata('Password');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                You have been logged out!
                </div>');
            redirect('auth');
        }

    }