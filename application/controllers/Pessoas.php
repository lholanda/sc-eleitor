<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {	
	


	private function controle(){
		//controla existência de sessão
		// $validado 
		
		if(!$this->session->has_userdata('usuario')){
				redirect('/');
		}
	}

	//Página de listar pessoas
	public function index()
	{					
		$pagina   = isset($_GET['pagina'])  ? $_GET['pagina'] : 1;

		#$por_pag = isset($_GET['por_pag']) ? $_GET['por_pag']: 10;
		
		$this->controle();

		redirect("/pessoas/pagina/1");	
		

		//$this->pagina($pagina);
		// $this->list_pag($value);
		//echo "aqui";
		//exit;



		// //Carrega o Model Pessoa
		// $this->load->model('pessoa_model', 'pessoa');

		// //Criamos um Array dados para armazenas os pessoa
		// //Executamos a função no pessoa_model getpessoa
		// $data['pessoas'] = $this->pessoa->get_people_pag($value , $por_pag);

		// #$value     = a partir de qual registro;
		// #$reg_p_pag = quantos registros eu quero imprimir;

		// var_dump($data['pessoas']);
		// exit;

		// // $qtde = $this->pessoa->get_qtde1();
		// // var_dump($qtde[0]->total);

		// //$qtde = $this->pessoa->get_qtde();
		// //var_dump($qtde);
		
		// //exit;

		//Carregamos a view listarpessoa e passamos como parametro a array pessoa que guarda todos os pessoa da db pessoa
		// $this->load->view('/template/cabecalho', $data);
		// $this->load->view('listar_pessoas', $data);
		// $this->load->view('/template/rodape', $data);
	}


	//Página de adicionar pessoas
	public function add()
	{	
		
		//$baseUrl = $this->config->item('base_url');
	
		//Carrega o Model Pessoa				
		$this->load->model('pessoa_model', 'pessoa');				

		//Carrega a View
		$this->load->view('/template/cabecalho');
		$this->load->view('adicionar_pessoa');
		$this->load->view('/template/rodape');
	}

	//Página de adicionar pessoas
	public function editar($id = NULL)
	{	
		// posso lancar no config/autoload.php    
		$this->load->helper('url');
		//$baseUrl = $this->config->item('base_url');
	
		//Carrega o Model Pessoa				
		$this->load->model('pessoa_model', 'pessoa');

		// consulta no banco para ver se id realmente existe
		$query = $this->pessoa->getById($id);

		if(empty($query)){
			redirect("/pessoas");
		}

		$dados = $query[0]; // [0] para pegar apenas os dados
		
		$arr = array();
		foreach($dados as $key => $value){
				$arr[str_replace('peo_','',$key)] = $value;
		}
		$dados = $arr;

		//var_dump($arr);
		//exit;
		
		//Carrega a View
		$this->load->view('/template/cabecalho');
		$this->load->view('editar_pessoa', $dados);		
		$this->load->view('/template/rodape');
	}

	//Função salvar no DB
	public function salvar()
	{
		$prefixo = 'peo_';
		//Verifica se foi passado o campo nome vazio.
		if ($this->input->post('nome') == NULL) {
			//echo 'O campo nome é obrigatório.';
			// posso fazer uma validacao simples e exibir tudo na tela	
		} else {
			//Carrega o Model Pessoas				
			$this->load->model('pessoa_model', 'pessoa');
			// //var_dump($_POST);
			// $dados = $this->input->post();
			// var_dump($dados);
			// exit;

			//Pega dados do post e guarda na array $dados, coloca o prefixo e add
			$dados = $this->input->post();
			$id = isset($dados['id']) ? $dados['id'] : null;
			//var_dump($dados);          
			$arr = array();
			foreach($dados as $key => $value){
				$arr['peo_'.$key] = $value;
			}
			$dados = $arr;

			// ESTAO FALTANDO ALGUNS CAMPOS QUE NAO ESTAO APARECENDO NO FORMULARIO
			// MODIFIED É UM DELES;

			if($id !== NULL){
				//Executa a função do pessoa_model adicionar
				$this->pessoa->editPessoa($dados, $id );
			} else {
				//Executa a função do pessoa_model adicionar
				$this->pessoa->addPessoa($dados);
			}
			

			// posso lancar no config/autoload.php    
			$this->load->helper('url');

			//Fazemos um redicionamento para a página 		
			redirect("/pessoas");	
		}		

	}
	//Função salvar no DB
	public function apagar($id)
	{

		//Carrega o Model Pessoas				
		$this->load->model('pessoa_model', 'pessoa');
		
		//Executa a função do pessoa_model adicionar
		$this->pessoa->delPessoa($id);

		// posso lancar no config/autoload.php    
		$this->load->helper('url');

		//Fazemos um redicionamento para a página 		
		redirect("/pessoas");

	}

	//Função ativar no DB
	public function ativar($id)
	{
		$prefixo = 'peo_';
		//Carrega o Model Pessoas				
		$this->load->model('pessoa_model', 'pessoa');
		
		// consulta no banco para ver se id realmente existe
		$query = $this->pessoa->getById($id);

		$query[0]->peo_ativo = $query[0]->peo_ativo == "1" ? "0" : "1";  // troca se tiver 0 coloca 1 se tiver coloca 0
		$dados = $query[0]; // [0] para pegar apenas os dados

		$arr = array();
		foreach($dados as $key => $value){
			//$arr[str_replace('peo_','',$key)] = $value;
			$arr[$key] = $value;
		}
		$dados = $arr;

		$this->pessoa->editPessoa($dados, $id );
	
		// posso lancar no config/autoload.php    
		$this->load->helper('url');

		//Fazemos um redicionamento para a página 		
		redirect("/pessoas");

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

		// var_dump($qtd_reg);
		// var_dump($qtd_paginas);
		// var_dump($data);
		// exit;

		
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

		//var_export($botao);
		//exit;

			
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

		

		

		




		//var_dump($pagina);
		//var_dump($qtde_paginas);
		//echo $paginator;
		//exit;



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
		
	public function list_pag( $valor = null )
	{
		# code...

		//var_dump($valor);
		//exit;

		//if($valor == 'apagar' || $valor == 'editar'){
			//$valor = 0;
		//}

		if($valor == null){
			$valor = 0;
		}

		$reg_p_pag = 8;

		# define se o primeiro botao está ou nao desativado
		if($valor <= $reg_p_pag){
			$data['btnA'] = 'disable';
		} else {
			$data['btnA'] = '';
		}
		# Carrega o Model Pessoa
		$this->load->model('pessoa_model', 'pessoa');
		$qtde = $this->pessoa->get_qtde_teste(); // nao precisa fazer outro select para contar total
		
		// var_dump($valor);
		// var_dump($reg_p_pag);
		// var_dump($qtde);
		// exit;

		if( ($qtde - $valor) < $reg_p_pag ) {
			$data['btnP'] = 'disable';
		} else {
			$data['btnP'] = '';
		}
		$this->load->model('pessoa_model', 'pessoa');
		$data['pessoas'] = $this->pessoa->get_people_pag($valor, $reg_p_pag);
		
		$data['valor']     = $valor;
		$data['reg_p_pag'] = $reg_p_pag;
		$data['qtd_reg'] = $qtde;

		$v_inteiro = (int) $qtde / $reg_p_pag;
		$v_resto   =       $qtde % $reg_p_pag;

		if($v_resto > 0){
			$v_inteiro ++;
		}
		$data['qtde_botoes'] = $v_inteiro;

		
	

		// &lt &#123 <?php echo ($qtde_paginas) // &#125 &gt  &#10923  &raquo 

		// var_dump($data['pessoas']);
		// var_dump($qtde);
		// var_dump($v_inteiro);
		// var_dump($v_resto);
		// var_dump($data['qtde_botoes'] );
		// exit;
		//Carregamos a view listarpessoa e passamos como parametro a array pessoa que guarda todos os pessoa da db pessoa
		$this->load->view('/template/cabecalho');
		#$this->load->view('barra_usuario');
		$this->load->view('listar_pessoas', $data);
		$this->load->view('/template/rodape');
	}
		
}


		//var_dump($qtde);
		//exit;

		// var_dump($qtde[0]->total);
		// exit;
		// if( ($qtde[0]->total - $valor) < $reg_p_pag ) {
		// 	$data['btnP'] = 'disable';
		// } else {
		// 	$data['btnP'] = '';
		// }



