<template>
  <mdb-container fluid>

    <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Tooltips</strong></h2>

    <div class="row">
      <div class="col-md-12 col-xl-10 mx-auto">
        <div class="card p-5 mt-5">
          <div class="card-body justify-content-center">

            <mdb-tooltip trigger="hover" :options="{placement: 'top'}">
              <div class="tooltip">
                Tooltip on top
              </div>
              <mdb-btn slot="reference" color="primary">
                Tooltip on top
              </mdb-btn>
            </mdb-tooltip>
            <mdb-tooltip trigger="hover" :options="{placement: 'right'}">
              <div class="tooltip">
                Tooltip on right
              </div>
              <mdb-btn slot="reference" color="primary">
                Tooltip on right
              </mdb-btn>
            </mdb-tooltip>
            <mdb-tooltip trigger="hover" :options="{placement: 'bottom'}">
              <div class="tooltip">
                Tooltip on bottom
              </div>
              <mdb-btn slot="reference" color="primary">
                Tooltip on bottom
              </mdb-btn>
            </mdb-tooltip>
            <mdb-tooltip trigger="hover" :options="{placement: 'left'}">
              <div class="tooltip">
                Tooltip on left
              </div>
              <mdb-btn slot="reference" color="primary">
                Tooltip on left
              </mdb-btn>
            </mdb-tooltip>

          </div>
        </div>
      </div>
    </div>

    <!--Section: Docs link-->
    <section class="pb-4 pt-5 mt-5">

        <!--Panel-->
        <div class="card text-center">
            <h3 class="card-header primary-color white-text">Full documentation</h3>
            <div class="card-body">
                <p class="card-text">Read the full documentation for these components.</p>
                <a href="https://mdbootstrap.com/vue/advanced/tooltips/" target="_blank" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <!--/.Panel-->

    </section>
    <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbTooltip, mdbBtn } from 'mdbvue'

export default {
  name: 'Tooltips',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbTooltip,
    mdbBtn
  },
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
