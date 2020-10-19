@extends('templates.template')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if(isset($salas)) Editar @else Cadastrar @endif Sala</h1>

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
                        @if(isset($salas))

                        <form name="formEdit" id="formEdit" method="post" action="{{url("salas/$salas->cod_sala")}}">
                            @method('PUT')

                        @else

                        <form name="formCad" id="formCad" method="post" action="{{url('salas')}}"> 
                        
                        @endif
                            
                            @csrf 
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" name="nome_sala" id="nome_sala" value="{{$salas->nome_sala ?? ''}}" placeholder="Digite o nome da sala" required>
                            </div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <input class="form-control" type="text" name="descricao_sala" id="descricao_sala" value="{{$salas -> descricao_sala ?? ''}}" placeholder="Digite a descrição da sala" required>
                            </div>

                            <div class="form-group">
                                                    <label>Bloco</label>
                                                    <select class="form-control" name="cod_bloco" id="cod_bloco" required>
                                                        <option value="{{$salas->relBlocos->cod_bloco ?? ''}}">{{$salas->relBlocos->nome_bloco ?? '-----'}}</option>
                                                        @foreach($blocos as $bloco)
                                                            <option value="{{$bloco->cod_bloco}}">{{$bloco->nome_bloco}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                            <input type="submit" class="btn btn-primary mt-4" value="@if(isset($sala)) Editar @else Cadastrar @endif">
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


