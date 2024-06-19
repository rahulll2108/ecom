<?php
class LD_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function displayAppPage($title, $content)
    {   
        $data['title'] = $title;
        $html = $this->load->view('design/header', $data , true);
        $html .= $content;
		$html .= $this->load->view('design/footer', $data , true);
        echo $html;
    }
}
?>