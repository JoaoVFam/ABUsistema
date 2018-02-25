<template>
   <div class="card card-default">
        <div class="card-header">{{titulo}}</div>
        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo']
    }
</script>

<style media="screen">

    .card{
        border-color: #ddd;
    }

    .card-header{
        background-color: #ddd
    }

</style>