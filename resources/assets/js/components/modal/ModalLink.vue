<template>
    <span class="float-left">
        <button v-if="!tipo || (tipo!='button'&&tipo!='link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome"><slot></slot></button>
        <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome"><slot></slot></button>
        <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#'+nome"><slot></slot></a>
    </span>
</template>

<script>
export default {
  props: ['tipo', 'nome', 'css']
}
</script>
