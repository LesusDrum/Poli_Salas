@extends('templates.template')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Verifique as Salas</h1>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Bloco</th>
                                                    <th>Sala</th>
                                                    <th>Descrição</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                   @foreach($sala as $salas)
                                                   @php
                                                       $bloco=$salas->find($salas->cod_bloco)->relBlocos;
                                                   @endphp
                                                         <tr class='odd gradeX'>
                                                            <td>{{$bloco->nome_bloco}}</td>
                                                            <td>{{$salas->nome_sala}}</td>
                                                            <td>{{$salas->descricao_sala}}</td>
                                                            <td><!-- ";
                                                            if ($nivel == "Aluno(a)"){
                                                                echo "<form>
                                                                    <button class = 'btn btn-warning disabled' role = 'buttons' type = 'submit'>Editar</button>
                                                                </form>
                                                            <br>
                                                                <form>
                                                                    <button class = 'btn btn-danger disabled' role = 'buttons' type= 'submit'>Deletar</button>
                                                                </form>";
                                                            }else{
                                                                echo "<form method = 'POST' action = 'update_forms_classrooms.php'>
                                                                    <input type = 'hidden' name = 'cod_sala' value = '".$Linha ['cod_sala']."'>
                                                                    <input type = 'hidden' name = 'cod_bloco' value = '".$Linha['cod_bloco']."'>
                                                                    <button class = 'btn btn-warning' role = 'buttons' type = 'submit'>Editar</button>
                                                                </form>
                                                            <br>
                                                                <form method = 'POST' action = 'delete_classrooms.php'>
                                                                    <input type = 'hidden' name = 'cod_sala' value = '".$Linha ['cod_sala']."'>
                                                                    <button class = 'btn btn-danger' role = 'buttons' type= 'submit'>Deletar</button>
                                                                </form>";
                                                            }
                                                            echo " --> </td>
                                                        </tr>";
                                                    @endforeach
                                                   
                                                
                                            </tbody>
                                        </table>
                                        {{$sala->links()}}
                  
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

@endsection


