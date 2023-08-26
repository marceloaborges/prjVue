<template>
    <div>
        <div class="row">
            <div class="col-12 text-right">
                <a v-if="criar" v-bind:href="criar" class="btn btn-sm btn-primary">Adicionar</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="table-responsive-xl tableFixHead" style="height: 60vh">
                    <table class="table table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th v-for="titulo in titulos">{{ titulo }}</th>
                                <th v-if="detalhe" width="50px">Detalhe</th>
                                <th v-if="editar" width="45px">Editar</th>
                                <th v-if="deletar" width="45px">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item,index) in itens">
                                <td v-for="i in item">{{ i }}</td>
                                <td v-if="detalhe" class="text-center">
                                    <modallink v-if="detalhe" v-bind:item="item" v-bind:href="detalhe" nome="detalhe" titulo="detalhe" tipo="link" classe="btn btn-sm btn-info"></modallink>
                                </td>
                                <td v-if="editar" v-bind:href="editar">
                                    <modallink v-if="editar" v-bind:item="item" v-bind:href="editar" nome="editar" titulo="editar" tipo="link" classe="btn btn-sm btn-secondary"></modallink>
                                </td>
                                <td v-if="deletar" class="text-center">
                                    <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" v-bind:value="token">
                                        <a v-on:click="executeDelete(index)" v-if="deletar" v-bind:href="deletar" class="btn btn-sm btn-danger">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>                                
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "tabela",
        props:['titulos','itens','criar','detalhe','editar','deletar','token'],
        methods:{
            executeDelete: function(index){
                documento.getElementById(index).submit();
            }
        }
    }
</script>
