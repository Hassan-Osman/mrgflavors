<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    public function checkout() {
            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $name = $this->input->post("name");
                $urlKey = $this->input->post("urlKey");
                $size  = $this->input->post("size");
                $total  = $this->input->post("total");
                $quantity  = $this->input->post("quantity");
                if(empty($urlKey) || empty($size) || empty($quantity)) {
                    redirect('/home', 'refresh');
                }

                $shipping = 5;
                $data['urlKey'] = $urlKey;
                $data['item'] = $name;
                $data['size'] = $size;
                $data['quantity'] = $quantity;
                $data['shipping'] = $shipping;
                $data['total'] = $total+$shipping;
                $content = $this->load->view('partials/checkout', $data, true);
                return $this->load->view('index', ['content' => $content]);

            } else {
                redirect('/home', 'refresh');
            }
        }


        public function submitOrder() {
            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $item = $this->input->post("item");
                $urlKey = $this->input->post("urlKey");
                $size  = $this->input->post("size");
                $total  = $this->input->post("total");
                $quantity  = $this->input->post("quantity");
                $shipping  = $this->input->post("shipping");
                $name  = $this->input->post("name");
                $company  = $this->input->post("company");
                $address  = $this->input->post("address");
                $state  = $this->input->post("state");
                $phone  = $this->input->post("phone");
                $email  = $this->input->post("email");

                if(empty($urlKey) || empty($size) || empty($quantity) || empty($item) || empty($shipping) || empty($total) 
                || empty($name) || empty($company) || empty($address) || empty($state) || empty($phone) || empty($email)) {
                    redirect('/home', 'refresh');
                }

                $this->order_model->newOrder($item, $urlKey, $size, $total, $quantity, $shipping, 
                                        $name, $company, $address, $state, $phone, $email);
                
                $content = $this->load->view('partials/thanks', [], true);
                return $this->load->view('index', ['content' => $content]);

            } else {
                redirect('/home', 'refresh');
            }
        }

}