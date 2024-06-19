<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends LD_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
	}
	
	public function index()
	{
		$html = $this->load->view('home', "", true);
		$this->displayAppPage('E-Commerce', $html);

	}

	public function about()
	{
		$html = $this->load->view('about',"",true);
		$this->displayAppPage('About', $html);
	}

	public function blog()
	{
		$html = $this->load->view('blog',"",true);
		$this->displayAppPage('Blog', $html);
	}

	public function contact()
	{
		$html = $this->load->view('contact',"",true);
		$this->displayAppPage('Contact', $html);
	}
	
	public function shop()
	{

		$data['products'] = $this->ProductModel->get_all_products();
		$html = $this->load->view('shop', $data, true);
		$this->displayAppPage('Shop', $html);
	}

	public function product($id)
	{
		$data['product'] = $this->ProductModel->get_product_by_id($id);
		$data['randomImages'] = $this->ProductModel->get_random_products(4);
		$html = $this->load->view('product', $data, true);
		$this->displayAppPage('Product Details', $html);
	}

}
