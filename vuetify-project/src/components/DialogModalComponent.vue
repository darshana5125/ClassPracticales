<template>
  <div>
    <v-card :title="title">
      <FormComponent :FormData="FormData" />
    </v-card>
  </div>
</template>

<script>
import FormComponent from "./FormComponent.vue";
export default {
  data() {},

  props: { title: String, FormData: Object },
  components: { FormComponent },
};
</script>
