<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailsController extends CI_Controller {	
	
	public function __construct()
    {
        parent::__construct();

        //$this->load->library('Emails');
    }


	private function controle(){
		//controla existência de sessão
		// $validado 
		
		//if(!$this->session->has_userdata('usuario')){
		//		redirect('/');
		//}
	}

	//Página de listar pessoas
	public function index()
	{					
		$pagina   = isset($_GET['pagina'])  ? $_GET['pagina'] : 1;

		#$por_pag = isset($_GET['por_pag']) ? $_GET['por_pag']: 10;

		$this->controle();

		redirect("/emailsController/pagina/1");		
	}

	//Função ativar no DB
	public function selecionar_email($id, $pagina)
	{
		
		$this->controle();

		$prefixo = 'peo_';
		//Carrega o Model Pessoas				
		$this->load->model('pessoa_model', 'pessoa');
		
		// consulta no banco para ver se id realmente existe
		$query = $this->pessoa->getById($id);

		$query[0]->peo_flag_email = $query[0]->peo_flag_email == "1" ? "0" : "1";  // troca se tiver 0 coloca 1 se tiver coloca 0

		$dados = $query[0]; // [0] para pegar apenas os dados
		
		$this->pessoa->editPessoa($dados, $id );
	
		// posso lancar no config/autoload.php    
		$this->load->helper('url');

		//Fazemos um redicionamento para a página 		
		redirect("/emailsController/pagina/$pagina");

	}

	//Metodo marcar todos os emails para impressao
	public function marcarTodosEmails($pagina)
	{
		
		$this->controle();

		$campoId = "peo_"."id";

		//Carrega o Model Pessoas				
		$this->load->model('pessoa_model', 'pessoa');
		
		// consulta no banco para ver se id realmente existe
		$query = $this->pessoa->get();

		foreach($query as $d):
			$id = $d->$campoId;
			$update = $this->pessoa->flagEmail($id, 1);
		endforeach;

		// posso lancar no config/autoload.php    
		$this->load->helper('url');

		//Fazemos um redicionamento para a página 		
		redirect("/emailsController/pagina/$pagina");

	}

	public function desmarcarTodosEmails($pagina)
	{

		$this->controle();

		$campoId = "peo_"."id";

		//Carrega o Model Pessoas				
		$this->load->model('pessoa_model', 'pessoa');
		
		// consulta no banco para ver se id realmente existe
		$query = $this->pessoa->get();

		foreach($query as $d):
			$id = $d->$campoId;
			$update = $this->pessoa->flagEmail($id, 0);
		endforeach;

		// posso lancar no config/autoload.php    
		$this->load->helper('url');

		//Fazemos um redicionamento para a página 		
		redirect("/emailsController/pagina/$pagina");
	}

	//Metodo marcar todos os emails para impressao
	public function editarMensagem($pagina)
	{
		$dados = array();
		//apresenta novamente o formulário
		$this->load->view('/template/cabecalho');
		$this->load->view('campanha_email', $dados);
		$this->load->view('/template/rodape');
	}

	public function enviarEmail($pagina)
    {

		//$this->controle();
		//apresenta novamente o formulário
		//$this->load->view('/template/cabecalho');
		//$this->load->view('campanha_email');
		//$this->load->view('/template/rodape');

		$assunto         = "um titulo!!!";
		$mensagem        = "uma mensagem";

		$this->load->library('Emails');

		//Carrega o Model Pessoas				
		$this->load->model('pessoa_model', 'pessoa');
		
		$dados = $this->pessoa->get();

		//var_dump($dados);
		//exit;

		//foreach($query as $d):
			//$id = $d->$campoId;
			//$update = $this->pessoa->flagEmail($id, 1);
		//endforeach;


        $total = 0;
        $conta = count($dados);
        $emailsNaoEnviados_arr = [];
        $emailsEnviados_arr = [];
        if ($conta > 0) :

            $i = 0;
            // laco com os aniversariantes recebidos via post json
            $conta_envio = 1;
			foreach ($dados as $d) :

				$id    = $d->peo_id;
				$nome  = $d->peo_nome;
				$email = array($d->peo_email); // phpmaailer sempre espera um array de email

				if ($d->peo_flag_email != 0) {
					// enviar para a lista de aniversariantes
					++$total;
					$mensagem_html = "
		            <strong>Mensagem enviada pelo app sc-eleitor</strong><hr>" .
					"Nome: <b>$nome</b> ($total)<br>" .
					"Email: <b>$email[0]</b><br>" .
					"Mensagem: Olá <b>$nome</b>. <br>" . nl2br($mensagem) . "<br>";



					if ($this->emails->enviar($assunto, $mensagem_html, $email)) {
						array_push($emailsEnviados_arr, ["nome" => $nome, "email" => $email[0]]);

						# GRAVA UMA FLAG 1 no campo pac_flag_email_niver indicando que o mesmo recebeu um email de aniversario
						// pacientes;


						//if (! $this->marcarFlagComCodigoDaCampanha( $id )) {
						//apresentar json sobre o erro
						//}

					} else {
						array_push($emailsNaoEnviados_arr, ["id" => $id, "nome" => $nome, "email" => $email[0]]);
					}
				}
                 


            endforeach;

            if ($total == $conta) {
                $msgParaEnvio = $total == 1 ? "mensagem enviada com sucesso" : "mensagens enviadas com sucesso";
				//apresentar json sobre o sucesso

				// apresenta o resumo

                //$this->response([
                //    'status'     => TRUE,
                //    'enviados'   => $emailsEnviados_arr,
                //    'naoEnviados'=> $emailsNaoEnviados_arr,
                //    'mensagem'   => "$total $msgParaEnvio"
                //], REST_Controller::HTTP_OK);
            } else {
                //apresentar json sobre o erro
               // $this->response([
                //    'status'  => FALSE,
                //    'naoEnviados' => $emailsNaoEnviados_arr,
               //     'enviados'    => $emailsEnviados_arr,
               //     'mensagem'    => "erro no envio dos emails , (esperados $conta, enviados $total  )"
               // ], REST_Controller::HTTP_BAD_REQUEST);
            }
        else :
            //$this->response([
           //     'status'  => FALSE,
           //     'mensagem' => "Não há emails para serem enviados ou há mais que 50 emails"
           // ], REST_Controller::HTTP_BAD_REQUEST);
        endif;
		
		//Fazemos um redicionamento para a página 		
		redirect("/emailsController/pagina/$pagina");


    }


	public function pagina( $pagina = 1 )
	{
		// funcao para .renderizar um bottom
		function paginator_botao($label = null, $position = 1 ){
			$ini = "
					<li class='page-item'>
						<a class='page-link' href=$position>"; 
						
			$final = "  </a>
			        </li>";
			$botao = $ini . $label . $final;
			
			//var_dump($botao);
			//exit;

			return $botao;
		}

		// para limitar
		$pagina = isset($pagina) ? (int) $pagina : 1;
		if($pagina <= 1) $pagina = 1;

		$reg_por_pag = 15;
		$bot_por_pag = 5;

		# define se o primeiro botao está ou nao desativado
		if( $pagina == 1 ){
			$data['btnA'] = 'disable';
		} else {
			$data['btnA'] = '';
		}
		# Carrega o Model Pessoa
		$this->load->model('pessoa_model', 'pessoa');
		$qtd_reg     = $this->pessoa->get_qtde_teste(); // nao precisa fazer outro select para contar total
		$qtde_paginas = (int) ceil($qtd_reg / $reg_por_pag);

		if($pagina > $qtde_paginas) $pagina = 1;

		// INICIO DA PAGINA SERVIRA PARA APONTAR PARA O REGISTRO A SER EXIBIDO
		$inicio_pagina = ($pagina - 1) * $reg_por_pag;

		$this->load->model('pessoa_model', 'pessoa');
		$data['pessoas'] = $this->pessoa->get_people_pag($inicio_pagina, $reg_por_pag);


		if( $pagina == $qtde_paginas ) {
			$data['btnP'] = 'disable';
		} else {
			$data['btnP'] = '';
		}
	
		// Conteudo = "<input id='btnOculta_" + lin + "' type='button' value='novo' class='btn btn-default' onclick='Ocultar(this, \"OcultaNovoMedicamento_1\")' style='float:left' />";
		$btnA = "";
		$hrefBtnA = "<?php echo base_url(" . "emailsController/pagina/)" ;
		$pagina_anterior = '';
		// paginator já ira pronto para o HTML, não haverá a necessidade de <?php echo > dentro 
	
		$botao_primeiro = "
					<li class='page-item'>
						<a class='page-link' 
		                   href= '1' >						
		                 Primeiro
		                </a>
		            </li>
		"; 

		$botao_ultimo = paginator_botao( 'Ultimo', $qtde_paginas);
		for($i = 1; $i<= $qtde_paginas; $i ++){
			$botao[$i] = paginator_botao( "$i" , $i );
		}
		
		$botao_prev = paginator_botao( '&#10218', ($pagina - 1) );
		$botao_next = paginator_botao( '&#10219', ($pagina + 1) );
		

		$paginatorInicio = "
		    <nav aria-label='...'>
				<ul class='pagination justify-content-center'>
		"; 
		$paginatorFinal = "
		        </ul>
		    </nav>	
		"; 
		$paginator = $paginatorInicio . $paginatorFinal;

		$ord = $pagina;		
		$botoes = '';

		if($pagina > 1 ){
			  if ($pagina < $qtde_paginas-$bot_por_pag){
				for ( $i=$pagina ; $i <= ($pagina + $bot_por_pag); $i++ ){
					$botoes .= $botao[$i];
					//echo $botoes . '<br>';
				}
				
				$paginator = $paginatorInicio . 
				$botao_primeiro .
				$botao_prev .
				$botoes . 
				$botao_next .
				$botao_ultimo .
				$paginatorFinal;
			  }	else {
				$pagina = $qtde_paginas-$bot_por_pag + 1;
			  }

		}

		if($pagina === 1){
			for ( $i=1 ; $i <= $bot_por_pag; $i++ ){
				$botoes .= $botao[$i];
			}
			//var_dump($botoes);
			//exit;
			$paginator = $paginatorInicio . 
			             $botoes . 
						 $botao_next .
						 $botao_ultimo .
						 $paginatorFinal;
		}

		if(($pagina === $qtde_paginas) or ($pagina === $qtde_paginas-$bot_por_pag+1) ){
			for ( $i=$qtde_paginas-$bot_por_pag ; $i <= $qtde_paginas; $i++ ){
				if($pagina < $qtde_paginas){
					$botoes .= $botao[$i];

				}
				//echo $botoes . '<br>';
			}
			//echo $botoes . '<br>';
			//exit;


			$paginator = $paginatorInicio . 
						 $botao_primeiro .
						 $botao_prev .
						 $botoes . 
						 $paginatorFinal;
		}

		$data['paginator']   = $paginator;
		$data['qtde_botoes'] = $bot_por_pag;
		$data['qtde_paginas']= $qtde_paginas;
		$data['pagina']      = $pagina;
		$data['qtd_reg']     = $qtd_reg;



		//Carregamos a view listarpessoa e passamos como parametro a array pessoa que guarda todos os pessoa da db pessoa
		$this->load->view('/template/cabecalho');
		#$this->load->view('barra_usuario');
		$this->load->view('listar_emails', $data);
		$this->load->view('/template/rodape');
	}
		
	
}


