<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Content_model');
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['menu'] = $this->Menu_model->get_menu();
        $this->load->view('nav/navbaruser');
        $this->load->view('user/Property_view', $data);
        $this->load->view('nav/footer');

    }
    
   
    public function Rumah()
    {
        $data['content'] = $this->Content_model->get_content_rumah();

        $this->load->view('nav/navbaruser');
        $this->load->view('user/Property_view_rumah', $data);


    }
    public function Layout()
    {
        $data['content'] = $this->Content_model->get_content_layout();

        $this->load->view('nav/navbaruseruser');
        $this->load->view('user/Property_view_layout', $data);


    }
    public function siteplane()
    {
        $data['content'] = $this->Content_model->get_content_siteplane();

        $this->load->view('nav/navbaruser');
        $this->load->view('user/Property_view_siteplane', $data);


    }
    public function Rumah_dalam()
    {
        $data['content'] = $this->Content_model->get_content_rumah_dalam();

        $this->load->view('nav/navbaruser');
        $this->load->view('user/Property_view_rumah_dalam', $data);


    }
    
    function add_new_rumah(){
        $this->load->view('nav/navbaruser');
        $this->load->view('add_property_rumah_view');


    }
    function add_new_layout(){
        $this->load->view('nav/navbaruser');
        $this->load->view('add_property_layout_view');


    }
    function add_new_rumah_dalam(){
        $this->load->view('nav/navbaruser');
        $this->load->view('add_property_rumah_dalam_view');


    }
    function add_new_siteplane(){
        $this->load->view('nav/navbaruser');
        $this->load->view('add_property_siteplane_view');


    }

    function save() {
        $Nama = $this->input->post('Nama');
        $Kategori = $this->input->post('Kategori');

        $Gambar = $_FILES['Gambar'];
        
        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('Gambar')) {
                echo "upload gagal"; die();
            }else{
                $Gambar = $this->upload->data('file_name');
            }
        }
        $this->Content_model->save($Nama,$Kategori,$Gambar);
        redirect('Property/Rumah');
    }
    function save_layout() {
        $Nama = $this->input->post('Nama');
        $Kategori = $this->input->post('Kategori');

        $Gambar = $_FILES['Gambar'];
        
        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('Gambar')) {
                echo "upload gagal"; die();
            }else{
                $Gambar = $this->upload->data('file_name');
            }
        }
        $this->Content_model->save($Nama,$Kategori,$Gambar);
        redirect('Property/Layout');
    }
    function save_siteplane() {
        $Nama = $this->input->post('Nama');
        $Kategori = $this->input->post('Kategori');

        $Gambar = $_FILES['Gambar'];
        
        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('Gambar')) {
                echo "upload gagal"; die();
            }else{
                $Gambar = $this->upload->data('file_name');
            }
        }
        $this->Content_model->save($Nama,$Kategori,$Gambar);
        redirect('Property/siteplane');
    }
    function save_rumah_dalam() {
        $Nama = $this->input->post('Nama');
        $Kategori = $this->input->post('Kategori');

        $Gambar = $_FILES['Gambar'];
        
        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('Gambar')) {
                echo "upload gagal"; die();
            }else{
                $Gambar = $this->upload->data('file_name');
            }
        }
        $this->Content_model->save($Nama,$Kategori,$Gambar);
        redirect('Property/Rumah_dalam');
    }
    function add_new_menu(){
        $this->load->view('nav/navbaruser');
        $this->load->view('add_property_menu_view');
        $this->load->view('nav/footer');


    }

    function save_menu() {
        $Nama = $this->input->post('Nama');
        $Judul = $this->input->post('Judul');
        $Deskripsi = $this->input->post('Deskripsi');
        $Link = $this->input->post('Link');

        $Gambar = $_FILES['Gambar'];
        
        if ($Gambar=''){}else{
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('Gambar')) {
                echo "upload gagal"; die();
            }else{
                $Gambar = $this->upload->data('file_name');
            }
        }
        $this->Menu_model->save($Nama,$Judul,$Deskripsi,$link,$Gambar);
        redirect('Property');
    }

    function get_edit_menu() {
        $no = $this->uri->segment(3);
        $result = $this->Menu_model->get_menu_id($no);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'no' => $i['no'],
                'Nama' => $i['Nama'],
                'Judul' => $i['Judul'],
                'Deskripsi' => $i['Deskripsi'],
                'Link' => $i['Link'],
                'Gambar' => $i['Gambar']
            );
            $this->load->view('nav/navbaruser');
            $this->load->view('edit_menu_view', $data);
            $this->load->view('nav/footer');

        } else {
            echo "Data tidak ditemukan";
        }
    }
    
    public function update_menu() {
        $no = $this->input->post('no');
        $Nama = $this->input->post('Nama');
        $Judul = $this->input->post('Judul');
        $Deskripsi = $this->input->post('Deskripsi');
        $Link = $this->input->post('Link');
    
        // Periksa apakah ada file yang diunggah
        if (!empty($_FILES['Gambar']['name'])) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
            $this->load->library('upload', $config);
    
            // Coba unggah file
            if (!$this->upload->do_upload('Gambar')) {
                // Tangani kesalahan unggah
                $error = $this->upload->display_errors();
                echo "Upload gagal: " . $error;
                die();
            } else {
                // File berhasil diunggah, simpan nama file
                $data = $this->upload->data();
                $Gambar = $data['file_name'];
            }
        } else {
            // Jika tidak ada file yang diunggah, gunakan nama file yang lama
            $Gambar = $this->input->post('oldGambar');
        }
    
        // Panggil model untuk melakukan pembaruan
        $this->Menu_model->update($no, $Nama, $Judul, $Deskripsi, $Link, $Gambar);
        $this->session->set_flashdata('ubah', 'Menu berhasil diperbarui...!!!!.');
        redirect('Property');
    }
    function get_edit_content() {
        $no = $this->uri->segment(3);
        $result = $this->Content_model->get_content_id($no);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'no' => $i['no'],
                'Nama' => $i['Nama'],
                'Kategori' => $i['Kategori'],
                'Gambar' => $i['Gambar']
            );
            $this->load->view('nav/navbaruser');
            $this->load->view('edit_content_view', $data);
            $this->load->view('nav/footer');

        } else {
            echo "Data tidak ditemukan";
        }
    }
    
    public function update_content() {
        $no = $this->input->post('no');
        $Nama = $this->input->post('Nama');
        $Kategori = $this->input->post('Kategori');
    
        // Periksa apakah ada file yang diunggah
        if (!empty($_FILES['Gambar']['name'])) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
            $this->load->library('upload', $config);
    
            // Coba unggah file
            if (!$this->upload->do_upload('Gambar')) {
                // Tangani kesalahan unggah
                $error = $this->upload->display_errors();
                echo "Upload gagal: " . $error;
                die();
            } else {
                // File berhasil diunggah, simpan nama file
                $data = $this->upload->data();
                $Gambar = $data['file_name'];
            }
        } else {
            // Jika tidak ada file yang diunggah, gunakan nama file yang lama
            $Gambar = $this->input->post('oldGambar');
        }
    
        // Panggil model untuk melakukan pembaruan
        $this->Content_model->update($no, $Nama, $Kategori, $Gambar);
        $this->session->set_flashdata('ubah', 'Menu berhasil diperbarui...!!!!.');
        // Lakukan redirect berdasarkan kondisi $Kategori
        if ($Kategori === 'RM1-RUMAH') {
            redirect('property/Rumah');
        } elseif ($Kategori === 'RM2-LAYOUT') {
            redirect('property/Layout');
        } elseif ($Kategori === 'RM3-DALAM') {
            redirect('property/Rumah_dalam');
        } elseif ($Kategori === 'RM4-SITEPLANE') {
            redirect('property/Siteplane');
        } else {
            // Redirect default jika tidak ada kondisi yang cocok
            redirect('Property');
        }
    }
    
    public function profile(){
        $this->load->view('nav/navbaruser');
        $this->load->view('profile');
        $this->load->view('nav/footer');

    }
    
    public function delete($no) {
        
        $this->Artikel_model->delete($no);
        redirect('artikel');
        }
        
    
}