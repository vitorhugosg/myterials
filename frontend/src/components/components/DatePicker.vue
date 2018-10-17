<template>
  <mdb-container fluid>

      <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Date picker</strong></h2>

      <mdb-date-picker :date="startTime" :option="option"></mdb-date-picker>

      <!--Section: Docs link-->
      <section class="pb-4 pt-5 mt-5">

          <!--Panel-->
          <div class="card text-center">
              <h3 class="card-header primary-color white-text">Full documentation</h3>
              <div class="card-body">
                  <p class="card-text">Read the full documentation for these components.</p>
                  <a href="https://mdbootstrap.com/vue/advanced/datepicker/" target="_blank" class="btn btn-primary">Learn more</a>
              </div>
          </div>
          <!--/.Panel-->

      </section>
      <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbDatePicker } from 'mdbvue'

export default {
  name: 'DatePicker',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbDatePicker
  },
  data () {
    return {
      startTime: {
        time: ''
      },
      option: {
        type: 'day',
        week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
        month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        format: 'YYYY-MM-DD',
        placeholder: 'Please choose a date',
        inputStyle: {
          'display': 'inline-block',
          'padding': '6px',
          'line-height': '22px',
          'font-size': '16px',
          'border': '2px solid #fff',
          'box-shadow': '0 1px 3px 0 rgba(0, 0, 0, 0.2)',
          'border-radius': '2px',
          'color': '#5F5F5F'
        },
        color: {
          header: 'teal',
          headerText: 'white',
          checkedDay: 'teal'
        },
        buttons: {
          ok: 'Ok',
          cancel: 'Cancel'
        }
      },
      timeoption: {
        type: 'min',
        week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
        month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        format: 'YYYY-MM-DD HH:mm'
      }
    }
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
