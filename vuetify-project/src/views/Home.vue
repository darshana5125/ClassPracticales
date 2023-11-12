<template>
  <div>
    <center>
      <h1>Hello</h1>
      <v-btn @click="directPage()">Sumbit</v-btn>
    </center>
    <div>test</div>
  </div>
</template>

<script>
export default {
  methods: {
    directPage() {
      this.$router.push("/page1");
    },
  },
  beforeCreate() {
    console.log("before create");
  },
  created() {
    console.log("created");
  },
  beforeMount() {
    console.log("before mount");
  },
  mounted() {
    console.log("mounted");
  },
  beforeUpdate() {
    console.log("before update");
  },
  updated() {
    console.log("updated");
  },
};
</script>
