<template>
  <v-card title="Example Form" width="700 " elevation="6" class="">
    <v-container>
      <form>
        <v-row>
          <v-col cols="6">
            <v-text-field
              class="color-red"
              label="First Name"
              variant="outlined"
              v-model="FormData.first_name"
            ></v-text-field>
           
          </v-col>
          <v-col cols="6">
            <v-text-field
              label="Last Name"
              variant="outlined"
              v-model="FormData.last_name"
            ></v-text-field>
          </v-col>
          <v-col cols="6">
            <v-btn @click="emiting">Submit</v-btn>
          </v-col>
        </v-row>
      </form>
    </v-container>
  </v-card>
</template>

<script>
export default {
  props: {
    //FormData: String,
    FormData:Object,
  },
  //props: ["FormData"],
  data() {
    return {
      FormData: {},
      //first_name: "Darshana",
      // last_name: "Kodagoda",
      // address1: "",
      // address2: "",
    };
  },
  methods: {
    emiting(){
      this.$emit("emitingFormData",this.FormData)
    }
    // getData() {
    //   console.log(this.form);
    // console.log(this.last_name);
    // console.log(this.address1);
    // console.log(this.address2);
  },
  //},
  // mounted() {
  //   this.form.first_name = "Darshana";
  // },
  // updated() {
  //   this.form.first_name = "ABC";
  // },
};
</script>
