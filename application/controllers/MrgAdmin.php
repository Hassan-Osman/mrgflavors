<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MrgAdmin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('login')) || 
            $this->session->userdata('login') != "TRUE") {
            redirect('/Auth/login', 'refresh');
        }
        $this->load->model('product_model');
        $this->load->model('order_model');
    }

    public function index() {
        $data['products'] = $this->product_model->getAll();
        $content = $this->load->view('admin/all_products', $data, true);
        return $this->load->view('admin/index', ['content' => $content]);
    }

    public function confirmDelete() {
        $data['id'] = $this->input->get('id');
        $data['name'] = $this->input->get('name');
        $content = $this->load->view('admin/confirm_delete', $data, true);
        return $this->load->view('admin/index', ['content' => $content]);
    }

    public function deleteProduct() {
        $id = $this->input->get('id');
        $this->product_model->deleteByUrlKey($id);
        redirect('/mrgAdmin', 'refresh');
    }
    
    public function newProduct() {
        $content = $this->load->view('admin/new_product', [], true);
        return $this->load->view('admin/index', ['content' => $content]);
    }

    public function createProduct() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $name = $this->input->post('name');
            $quantity = $this->input->post('quantity');
            $description = $this->input->post('description');
            $S15ML = $this->input->post('S125ML');
            $S60ML = $this->input->post('S60ML');
            $S125ML = $this->input->post('S125ML');
            $S250ML = $this->input->post('S250ML');
            $S500ML = $this->input->post('S500ML');
            $S1Gallon = $this->input->post('S1Gallon');
            $is_feteaured = $this->input->post('is_feteaured');
            $is_new = $this->input->post('is_new');
            $is_popular = $this->input->post('is_popular');
            $is_top = $this->input->post('is_top');
            $image = time();

            $config['upload_path']    = './resources/images/products/';
            $config['allowed_types']  = 'gif|jpg|png';
            $config['file_name']  = $image;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image'))
            {
                $image = $image.$this->upload->data('file_ext'); 
            }

            $this->product_model->createProduct($name, $description, 
                $S15ML, $S60ML, $S125ML, $S250ML, $S500ML, $S1Gallon,
                $quantity, $is_feteaured, $is_new, $is_popular, $is_top, $image);

            redirect('/mrgAdmin', 'refresh');
        } else {

        }
        
    }

    public function editProduct() {
        $id = $this->input->get('id');
        $data['products'] = $this->product_model->getByUrlKey($id);
        $content = $this->load->view('admin/edit_product', $data, true);
        return $this->load->view('admin/index', ['content' => $content]);
    }

    public function updateProduct() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $name = $this->input->post('name');
            $quantity = $this->input->post('quantity');
            $description = $this->input->post('description');
            $S15ML = $this->input->post('S125ML');
            $S60ML = $this->input->post('S60ML');
            $S125ML = $this->input->post('S125ML');
            $S250ML = $this->input->post('S250ML');
            $S500ML = $this->input->post('S500ML');
            $S1Gallon = $this->input->post('S1Gallon');
            $is_feteaured = $this->input->post('is_feteaured');
            $is_new = $this->input->post('is_new');
            $is_popular = $this->input->post('is_popular');
            $is_top = $this->input->post('is_top');
            $url_key = $this->input->post('url_key');
            $image = time();

            $config['upload_path']    = './resources/images/products/';
            $config['allowed_types']  = 'gif|jpg|png';
            $config['file_name']  = $image;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image'))
            {
                $image = $image.$this->upload->data('file_ext'); 
            }

            $this->product_model->updateProduct($name, $description, 
                $S15ML, $S60ML, $S125ML, $S250ML, $S500ML, $S1Gallon,
                $quantity, $is_feteaured, $is_new, $is_popular, $is_top, $image, $url_key);

            redirect('/mrgAdmin', 'refresh');
        } else {

        }
        
    }

    public function orders() {
        $offset = $this->uri->segment('3');
        $config['base_url'] = base_url('mrgAdmin/orders');
        $config['total_rows'] = $this->order_model->countAll();
        $config['per_page'] = 20;
        $config['cur_tag_open'] = '<li class="page-item active">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['orders'] = $this->order_model->getAll($offset);
        $content = $this->load->view('admin/all_orders', $data, true);
        return $this->load->view('admin/index', ['content' => $content]);
    }

    public function editOrder() {
        $id = $this->input->get('id');
        $data['orders'] = $this->order_model->getById($id);
        $content = $this->load->view('admin/edit_order', $data, true);
        return $this->load->view('admin/index', ['content' => $content]);
    }

    public function updateOrder() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $item = $this->input->post('item');
            $size = $this->input->post('size');
            $total = $this->input->post('total');
            $quantity = $this->input->post('quantity');
            $shipping = $this->input->post('shipping');
            $name = $this->input->post('name');
            $company = $this->input->post('company');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $status = $this->input->post('status');
            $id = $this->input->post('id');


            $this->order_model->updateById($item, $size, 
                $total, $quantity, $shipping, $name, $company, $address,
                $state, $phone, $email, $status, $id);

            redirect('/mrgAdmin/orders', 'refresh');
        } else {

        }
    }

    public function deleteOrder() {
        $content = $this->load->view('admin/partials/all_orders', $data, true);
        return $this->load->view('index', ['content' => $content]);
    }

    public function searchOrder() {
        $content = $this->load->view('admin/partials/all_orders', $data, true);
        return $this->load->view('index', ['content' => $content]);
    }


}