<?php
    defined('BASEPATH') OR exit('URL inválida.');
    
    // ==================================================
    // controlador de usuários
    // ==================================================
    class Campanha_email extends CI_Controller{

        // ==============================================
        public function index(){

            $dados = array();
            //apresenta novamente o formulário
            $this->load->view('/template/cabecalho');
            $this->load->view('campanha_email', $dados);
            $this->load->view('/template/rodape');


            // depois vai para 

                      
        }

    }
?>