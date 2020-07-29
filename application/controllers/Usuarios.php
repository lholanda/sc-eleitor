<?php
    defined('BASEPATH') OR exit('URL inválida.');
    
    // ==================================================
    // controlador de usuários
    // ==================================================
    class Usuarios extends CI_Controller{

        // ==============================================
        public function login(){
            //apresenta o quadro de login ou processa o post do login
            if($this->input->method()!='post'){
                
                // formulário
                //$this->load->view('/template/cabecalho');
                $this->load->view('login');
                //$this->load->view('/template/rodape');   
                return;
            }

            //tratamento do formulário
            
            //verifica se os campos foram preenchidos (validação do lado do servidor)
            if($this->input->post('text_usuario') == '' ||
               $this->input->post('text_senha') == '')
            {

                    //define mensagem de erro
                    $dados['erro'] = 'Os dois campos são de preenchimento obrigatório.';
             
                    //apresenta novamente o formulário
                    $this->load->view('/template/cabecalho');
                    $this->load->view('login', $dados);
                    $this->load->view('/template/rodape');   
                    return;
            }

            // autenticacao provisoria
            $user  = $this->input->post('text_usuario');
            $senha = $this->input->post('text_senha');

            //verifica se o login foi válido
            //$this->load->model('usuarios_model', 'usuarios');

            $validado = ($user === 'eleitor' && $senha === 's1234c');

            if($validado){
            // if($this->usuarios->verificar_login()){
                
                $_SESSION['usuario'] = 'eleitor';

                redirect('/pessoas');
            } else {
                $dados['erro'] = 'Usuário ou senha inválidos.';
                //apresenta novamente o formulário
                //$this->load->view('/template/cabecalho');
                $this->load->view('login', $dados);
                //$this->load->view('/template/rodape');   
                return;
            }           
        }

        // ==============================================
        public function signup(){
            //apresenta o formulário para criar um novo usuário ou trata o post do formulário
            if($this->input->method() != 'post'){
                //apresenta o formulário para criação de novo usuário
                $this->load->view('layouts/inicio');
                $this->load->view('usuarios/signup');
                $this->load->view('layouts/fim');
                return;
            }
            
            //validações --------------------------------
            //verifica se as senhas correspondem
            if($this->input->post('text_pass_1') !== $this->input->post('text_pass_2')){
                $dados['erro'] = 'As senhas não correspondem.';
                $this->load->view('layouts/inicio');
                $this->load->view('usuarios/signup', $dados);
                $this->load->view('layouts/fim');
                return;
            }

            $this->load->model('usuarios_model', 'usuarios');

            //verifica se já existe um usuário com o mesmo nome ou email
            if($this->usuarios->signup_check_usuario()){
                $dados['erro'] = 'Já existe um usuário com o mesmo nome ou email.';
                $this->load->view('layouts/inicio');
                $this->load->view('usuarios/signup', $dados);
                $this->load->view('layouts/fim');
                return;
            }

            //executa o signup            
            $this->usuarios->signup_criar_conta();
            //apresenta a informação de que foi criada uma nova conta de usuário
            $this->load->view('layouts/inicio');
            $this->load->view('usuarios/signup_sucesso');
            $this->load->view('layouts/fim');
        }

        // ==============================================
        public function logout(){
            //faz o logout do usuário
            if($this->session->has_userdata('usuario')){
                //destroi os dados da sessão                
                $this->session->unset_userdata('usuario');
                // $this->session->unset_userdata('usuario');
                // $this->session->unset_userdata('email');
                redirect('/');
            } else {
                redirect('/');
            }
        }

    }
?>