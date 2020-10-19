@extends('templates.template')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Verifique os Períodos</h1>
        
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
                                    @csrf
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Curso</th>
                                                    <th>Periodo</th>
                                                    <th>Hora de Entrada</th>
                                                    <th>Hora de Saída</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                   @foreach($periodos as $periodo)
                                                   @php
                                                       $curso=$periodo->find($periodo->cod_periodo)->relCursos;
                                                   @endphp
                                                         <tr class='odd gradeX'>
                                                            <td>{{$curso->nome_curso}}</td>
                                                            <td>{{$periodo->periodo}}</td>
                                                            <td>{{$periodo->hora_entrada}}</td>
                                                            <td>{{$periodo->hora_saida}}</td>
                                                            <td>
                                                            
                                                                <a href="{{url("periodos/$periodo->cod_periodo/edit")}}">
                                                                <button type='submit' class='btn btn-warning btn-circle'><i class='fa fa-pencil-square-o'></i></button>
                                                                </a>

                                                                <a href="{{url("periodos/$periodo->cod_periodo")}}" class="js-del">
                                                                <button type='submit' class='btn btn-danger btn-circle'><i class='fa fa-trash'></i></button>
                                                                </a>

                                                            <!-- ";
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
                                        {{$periodos->links()}}
                                        <div class="text-center mt-4 mb-3">
                                        <a href="{{url('periodos/create')}}">
                                        <button class="btn btn-success">Cadastrar</button>
                                        </a>

                        </div>
                  
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


