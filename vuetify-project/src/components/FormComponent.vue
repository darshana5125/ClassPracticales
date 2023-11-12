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
              v-model="first_name"
            ></v-text-field>
            {{ first_name }}
          </v-col>
          <v-col cols="6">
            <v-text-field label="Last Name" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field label="Address 1" variant="outlined"></v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field label="Address 2" variant="outlined"></v-text-field>
          </v-col>
        </v-row>
      </form>
    </v-container>
  </v-card>
</template>

<script>
export default {
  data() {
    return {
      first_name: "Darshana",
    };
  },
};
</script>
