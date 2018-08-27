<?php

class Order_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function newOrder($item, $urlKey, $size, $total, $quantity, $shipping, 
                                        $name, $company, $address, $state, $phone, $email) {

		$data = array(
	        'item'     => $item,
	        'size'     => $size,
	        'total'    => $total,
	        'quantity' => $quantity,
	        'shipping' => $shipping,
	        'name'     => $name,
	        'company'  => $company,
	        'address'  => $address,
	        'state'    => $state,
	        'phone'    => $phone,
	        'email'    => $email 
		);

		$this->db->insert('orders', $data);

    }


    public function getAll($offset = 0) {
        $this->db->from('orders');
        $this->db->limit(20, $offset);
        return $this->db->get()->result();
    }

    public function countAll() {
        $this->db->from('orders');
        return $this->db->count_all_results();
    }
    
    public function getById($id) {
        return $this->db->get_where('orders', ['id' => $id])->row();
    }

    public function updateById($item, $size, 
                $total, $quantity, $shipping, $name, $company, $address,
                $state, $phone, $email, $status, $id) {
        
        $data = array(
            'item' => $item,
            'size' => $size,
            'total' => $total,
            'quantity' => $quantity,
            'shipping' => $shipping,
            'name' => $name,
            'company' => $company,
            'address' => $address,
            'state' => $state,
            'phone' => $phone,
            'status' => $status
        );

        $this->db->where('id', $id);
        $this->db->update('orders', $data);

    }



    public function search($text)
    {
        $this->db->from('orders');
        $this->db->like('item', trim($text));
        return $this->db->get()->result();

    }


}