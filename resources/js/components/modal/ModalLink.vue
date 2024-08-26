<template>

    <span v-if="item">
        <button v-on:click="carregaForm()" v-if="tipo == 'button'" type="button" v-bind:class="classe || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">
            {{ titulo }}
        </button>
        <a v-on:click="carregaForm()" v-else-if="tipo == 'link'" v-bind:class="classe || ''" href="#" data-toggle="modal"v-bind:data-target="'#' + nome">{{ titulo }}</a>
    </span>

    <span v-else-if="!item">
        <button v-on:click="carregaForm()" v-if="tipo == 'button'" type="button" v-bind:class="classe || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">
            {{ titulo }}
        </button>
        <a v-on:click="carregaForm()" v-else-if="tipo == 'link'" v-bind:class="classe || ''" href="#" data-toggle="modal"v-bind:data-target="'#' + nome">{{ titulo }}</a> 
    </span>
    
</template>

<script>
    export default {
        props:['tipo','nome','titulo','classe','item','url'],
        methods:{
            carregaForm:function(){
                axios.get(this.url + this.item.id).then(res => {
                    console.log(res.data);
                    this.$store.commit('setItem',res.data);
                });
                this.$store.commit('setItem',this.item);
            }
        }
    }
</script>