 <!-- CONTEUDO -->
 <div class="content p-1">
     <div class="list-group-item">
         <!-- inicio d-flex -->
         <div class="d-flex">
             <div class="mr-auto p-0">

             </div>
             <a href="pessoas/add">
                 <div class="p-2">
                     <button class="btn btn-outline-success">
                         NOVO CADASTRO
                     </button>
                 </div>
             </a>
         </div>
         <!-- area reservada para alert -->
         <div class="alert alert-success text-left" role="alert" hidden>
             Usuário excluído com sucesso !!!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <!-- area reservada para alert -->
         <hr>
         <div class="container">
             <table class="table table-bordered table-striped">

                 <thead>
                     <tr>
                         <th class="text-center">Contador</th>
                         <th class="text-center">Nome</th>
                         <th class="text-right">Apelido</th>
                         <th class="text-right">Data Cadastro</th>
                         <th class="text-right">Ativo ?</th>
                         <th class="text-center">Açoes</th>
                     </tr>
                 </thead>

                 <?php
                    $contador = count($pessoas);
                    foreach ($pessoas as $pessoa) {

                        echo '<tr>';
                        echo "<td class='text-center'>" . $contador . '</td>';
                        echo '<td>' . $pessoa->peo_nome . '</td>';
                        echo '<td class="text-right">' . $pessoa->peo_apelido . '</td>';
                        echo '<td class="text-right">' . date('d-m-Y', strtotime($pessoa->peo_data)) . '</td>';
                        echo '<td class="text-center">' . ($pessoa->peo_ativo ? 'Sim' : 'não') . '</td>';
                        echo '<td class="text-center">';
                        echo '<a href="/pessoas/editar/'   . $pessoa->peo_id . '" title="Editar cadastro" class="btn btn-primary btn-sm">Editar</a>';
                        // echo ' <a href="/pessoas/apagar/'  .$pessoa->peo_id . '" title="Apagar cadastro" class="btn btn-info    btn-sm">Apagar</a>';
                        echo ' <a href="/pessoas/detalhes/' . $pessoa->peo_id . '" title="Detalhes"        class="btn btn-success btn-sm">Detalhes</a>';
                        echo '</td>';

                        echo '</tr>';
                        $contador--;
                    }
                ?>

             </table>
         </div><!-- final d-flex -->
     </div>
 </div>
 <!-- FINAL de conteúdo -->