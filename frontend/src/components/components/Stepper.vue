<template>
  <mdb-container fluid>

    <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Stepper</strong></h2>

    <!--Section: Horizontal stepper-->
    <section class="mb-5">

        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card image-->
            <div class="view view-cascade gradient-card-header blue-gradient">
                <h5 class="mb-0">Horizontal stepper</h5>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body card-body-cascade text-center table-responsive">

                <!-- Horizontal Steppers -->
                <div class="row">
                    <div class="col-md-12">

                      <mdb-stepper simpleH>
                        <li class="completed" slot="simple">
                          <a href="#!">
                            <span class="circle">1</span>
                            <span class="label">First step</span>
                          </a>
                        </li>
                        <li class="active" slot="simple">
                          <a href="#!">
                            <span class="circle">2</span>
                            <span class="label">Second step</span>
                          </a>
                        </li>
                        <li class="warning" slot="simple">
                          <a href="#!">
                            <span class="circle"><i class="fa fa-warning"></i></span>
                            <span class="label">Third step</span>
                          </a>
                        </li>
                      </mdb-stepper>

                    </div>
                </div>
                <!-- /.Horizontal Steppers -->

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </section>
    <!--Section: Horizontal stepper-->

    <!--Section: Horizontal stepper-->
    <section>

        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card image-->
            <div class="view view-cascade gradient-card-header peach-gradient">
                <h5 class="mb-0">Vertical stepper</h5>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body card-body-cascade">

                <!-- Vertical Steppers -->
                <div class="row mt-1">
                    <div class="col-md-12">

                      <mdb-stepper simpleV>
                        <li class="completed" slot="simple">
                          <a>
                            <span class="circle">1</span>
                            <span class="label">First step</span>
                          </a>
                        </li>
                        <li class="active" slot="simple">
                          <a>
                            <span class="circle">2</span>
                            <span class="label">Second step</span>
                          </a>
                            <div class="step-content grey lighten-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse cupiditate voluptate facere iusto quaerat vitae excepturi, accusantium ut aliquam repellat atque nesciunt nostrum similique. Inventore nostrum ut, nobis porro sapiente.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore error excepturi veniam nemo repellendus, distinctio soluta vitae at sit saepe. Optio eaque quia excepturi adipisci pariatur totam, atque odit fugiat.</p>
                              <p>Deserunt voluptatem illum quae nisi soluta eum perferendis nesciunt asperiores tempore saepe reiciendis, vero quod a dolor corporis natus qui magni quas fuga rem excepturi laboriosam. Quisquam expedita ab fugiat.</p>
                          </div>
                        </li>
                        <li class="warning" slot="simple">
                          <a>
                            <span class="circle"><i class="fa fa-warning"></i></span>
                            <span class="label">Third step</span>
                          </a>
                        </li>
                        <li slot="simple">
                          <a>
                            <span class="circle">4</span>
                            <span class="label">Fourth step</span>
                          </a>
                        </li>
                      </mdb-stepper>

                    </div>
                </div>

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </section>
    <!--Section: Horizontal stepper-->

    <!--Section: Docs link-->
    <section class="pb-4 pt-5 mt-5 pb-4">

        <!--Panel-->
        <div class="card text-center">
            <h3 class="card-header primary-color white-text">Full documentation</h3>
            <div class="card-body">
                <p class="card-text">Read the full documentation for these components.</p>
                <a href="https://mdbootstrap.com/vue/components/vue-bootstrap-steps-stepper/" target="_blank" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <!--/.Panel-->

    </section>
    <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbStepper } from 'mdbvue'

export default {
  name: 'Stepper',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbStepper
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
