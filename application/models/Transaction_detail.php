<?php 
class Transaction_detail extends CI_Model{
    protected $nama_table = 'transaction_detail';

    function view(){
        $this->db->select('transactions.id, transactions.no_transaction, COUNT(transaction_detail.item) as item, SUM(transaction_detail.quantity) as quantity');
        $this->db->join('transactions', 'transaction_detail.transaction_id = transactions.id');
        $this->db->group_by('transactions.no_transaction');
        return $this->db->get($this->nama_table)->result_array();
    }

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
        $this->db->where('transaction_id', $id);
        return $this->db->delete($this->nama_table);
    }
}
