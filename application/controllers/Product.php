<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
    }

	public function index() {
		$data['products'] = $this->product_model->getAll();
        $content = $this->load->view('partials/all_products', $data, true);
        return $this->load->view('index', ['content' => $content]);
    }

    public function details() {
        $data['product'] = $this->product_model->getByUrlKey($this->uri->segment(3));
        $content = $this->load->view('partials/product_details', $data, true);
        return $this->load->view('index', ['content' => $content]);
    }

    public function search() {
        $text = $this->input->get("text");
        $data['products'] = $this->product_model->search($text);
        $content = $this->load->view('partials/all_products', $data, true);
        return $this->load->view('index', ['content' => $content]);
    }

    

}
