<template>
  <mdb-container fluid>

    <!-- Section: Edit Account -->
    <section class="section">
        <!-- First row -->
        <div class="row">
            <!-- First column -->
            <div class="col-lg-4 mb-4">

                <!--Card-->
                <div class="card card-cascade narrower">

                    <!--Card image-->
                    <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                        <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                    </div>
                    <!--/Card image-->

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />

                        <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                        <div class="row flex-center">
                            <mdb-btn color="info" rounded size="sm">Upload New Photo</mdb-btn><br>
                            <mdb-btn color="danger" rounded size="sm">Delete</mdb-btn>
                        </div>
                    </div>
                    <!-- /.Card content -->

                </div>
                <!--/.Card-->

            </div>
            <!-- /.First column -->
            <!-- Second column -->
            <div class="col-lg-8 mb-4">

                <!--Card-->
                <div class="card card-cascade narrower">

                    <!--Card image-->
                    <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                        <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                    </div>
                    <!--/Card image-->

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Edit Form -->
                        <form>
                            <!--First row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-6">
                                    <mdb-input label="Company" placeholder="Company, inc" />
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <mdb-input label="Username" />
                                </div>
                            </div>
                            <!--/.First row-->
                            <!--First row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-6">
                                    <mdb-input label="First name" />
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <mdb-input label="Last name" />
                                </div>
                            </div>
                            <!--/.First row-->
                            <!--Second row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-6">
                                    <mdb-input label="Email address" />
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <mdb-input label="Website address" />
                                </div>
                            </div>
                            <!--/.Second row-->
                            <!--Third row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-12">
                                    <mdb-textarea label="About me" :rows="4" />
                                </div>
                            </div>
                            <!--/.Third row-->
                            <!-- Fourth row -->
                            <div class="row">
                                <div class="col-md-12 text-center my-4">
                                    <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                                </div>
                            </div>
                            <!-- /.Fourth row -->
                        </form>
                        <!-- Edit Form -->
                    </div>
                    <!-- /.Card content -->

                </div>
                <!--/.Card-->
            </div>
            <!-- /.Second column -->
        </div>
        <!-- /.First row -->
    </section>
    <!-- /.Section: Edit Account -->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardBody, mdbCardText, mdbSelect, mdbBtn, mdbIcon, mdbBadge, mdbView, mdbInput, mdbTextarea } from 'mdbvue'

export default {
  name: 'Basicv2',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbCard,
    mdbCardBody,
    mdbCardText,
    mdbSelect,
    mdbBtn,
    mdbIcon,
    mdbBadge,
    mdbView,
    mdbInput,
    mdbTextarea
  },
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.card.card-cascade .view.gradient-card-header {
    padding: 1.1rem 1rem;
}

.card.card-cascade .view {
    box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
}
</style>
