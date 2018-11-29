<template>
    <admin>
        <span slot="body">
            <mdb-container fluid>
            <!--Section: Intro-->
                <div class="row">
                    
                        <div class="col-md-4">
                            <mdb-card cascade class="cascading-admin-card bg-black">

                                <!--Card Data-->
                                <div class="admin-up">
                                    <i class="fa fa-money danger-color"></i>
                                    <div class="data">
                                        <p>SALES</p>
                                        <h3 class="font-weight-bold dark-grey-text">4 571 $</h3>
                                    </div>
                                </div>
                                <!--/.Card Data-->

                                <!--Card content-->
                                <mdb-card-body cascade>
                                    <div class="progress mb-3">
                                        <div class="progress-bar success-color" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--Text-->
                                    <p class="card-text">Better than last week (25%)</p>
                                </mdb-card-body>
                                <!--/.Card content-->

                            </mdb-card>
                        </div>
                        <div class="col-md-4">
                            <mdb-card cascade class="cascading-admin-card">

                                <!--Card Data-->
                                <div class="admin-up">
                                    <i class="fa fa-money warning-color danger-color"></i>
                                    <div class="data">
                                        <p>COMPANYES</p>
                                        <h3 class="font-weight-bold dark-grey-text">1</h3>
                                    </div>
                                </div>
                                <!--/.Card Data-->

                                <!--Card content-->
                                <mdb-card-body cascade>
                                    <div class="progress mb-3">
                                        <div class="progress-bar success-color" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--Text-->
                                    <p class="card-text">Better than last week (25%)</p>
                                </mdb-card-body>
                                <!--/.Card content-->

                            </mdb-card>
                        </div>
                        <div class="col-md-4">
                            <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text danger-color">
                                Monthly sales
                            </div>

                            <h6 class="ml-4 pt-4 mt-1 dark-grey-text font-weight-bold"><i class="fa fa-long-arrow-up green-text mr-3" aria-hidden="true"></i> $ 2000</h6>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar success-color" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--Text-->
                                <p class="font-small grey-text">Better than last week (25%)</p>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Panel-->
                        </div>
                    
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, mdbCard, mdbCardBody } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import formAddOrganization from '@/components/forms/addOrganization'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin,formAddOrganization, mdbCard, mdbCardBody
    },
    mounted(){
        
    }
}
</script>

<style scoped>

.danger-color {
    background-color:#be3030 !important;
}


</style>

