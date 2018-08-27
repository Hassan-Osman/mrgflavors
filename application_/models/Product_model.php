<?php

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getFeatured() {
        return $this->db->get_where('products', ['is_featured' => '1'])->result();
    }

    public function getTopSelling() {
        return $this->db->get_where('products', ['is_top' => '1'])->result();
    }

    public function getNew() {
        return $this->db->get_where('products', ['is_new' => '1'])->result();
    }

    public function getMostPopular() {
        return $this->db->get_where('products', ['is_popular' => '1'])->result();
    }

    public function getAll() {
        return $this->db->get('products')->result();
    }

    public function getByUrlKey($id) {
        return $this->db->get_where('products', ['url_key' => $id])->row();
    }
    
    public function getById($id) {
        return $this->db->get_where('products', ['id' => $id])->row();
    }

    public function updateById($id) {
        return $this->db->get_where('products', ['id' => $id])->row();
    }

    public function deleteByUrlKey($id) {
        return $this->db->delete('products', array('url_key' => $id)); 
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

    public function createProduct($name, $description, 
                $S15ML, $S60ML, $S125ML, $S250ML, $S500ML, $S1Gallon,
                $quantity, $is_feteaured, $is_new, $is_popular, $is_top, $image) {

        $data = array(
            'name' => $name,
            'url_key' => $this->seoUrl($name),
            'image' => $image,
            'description' => $description,
            'S15ML' => $S15ML,
            'S60ML' => $S60ML,
            'S125ML' => $S125ML,
            'S250ML' => $S250ML,
            'S500ML' => $S500ML,
            'S1Gallon' => $S1Gallon,
            'quantity' => $quantity,
            'is_featured' => $is_feteaured,
            'is_new' => $is_new,
            'is_popular' => $is_popular,
            'is_top' => $is_top

        );

        $this->db->insert('products', $data);
    }

    public function updateProduct($name, $description, 
                $S15ML, $S60ML, $S125ML, $S250ML, $S500ML, $S1Gallon,
                $quantity, $is_feteaured, $is_new, $is_popular, $is_top, $image, $url_key) {

        $data = array(
            'name' => $name,
            'url_key' => $this->seoUrl($name),
            'image' => $image,
            'description' => $description,
            'S15ML' => $S15ML,
            'S60ML' => $S60ML,
            'S125ML' => $S125ML,
            'S250ML' => $S250ML,
            'S500ML' => $S500ML,
            'S1Gallon' => $S1Gallon,
            'quantity' => $quantity,
            'is_featured' => $is_feteaured,
            'is_new' => $is_new,
            'is_popular' => $is_popular,
            'is_top' => $is_top

        );

        $this->db->where('url_key', $url_key);
        $this->db->update('products', $data);
    }

    public function search($text)
    {
        $this->db->from('products');
        $this->db->like('lower(name)', strtolower(trim($text)));
        return $this->db->get()->result();

    }

}
