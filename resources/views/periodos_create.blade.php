@extends('templates.template')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if(isset($periodos)) Editar @else Cadastrar @endif Sala</h1>

        @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        @if(isset($periodos))

                        <form name="formEdit" id="formEdit" method="post" action="{{url("periodos/$periodos->cod_periodo")}}">
                            @method('PUT')

                        @else

                        <form name="formCad" id="formCad" method="post" action="{{url('periodos')}}"> 
                        
                        @endif
                            
                            @csrf 
                            <div class="form-group">
                                <label>Periodo</label>
                                <input class="form-control" type="text" name="periodo" id="periodo" value="{{$periodos->periodo ?? ''}}" placeholder="Digite o nome do Periodo" required>
                            </div>
                            <div class="form-group">
                                <label>Horário de Entrada</label>
                                <input class="form-control" type="time" name="hora_entrada" id="hora_entrada" min="07:20" max="19:10"  
                                value="{{$periodos -> hora_entrada ?? ''}}" required>
                            </div>
                            <div class="form-group">
                                <label>Horário de Entrada</label>
                                <input class="form-control" type="time" name="hora_saida" id="hora_saida" min="12:00" max="23:30"  
                                value="{{$periodos -> hora_saida ?? ''}}" required>
                            </div>

                            <div class="form-group">
                                                    <label>Curso</label>
                                                    <select class="form-control" name="cod_curso" id="cod_curso" required>
                                                        <option value="{{$periodos->relCursos->cod_curso ?? ''}}">{{$periodos->relCursos->nome_curso ?? '-----'}}</option>
                                                        @foreach($cursos as $curso)
                                                            <option value="{{$curso->cod_curso}}">{{$curso->nome_curso}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                            <input type="submit" class="btn btn-primary mt-4" value="@if(isset($periodos)) Editar @else Cadastrar @endif">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->



@endsection


