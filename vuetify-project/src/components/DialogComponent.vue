<template>
  <div class="d-flex justify-content-center">
    <v-btn> {{ opnemodal }} </v-btn>
  </div>
  <v-dialog width="500">
    <DialogModalComponent />
  </v-dialog>
</template>

<script>
import DialogModalComponent from "@/components/DialogModalComponent.vue";
export default {
  data() {
    return {
      opnemodal: "Open Modal",
      data1: "hey",
      data2: {},
      data3: [],
    };
  },
  methods: {
    openModal() {},
  },
  components: {
    DialogModalComponent,
  },
};
</script>
