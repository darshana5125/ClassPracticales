<template>
  <div>
    <!-- <FormComponent :FormData="propData"/> -->
    <!-- <FormComponent :FormData="propData"/> -->
    <FormComponent :FormData="propData" @emitingFormData="getEmitFormData" />
    {{ emitform.first_name }}
    {{ emitform.last_name }}
    <ListComponent />
    <SliderComponent />
    <DialogComponent />
    <ConditionalExample />
    <EmitComponent @emitingData="getEmitData" />
    <center>{{ emiteddata }}</center>
  </div>
</template>

<script>
import DialogComponent from "@/components/DialogComponent.vue";
import FormComponent from "@/components/FormComponent.vue";
import SliderComponent from "@/components/SliderComponent.vue";
import ConditionalExample from "@/components/ConditionalExample.vue";
import Header from "@/components/Header.vue";
import ListComponent from "@/components/ListComponent.vue";
import EmitComponent from "@/components/EmitComponent.vue";
import axios from "axios";
export default {
  data() {
    return {
      propData: "hedy",
      emiteddata: "await for emit",
      emitform: {},
    };
  },
  components: {
    FormComponent,
    ListComponent,
    SliderComponent,
    DialogComponent,
    ConditionalExample,
    EmitComponent,
  },
 async created(){
    await this.fetchApiData();
  },

  methods: {
    getEmitData(data) {
      this.emiteddata = data;
    },
    getEmitFormData(data) {
      this.emitform = data;
      console.log(this.emitform)
    },
   async fetchApiData(){
      const res= await axios.get("https://reqres.in/api/users")
      console.log(res.data)
    }
  },
};
</script>
