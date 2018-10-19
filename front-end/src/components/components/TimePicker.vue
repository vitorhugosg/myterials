<template>
  <mdb-container fluid>

      <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Time picker</strong></h2>

      <mdb-time-picker color="blue" v-model="picker"></mdb-time-picker>

      <!--Section: Docs link-->
      <section class="pb-4 pt-5 mt-5">

          <!--Panel-->
          <div class="card text-center">
              <h3 class="card-header primary-color white-text">Full documentation</h3>
              <div class="card-body">
                  <p class="card-text">Read the full documentation for these components.</p>
                  <a href="https://mdbootstrap.com/vue/advanced/timepicker/" target="_blank" class="btn btn-primary">Learn more</a>
              </div>
          </div>
          <!--/.Panel-->

      </section>
      <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbTimePicker } from 'mdbvue'

export default {
  name: 'TimePicker',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbTimePicker
  },
  data () {
    return {
      picker: null
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.time-picker-clock {
  width: 230px !important;
  height: 230px !important;
}
</style>
