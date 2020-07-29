<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pessoa_model extends CI_Model
{	
    public function get_qtde_teste()
    {
        // ACEITA AS FILTRAGEM, se nao tiver comporta-se como $this->db->count_all
        // $qtde = $this->db->count_all_results('tb_people', FALSE);
        $qtde = $this->db->from('tb_people')->get()->num_rows();

        //$qtde = $this->db->count_all('tb_people');
		return $qtde;
    }

    public function get_qtde()
    {
        $this->db->select('count(*) as total');
        $qtde = $this->db->get('tb_people')->result();
        return $qtde;
    }

    //Lista todos os pessoas da tabela pessoas	
    public function get()
    {                                 
        $ordem = ('1' == '1') ? 'desc' : 'asc'; 
        $fieldId  = 'peo_' . 'id';  
        $query = $this->db->select('*')
                          ->from('tb_people')
                          ->order_by($fieldId, $ordem)
                          ->get();
        return $query->result();
    }

    //Lista todos os pessoas da tabela pessoas	
    public function getById($id=NULL)
    {    
        if($id != NULL){
            $fieldId  = 'peo_' . 'id';  
            $query = $this->db->select('*')
                        ->from('tb_people')
                        ->where($fieldId, $id)
                        ->limit(1)
                        ->get();
            return $query->result(); // ou $query->row()
        } else {
            return array();
        }
    }

    // gets novos
    public function get_people_pag($value = 0, $reg_p_page = 10)
    {                                 
        $ordem = ('1' == '0') ? 'desc' : 'asc'; 
        $fieldId  = 'peo_' . 'id';  
        $query = $this->db->select('*')
                          ->limit( $reg_p_page, $value)
                          ->order_by($fieldId, $ordem)
                          ->get('tb_people')
                          ->result();
        return $query;
    }
     // gets novos
     public function get_people_like()
     {                                 
         #$ordem = ('1' == '1') ? 'desc' : 'asc'; 
         #$fieldId   = 'peo_' . 'id';  
         $fieldNome = 'peo_' . 'nome';  
         $termo = $this->input->post('pesquisar');

         $query = $this->db->select('*')
                           ->like($fieldNome, $termo)
                           #->order_by($fieldId, $ordem)
                           ->get('tb_people')
                           ->result();
         return $query;
     }

     public function get_qtd_people(){

     }



    //Adiciona um novo pessoas na tabela pessoas
    public function addPessoa($dados=NULL)
	{
        //insert data 
        if ($dados != NULL):
            $insert = $this->db
                           ->insert('tb_people', $dados);
        endif;
            
        //return the status
        return $insert ? $this->db->insert_id() : false;
    }

    //Adiciona um novo pessoas na tabela pessoas
    public function editPessoa($dados=NULL, $id = NULL)
	{
        $fieldId = 'peo_' . 'id';
        //insert data 
        if ($dados != NULL and $id != NULL):
            $update = $this->db
                           ->update('tb_people', $dados, [$fieldId => $id]);
                           
        endif;
            
        //return the status
        return $update;
    }

    
    public function delPessoa($id)
    {
        //delete from table
        $fieldId = 'peo_' . 'id';
        try {
            $delete = $this->db->delete('tb_people', array( $fieldId => $id ));
            $retornoErro = 0;                    
            $db_error = $this->db->error();
            if ($db_error['code'] !== 0) {
              throw new Exception('Code:('. $db_error['code'] .'). Não pode deletar registro.');
            }
        } catch (Exception $e) {
            $retornoErro = $e->getMessage();
        }

        // se retornar 0 - nao houve erro 
        return $retornoErro;
    }


    
    
    
    function validaCPF($cpf) {
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }







       	 	
}
