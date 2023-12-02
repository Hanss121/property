<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function get_menu()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_property($search = '')
    {
        $this->db->select('*');
        $this->db->from('property');

        if ($search != '') {
            $this->db->like('Nama', $search);
            $this->db->or_like('keterangan', $search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }


    public function get_property_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->where('no', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function save ($Nama,$Judul,$Deskripsi,$Link,$Gambar) {
        $data = array (
            'Nama'=>$Nama,
            'Judul'=>$Judul,
            'Deskripsi'=>$Deskripsi,
            'Link'=>$Link,
            'Gambar'=>$Gambar
        );
        $this->db->insert('menu',$data);
    }

    function get_menu_id($no) {
        $query = $this->db->get_where('menu', array('no' => $no));
        return $query;
    }
    
    function update($no, $Nama, $Judul, $Deskripsi, $Link, $Gambar) {
        $data = array(
            'Nama' => $Nama,
            'Judul' => $Judul,
            'Deskripsi' => $Deskripsi,
            'Link' => $Link
        );
    
        if (!empty($Gambar)) {
            $data['Gambar'] = $Gambar;
        }
    
        $this->db->where('no', $no);
        $this->db->update('menu', $data);
    }
    
    
    public function delete($no) {
        
        $this->db->where('no', $no);
        $this->db->delete('Property');
    }

}