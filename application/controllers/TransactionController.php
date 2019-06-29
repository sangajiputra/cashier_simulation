<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransactionController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('transactions');
		$this->load->model('transaction_detail');
	}

	public function index()
	{
		$data['view'] = $this->transaction_detail->view();
		$this->load->view('transaction/index', $data);
	}

	public function add()
	{
		$this->load->view('transaction/add');
	}

	public function action_add()
	{
		$transactions = array(
			'no_transaction'      => $this->input->post('transaction_no'),
			'transaction_date'    => $this->input->post('transaction_date')
		);
		$this->transactions->add($transactions);
		$transaction_id = $this->db->insert_id();
		$item_name = $_POST['item_name'];
		$quantity  = $_POST['quantity'];
		for ($i=0; $i <count($item_name) ; $i++) {
			$transaction_detail = array(
				'transaction_id'      => $transaction_id,
				'item'    						=> $item_name[$i],
				'quantity'						=> $quantity[$i]
			);
			$this->transaction_detail->add($transaction_detail);
		}
		redirect('transactioncontroller');
	}

	public function edit($id)
	{
		$data['transaction'] = $this->transactions->get_all('id', $id);
		$data['list_item']	 = $this->transaction_detail->get_all('transaction_id', $id);
		$this->load->view('transaction/edit', $data);
	}

	function delete($id){
		$this->transactions->delete($id);
		$this->transaction_detail->delete($id);
		redirect('transactioncontroller');
	}
}
