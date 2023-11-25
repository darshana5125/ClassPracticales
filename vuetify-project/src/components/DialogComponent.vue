<template>
  <div class="d-flex justify-content-center">
    <v-btn @click="openModal()"> {{ opnemodal }} </v-btn>
  </div>
  <v-dialog width="500" v-model="dialog" >
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
      dialog: false,
    };
  },
  methods: {
    openModal() {
      this.dialog = true;
    },
  },
  components: {
    DialogModalComponent,
  },
};
</script>
