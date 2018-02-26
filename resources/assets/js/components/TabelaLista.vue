<template>
<div>
    <div class="form">
        <a v-if="criar && !modal" v-bind:href="criar">Cadastrar</a>
        <modal-link v-if="criar && modal" tipo="link" nome="adicionar" css="">Cadastrar</modal-link>
        <div class="form-group float-right">
            <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos" :key="titulo.id" >{{titulo}}</th>
                <th v-if="detalhe || editar || deletar">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in lista" :key="item.id" >
                <td v-for="i in item" :key="i.id" >{{i}}</td>
                
                <td v-if="detalhe || editar || deletar">
                    <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">

                        <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                        <a v-if="editar && !modal" v-bind:href="editar"> Editar |</a>
                        <modal-link v-if="editar && modal" tipo="link" nome="editar" css=""> Editar |</modal-link>
                        <a href="#" v-on:click="executaForm(index)"> Deletar</a>
                    </form>
                    <span v-if="!token">
                        <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                        <a v-if="editar && !modal" v-bind:href="editar"> Editar |</a>
                        <modal-link v-if="editar && modal" tipo="link" nome="editar" css=""> Editar |</modal-link>
                        <a v-if="deletar" v-bind:href="deletar"> Deletar</a>
                    </span>
                    <span v-if="token && !deletar">
                        <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                        <a v-if="editar && !modal" v-bind:href="editar"> Editar |</a>
                        <modal-link v-if="editar && modal" tipo="link" nome="editar" css=""> Editar |</modal-link>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
  
</template>

<script>
export default {
  props:['titulos', 'itens', 'ordem', 'ordemcol', 'criar', 'detalhe', 'editar', 'deletar', 'token', 'modal'],
  data: function(){
      return {
          buscar: '',
          ordemAux: this.ordem || "asc",
          ordemAuxCol: this.ordemCol || 0
      }
  },
  methods:{
      executaForm: function(index){
          document.getElementById(index).submit();
      },
      ordenaColuna: function(coluna){
          this.ordemAuxCol = coluna;
          if(this.ordemAux.toLowerCase() == "asc"){
              this.ordemAux = 'desc';
          }else{
              this.ordemAux = 'asc';
          }
      }
  },
  computed:{
      lista:function(){

          let ordem = this.ordemAux;
          let ordemCol = this.ordemAuxCol;
          ordem = ordem.toLowerCase();
          ordemCol = parseInt(ordemCol);

          if(ordem == "asc"){
              this.itens.sort(function(a,b){
                if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) { return 1; }
                if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) { return -1; }
                return 0;
              });
          }else{
              this.itens.sort(function(a,b){
                if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) { return 1; }
                if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) { return -1; }
                return 0;
              });
          }
          
          if(this.buscar){
            return this.itens.filter(res => {
                for(let k = 0; k < res.length; k++){
                    if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                        return true;
                    }
                }
                return false;
            });
            return this.itens;
          }
        
          return this.itens;
      }
  }
}
</script>
