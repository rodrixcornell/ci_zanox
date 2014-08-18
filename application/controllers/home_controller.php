<?php

//

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        $helpers = array('array', 'form', 'html', 'text', 'url', 'xml');
        $this->load->helper($helpers);

        $library = array('pagination', 'layout', 'apiclient');
        $this->load->library($library);

        $model = array('home_model' => 'home');
        foreach ($model as $key => $value) {
            $this->load->model($key, $value);
        }
    }

    public function index() {
        print_r($this->home->pesquisar());

//        $dados['xml'] = $xml;
//        $this->load->view('home_view', $dados);
        $this->load->view('home_view');
    }

    public function pesquisarProdutos() {

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */