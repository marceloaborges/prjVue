<template>
<div v-bind:id="nome" class="modal fade" tabindex="-1" v-bind:aria-labelledby="nome" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ titulo }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <slot></slot>
            </div>
        </div>
    </div>
</div>
    
</template>

<script>
    export default {
        props:['nome','titulo']
    }
</script>
