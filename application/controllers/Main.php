<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {	
	
	private function controle(){
		//controla existência de sessão
		// $validado 
		
		if(!$this->session->has_userdata('usuario')){
				redirect('/');
		}
	}

	public function index()
	{
		$this->load->view('main');


		$pagina   = isset($_GET['pagina'])  ? $_GET['pagina'] : 1;	
		$this->controle();
		//redirect("/main/pagina/1");



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

		$reg_por_pag = 14;
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
		$hrefBtnA = "<?php echo base_url(" . "pessoas/pagina/)" ;
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

		//$botao = array();
		// estava dando um erro aqui 22/07/2020  de offset
		

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
		//echo $ord;
		//exit;

		
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
			}

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
		$this->load->view('listar_pessoas', $data);
		$this->load->view('/template/rodape');
	}

}
