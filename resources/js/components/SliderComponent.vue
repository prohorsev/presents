<template>
    <hooper :progress="true" :autoPlay="true" :playSpeed="8000" style="height: 420px; outline: none">
        <slide>
            <div class="congratulation__slide" style="background: url('/storage/images/present-1.jpg') no-repeat center center"></div>
        </slide>
        <slide>
            <div class="congratulation__slide" style="background: url('/storage/images/present-2.jpg') no-repeat center center"></div>
        </slide>
        <slide>
            <div class="congratulation__slide" style="background: url('/storage/images/present-3.jpg') no-repeat center center"></div>

        </slide>
    </hooper>

</template>

<script>
  import { Hooper, Slide,  Navigation as HooperNavigation } from 'hooper';
  import 'hooper/dist/hooper.css';
  export default {
    name: "SliderComponent",
    components: {
      Hooper,
      Slide,
      HooperNavigation
    },

  }
</script>

<style scoped>
    .hooper-prev, .hooper-next {
        outline: none!important;
    }
</style>
