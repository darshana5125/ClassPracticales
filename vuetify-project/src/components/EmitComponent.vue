<template>
  <div>
    <center>
      <v-btn color="blue" elevation="12" @click="emiting()">Emiting Data</v-btn>
    </center>
  </div>
</template>
<script>
export default {
    data(){
        return{
            emitedData:"Emited!",
        }

    },
    methods:{
        emiting(){
            this.$emit("emitingData",this.emitedData)
        }
    }
};
</script>
<style lang=""></style>
