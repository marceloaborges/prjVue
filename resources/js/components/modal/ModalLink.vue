<template>

    <button v-if="tipo == 'button'" type="button" v-bind:class="classe || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">
        {{ titulo }}
    </button>
    <a v-else-if="tipo == 'link'" v-bind:class="classe || ''" href="#" data-toggle="modal" v-bind:data-target="'#' + nome">
        {{ titulo }}
    </a>
    
</template>

<script>
    export default {
        props:['tipo','nome','titulo','classe']
    }
</script>