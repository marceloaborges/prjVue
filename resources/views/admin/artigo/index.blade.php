@extends('adminlte::page')

@section('page',"Artigos")

@section('content_header')
    <h1>Artigos</h1>
@stop


@section('content')

    <tabela 
        v-bind:titulos="['id','data','titulo','descricao']"
        v-bind:itens="{{ $artigos }}"
        criar="#criar" detalhe="/admin/artigos/" editar="#editar" deletar="#deletar" token="1234"
        >           
    </tabela>

    <modallink nome="card" titulo="Adicionar" tipo="link" classe="btn btn-sm btn-primary"></modallink>
    <modal nome="card" titulo="Cadastrar">
        <formulario classe="" action="{{ route('artigos.store') }}" method="POST" enctype="" token="{{ csrf_token() }}" >
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control form-control-sm" id="titulo" name="titulo" placeholder="Título" maxlength="60" value="{{$artigo->titulo ?? old('titulo')}}">                    
                </div>
                <div class="form-group col-12">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control form-control-sm" id="descricao" name="descricao" placeholder="Descrição" maxlength="60" value="{{$artigo->descricao ?? old('descricao')}}">                    
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="data">Data</label>
                    <input type="date" class="form-control form-control-sm" id="data" name="data" value="{{$artigo->data ?? old('data')}}">
                </div>
                <div class="form-group col-12">
                   <label for="conteudo">Conteúdo</label>
                   <textarea class="form-control" id="conteudo" name="conteudo" rows="5" maxlength="2000">{{ $artigo->conteudo ?? old('conteudo')}}</textarea> 
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </formulario>
    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario classe="" action="#" method="put" enctype="" token="" >
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control form-control-sm" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título" maxlength="60" value="{{$artigo->titulo ?? old('titulo')}}">                    
                </div>
                <div class="form-group col-12">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control form-control-sm" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição" maxlength="60" value="{{$artigo->descricao ?? old('descricao')}}">                    
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="data">Data</label>
                    <input type="date" class="form-control form-control-sm" id="data" name="data" v-model="$store.state.item.data" value="{{$artigo->data ?? old('data')}}">
                </div>
                <div class="form-group col-12">
                    <label for="conteudo">Conteúdo</label>
                    <textarea class="form-control @error('conteudo') is-invalid @enderror" id="conteudo" name="conteudo" rows="5" maxlength="2000">{{$artigo->conteudo ?? old('conteudo')}}</textarea> 
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

    <modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
        <p>
            <b>Descrição : </b> @{{ $store.state.item.descricao }}
        </p>

    </modal>

@stop
