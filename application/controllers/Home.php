<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
    }

	public function index() {
		$data['featured'] = $this->product_model->getFeatured();
		$data['top'] = $this->product_model->getTopSelling();
		$data['new'] = $this->product_model->getNew();
		$data['popular'] = $this->product_model->getMostPopular();
        $content = $this->load->view('partials/home', $data, true);
        return $this->load->view('index', ['content' => $content]);
    }

    public function contact_us() {
        $content = $this->load->view('partials/contact_us', [], true);
        return $this->load->view('index', ['content' => $content]);
    }

    public function about_us() {
        $content = $this->load->view('partials/about_us', [], true);
        return $this->load->view('index', ['content' => $content]);
    }

    public function faq() {
        $content = $this->load->view('partials/faq', [], true);
        return $this->load->view('index', ['content' => $content]);
    }

    function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

}
