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
    <center><v-btn @click="postData">Post Data </v-btn></center>
    <center>
      <v-btn @click="check">{{ changeButtonData }} </v-btn>
      <center>
        <span color="red">{{ getAgoTime }}</span>
      </center>
    </center>
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
import moment from "moment";
export default {
  data() {
    return {
      today: new Date("Sun Nov 26 2023 17:17:27"),
      btnName: "",
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
  async created() {
    await this.fetchApiData();
  },

  computed: {
    changeButtonData() {
      return this.btnName.split("").reverse().join();
    },
    getAgoTime() {
      return moment(this.today).fromNow();
    },
  },
  mounted() {
    setInterval(() => {
      this.today = new Date("Sun Nov 26 2023 17:17:27");
    },1000);
  },
  methods: {
    getEmitData(data) {
      this.emiteddata = data;
    },
    getEmitFormData(data) {
      this.emitform = data;
      console.log(this.emitform);
    },
    async fetchApiData() {
      const res = await axios.get("https://reqres.in/api/users");
      console.log(res.data);
    },
    async postData() {
      const response = await axios.post(
        "https://reqres.in/api/users",
        this.emitform
      );
    },
    check() {
      this.btnName = "Computed";
    },
  },
};
</script>
