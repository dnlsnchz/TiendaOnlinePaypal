<template>
  <button @click="addToCard" class="btn btn-primary" >{{ message }}</button>
</template>

<script>
export default {
  data(){
    return {
      message: 'Agregar al carrito',
      endpoint: '/in_shopping_carts'
    }
  },
  props:{
    product:{
      type:Object
    }
  },
  methods:{
    addToCard(){
      axios({
        method:'POST',
        url: this.endpoint,
        data:{
          product_id: this.product.id,
        },
        headers:{
          'Accept':'application/json',
          'content-type': 'application/json'
        }
      }).then(() => {
        window.store.commit("increment");
        console.log('Se Imprimio el producto');
      })
    }
  }
}
</script>
