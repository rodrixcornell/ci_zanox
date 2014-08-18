<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zanox_controller
 *
 * @author cabral
 */
class Zanox_Controller extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->helper(array('array', 'form', 'html', 'text', 'url', 'xml'));
        $this->load->library(array('pagination', 'layout', 'apiclient'));
    }

    public function Index() {
        $test['teste'] = 'ola mundo!!!';
        $layout = array('html_header', 'head', array('menu', $test), 'container', 'foot', 'html_footer');
        print_r($layout);

        $dados['item'] = $produto = array();
        print_r($dados);
        $dados_header = array(
            'titulo' => 'Super loja legal - ' . '$produto->nome',
            'descricao' => '$produto->descricao',
            'palavras_chave' => 'palavra 1,palavra 2,palavra N'
        );
        print_r($dados_header);
        $dados_cabecalho = array('titulo_h2' => '$produto->nome');
        $dados_cabecalho['categorias'] = array();
        print_r($dados_cabecalho);
    }

}

?>
