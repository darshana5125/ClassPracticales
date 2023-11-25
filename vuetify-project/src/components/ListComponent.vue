<template>
  <v-card class="mx-auto" max-width="800">
    <v-row>
      <v-col cols="4" v-for="item in items" :key="item.first_name">
        <v-list-item
          :title="item.first_name + ' ' + item.last_name"
          :subtitle="item.gender"
        ></v-list-item>
        <v-btn
          color="blue"
          elevation="12"
          @click="openDialog(item.title, item.first_name, item.last_name)"
          >Send</v-btn
        >
      </v-col>
    </v-row>
  </v-card>
  <v-dialog width="800" v-model="dialog">
    <DialogModalComponent :title="title" :FormData="form"/>
  </v-dialog>
</template>
<script>
import DialogModalComponent from "./DialogModalComponent.vue";
export default {
  data() {
    return {
      items: [
        {
          title: "item1",
          first_name: "Darshana",
          last_name: "Kodagoda",
          gender: "male",
        },
        {
          title: "item2",
          first_name: "Magesh",
          last_name: "xxx",
          gender: "male",
        },
        {
          title: "item3",
          first_name: "Tom",
          last_name: "yyy",
          gender: "male",
        },
      ],
      dialog: false,
      title: "",
      form: {},
    };
  },
  components: {
    DialogModalComponent,
  },
  methods: {
    openDialog(title, first_name, last_name) {
      this.dialog = true;
      this.title = title;
      this.form.first_name = first_name;
      this.form.last_name = last_name;
    },
  },
};
</script>
<style></style>
