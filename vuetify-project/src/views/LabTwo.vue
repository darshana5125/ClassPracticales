<template>
  <v-container>
    <v-row>
      <v-col cols="4">
        <v-img
          :width="300"
          cover
          src="../assets/images/NW_Breaking waves_Darshana Kodagoda.jpg"
        ></v-img>
      </v-col>
      <v-col cols="4">
        <v-img
          :width="300"
          cover
          src="../assets/images/NW_Flying high_Darshana Kodagoda.jpg"
        ></v-img>
      </v-col>
      <v-col cols="4">
        <v-img
          :width="300"
          cover
          src="../assets/images/NW_In among the greens_Darshana Kodagoda.jpg"
        ></v-img>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  methods: {},
  beforeCreate() {
    console.log("creating");
  },
  created() {
    console.log("created");
  },
  beforeMount() {
    console.log("loading");
  },
  mounted() {
    console.log("loaded");
  },
};
</script>
