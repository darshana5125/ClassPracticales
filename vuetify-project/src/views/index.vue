<template>
  <div>
    <!-- <FormComponent :FormData="propData"/> -->
    <!-- <FormComponent :FormData="propData"/> -->
    <FormComponent :FormData="propData"/>
    <ListComponent />
    <SliderComponent />
    <DialogComponent />
    <ConditionalExample />
  </div>
</template>

<script>
import DialogComponent from "@/components/DialogComponent.vue";
import FormComponent from "@/components/FormComponent.vue";
import SliderComponent from "@/components/SliderComponent.vue";
import ConditionalExample from "@/components/ConditionalExample.vue";
import Header from "@/components/Header.vue";
import ListComponent from "@/components/ListComponent.vue";
export default {
  data() {
    return{
        propData: "hedy"
    }

  },
  components: {
    FormComponent,
    ListComponent,
    SliderComponent,
    DialogComponent,
    ConditionalExample,
  },
};
</script>
