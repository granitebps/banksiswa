<?php

class Siswa_model extends CI_Model {
    var $table = 'siswa';
    var $id = 'id';

    public function ambil_data()
    {
            $query = $this->db->get($this->table);
            return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id){
        // $querry = $this->db->get_where($this->table, array('id' => $id));
        // return $querry->row();
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function update($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

?>