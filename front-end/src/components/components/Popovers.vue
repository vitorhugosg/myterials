<template>
  <mdb-container fluid>

    <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Popovers</strong></h2>

    <div class="row">
      <div class="col-md-12 col-xl-10 mx-auto">
        <div class="card py-5 mt-5">
          <div class="card-body mx-auto">

            <mdb-popover trigger="click" :options="{placement: 'top'}">
              <div class="popover">
                <div class="popover-header">
                  popover on top
                </div>
                <div class="popover-body">
                  Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                </div>
              </div>
              <mdb-btn slot="reference">
                Popover on top
              </mdb-btn>
            </mdb-popover>
            <mdb-popover trigger="click" :options="{placement: 'right'}">
              <div class="popover">
                <div class="popover-header">
                  popover on right
                </div>
                <div class="popover-body">
                  Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                </div>
              </div>
              <mdb-btn slot="reference">
                Popover on right
              </mdb-btn>
            </mdb-popover>
            <mdb-popover trigger="click" :options="{placement: 'bottom'}">
              <div class="popover">
                <div class="popover-header">
                  popover on bottom
                </div>
                <div class="popover-body">
                  Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                </div>
              </div>
              <mdb-btn slot="reference">
                Popover on bottom
              </mdb-btn>
            </mdb-popover>
            <mdb-popover trigger="click" :options="{placement: 'left'}">
              <div class="popover">
                <div class="popover-header">
                  popover on left
                </div>
                <div class="popover-body">
                  Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                </div>
              </div>
              <mdb-btn slot="reference">
                Popover on left
              </mdb-btn>
            </mdb-popover>

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
                <a href="https://mdbootstrap.com/vue/advanced/popovers/" target="_blank" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <!--/.Panel-->

    </section>
    <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbBtn, mdbPopover } from 'mdbvue'

export default {
  name: 'Popovers',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbBtn,
    mdbPopover
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
