<?php 
class Transactions extends CI_Model{
    protected $nama_table = 'transactions';

    function get_all($key = NULL, $value = NULL) 
    {
        if($key != NULL)
        {
            return $this->db->get_where($this->nama_table, array($key => $value))->row();
        }
        return $this->db->get($this->nama_table)->result();
    }

    function add($data=0) {
        $this->db->insert($this->nama_table, $data);
    }

    function edit($id=0, $data=0) {
        $this->db->where('id', $id);
        return $this->db->update($this->nama_table, $data);
    }

    function delete($id=0) {
        $this->db->where('id', $id);
        return $this->db->delete($this->nama_table);
    }
}
