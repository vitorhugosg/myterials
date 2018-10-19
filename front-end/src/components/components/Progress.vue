<template>
  <mdb-container fluid>

    <section>

        <div class="row">
            <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Progress bars</strong></h2>
        </div>

        <div class="row">

            <h5 class="mb-3 dark-grey-text font-weight-bold">Basic examples</h5>

            <mdb-progress-wrapper class="md-progress">
              <mdb-progress :value="0"></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress :value="25"></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress :value="50"></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress :value="75"></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress :value="100"></mdb-progress>
            </mdb-progress-wrapper>
        </div>

        <div class="row">
            <h5 class="mt-5 mb-3 pt-4 dark-grey-text font-weight-bold">Contextual alternatives</h5>

            <mdb-progress-wrapper class="md-progress">
              <mdb-progress color="success" :value="25"></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress color="info" :value="50"></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress color="warning" :value="75" striped animated></mdb-progress>
            </mdb-progress-wrapper>
            <mdb-progress-wrapper class="md-progress">
              <mdb-progress color="danger" :value="100" striped></mdb-progress>
            </mdb-progress-wrapper>
        </div>

        <div class="row">
            <h5 class="mt-5 mb-3 pt-4 dark-grey-text font-weight-bold">Infinite loading</h5>

            <mdb-progress-wrapper class="md-progress" color="primary-color-dark">
                <mdb-progress indeterminate />
            </mdb-progress-wrapper>
        </div>

        <div class="row mb-5">
            <h5 class="mt-5 mb-3 pt-4 dark-grey-text font-weight-bold">Circles</h5>
        </div>

        <div class="row mb-5">
            <div class="col-md-4">

                <!--Big blue-->
                <mdb-spinner big />

            </div>

            <div class="col-md-4">

                <!--Medium red-->
                <mdb-spinner color="red" />

            </div>

            <div class="col-md-4">

                <!--Small yellow-->
                <mdb-spinner small color="yellow" />

            </div>

        </div>

        <div class="row mb-5">

            <div class="col-md-4">

                <!--Big blue-->
                <mdb-spinner big crazy />

                <!--Medium red-->
                <mdb-spinner color="red" crazy />

                <!--Small yellow-->
                <mdb-spinner small color="yellow" crazy />

            </div>

            <div class="col-md-4">

                <mdb-spinner multicolor big />

            </div>

            <div class="col-md-4">

                <mdb-spinner multicolor small />

            </div>

        </div>

</section>

<!--Section: Docs link-->
<section class="pb-4">

    <!--Panel-->
    <div class="card text-center">
        <h3 class="card-header primary-color white-text">Full documentation</h3>
        <div class="card-body">
            <p class="card-text">Read the full documentation for these components.</p>
            <a href="https://mdbootstrap.com/vue/components/progresss/" target="_blank" class="btn btn-primary">Learn more</a>
        </div>
    </div>
    <!--/.Panel-->

</section>
<!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbProgressWrapper, mdbProgress, mdbSpinner } from 'mdbvue'

export default {
  name: 'Progress',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbProgressWrapper,
    mdbProgress,
    mdbSpinner
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
