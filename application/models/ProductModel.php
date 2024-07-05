<?php

class ProductModel extends CI_Model
{
    public function get_all_products()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    public function get_product_by_id($id)
    {
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->row();
    }

    public function get_random_products($limit)
    {
        $this->db->order_by('RAND()');
        $this->db->limit($limit);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function get_new_random_products($limit)
    {
        $this->db->order_by('RAND()');
        $this->db->limit($limit);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function get_first_8_products()
    {
        $this->db->limit(8, 0);
        $query = $this->db->get('products');
        return $query->result();
    }
    
    public function get_next_8_products()
    {
        $this->db->limit(8, 8);
        $query = $this->db->get('products');
        return $query->result();
    }

}

?>