<template>
  <div>
    <h1 class="text-center" v-if="!show">Hello</h1>
    <div v-for="array in array1" :key="array">
        {{ array }}
    </div>
  </div>
</template>

<script>
export default {
    data (){
        return {
            show: false,
            array1: ["data1","data2","data3"]
        }
    }
};
</script>
