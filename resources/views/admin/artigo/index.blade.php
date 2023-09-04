@extends('adminlte::page')

@section('page',"Artigos")

@section('content_header')
    <h1>Artigos</h1>
@stop


@section('content')

    <tabela 
        v-bind:titulos="['id','titutlo','descricao']"
        v-bind:itens="{{ $artigos }}"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="1234"
        >           
    </tabela>

    <modallink nome="card" titulo="Adicionar" tipo="link" classe="btn btn-sm btn-primary"></modallink>
    <modal nome="card" titulo="Cadastrar">
        <formulario classe="" action="#" method="POST" enctype="" token="" >
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="titulo">* Título</label>
                    <input type="text" class="form-control form-control-sm" id="titulo" name="titulo" placeholder="Título" maxlength="60" value="{{$artigo->titulo ?? old('titulo')}}" required>                    
                </div>
                <div class="form-group col-12">
                    <label for="descricao">* Descrição</label>
                    <input type="text" class="form-control form-control-sm" id="descricao" name="descricao" placeholder="Descrição" maxlength="60" value="{{$artigo->descricao ?? old('descricao')}}" required>                    
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </formulario>
    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario classe="" action="#" method="put" enctype="" token="" >
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="titulo">* Título</label>
                    <input type="text" class="form-control form-control-sm" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título" maxlength="60" value="{{$artigo->titulo ?? old('titulo')}}" required>                    
                </div>
                <div class="form-group col-12">
                    <label for="descricao">* Descrição</label>
                    <input type="text" class="form-control form-control-sm" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição" maxlength="60" value="{{$artigo->descricao ?? old('descricao')}}" required>                    
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </formulario>
    </modal>

    <modal nome="detalhe" titulo="Detalhe">
        <h1>Página de Detalhe</h1>
        <hr/>
        <p>
            <b>Título : </b>
        </p>

    </modal>

@stop
