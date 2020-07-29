<?php
    defined('BASEPATH') OR exit('URL inválida.');
    
    // ==================================================
    // controlador de usuários
    // ==================================================
    class Relatorios extends CI_Controller{

        // ==============================================
        public function index(){

            $dados = array();
            //apresenta novamente o formulário
            $this->load->view('/template/cabecalho');
            $this->load->view('relatorios', $dados);
            $this->load->view('/template/rodape');
                      
        }

    }
?>