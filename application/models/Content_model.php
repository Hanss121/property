<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model {

    public function get_content()
    {
        $this->db->select('*');
        $this->db->from('content');
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
    public function get_content_rumah()
    {
        $this->db->select('*');
        $this->db->from('content');
        $this->db->where('Kategori', 'RM1-RUMAH');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function get_content_layout()
    {
        $this->db->select('*');
        $this->db->from('content');
        $this->db->where('Kategori', 'RM2-LAYOUT');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function get_content_rumah_dalam()
    {
        $this->db->select('*');
        $this->db->from('content');
        $this->db->where('Kategori', 'RM3-DALAM');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function get_content_siteplane()
    {
        $this->db->select('*');
        $this->db->from('content');
        $this->db->where('Kategori', 'RM4-SITEPLANE');
        
        $query = $this->db->get();
        return $query->result();
    }

    function save ($Nama,$Kategori,$Gambar) {
        $data = array (
            'Nama'=>$Nama,
            'Kategori'=>$Kategori,
            'Gambar'=>$Gambar
        );
        $this->db->insert('content',$data);
    }

    function get_content_id($no) {
        $query = $this->db->get_where('content',array('no' => $no));
        return $query;
    }
    public function update($no,$Nama, $Kategori,$Gambar) {
        $data = array(
            'Nama'=>$Nama,
            'Kategori'=>$Kategori,
            'Gambar'=>$Gambar
        );
    
        if (!empty($Gambar)) {
            $data['Gambar'] = $Gambar;
        }
    
        $this->db->where('no', $no);
        $this->db->update('content', $data);
    }
    
    public function delete($no) {
        
        $this->db->where('no', $no);
        $this->db->delete('Property');
    }

}