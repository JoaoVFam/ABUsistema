<template>
   <div class="card card-default">
        <nav v-if:="lista" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li  v-for="item in lista" :key="item.id" class="breadcrumb-item"><a v-if="item.url" v-bind:class="defineClass" v-bind:href="item.url">{{item.titulo}}</a><span v-if="!item.url" >{{item.titulo}}</span></li>
            </ol>
        </nav>
        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['lista'],
        computed:{
            defineClass: function(){
                if(this.url){
                    return "active";
                }else{
                    return "";
                }
            }
        }
    }
</script>

<style media="screen">

    .card{
        border-color: #ddd;
    }
</style>