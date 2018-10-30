<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts">

                </side-bar-company>
                
            <!--Section: Intro-->
                <div class="row">
                    <div class="col-md-3 my-3" v-for="index in 10" :key="index">
                        <section>
                            <!--Card-->
                            <mdb-card>
                            <!--Card image-->
                            <mdb-view>
                                <mdb-card-image top src="https://mdbootstrap.com/img/Photos/Others/food.jpg" class="card-img-top" alt="sample"/>
                                <mdb-mask overlay="white-slight"></mdb-mask>
                            </mdb-view>
                            <!--/.Card image-->
                            <!--Button-->
                            <mdb-btn floating action class="ml-auto mr-4 mdb-color lighten-3" icon="chevron-right" iconLeft></mdb-btn>
                            <!--Card content-->
                            <mdb-card-body>
                                <!--Title-->
                                <h4 class="card-title">Card title</h4>
                                <hr>
                                <!--Text-->
                                <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </mdb-card-body>
                            <!--/.Card content-->
                            <!-- Card footer -->
                            <div class="mdb-color lighten-3 text-center rounded-bottom">
                                <ul class="list-unstyled list-inline font-small mt-3">
                                <li class="list-inline-item pr-2 white-text"><i class="fa fa-clock-o pr-1"></i>05/10/2015</li>
                                <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-comments-o pr-1"></i>12</a></li>
                                <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-facebook pr-1"> </i>21</a></li>
                                <li class="list-inline-item"><a href="#" class="white-text"><i class="fa fa-twitter pr-1"> </i>5</a></li>
                                </ul>
                            </div>
                            <!-- Card footer -->
                            </mdb-card>
                            <!--/.Card-->

                        </section>
                        <!--/.Card-->
                    </div>
                    
                    
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
import formAddCompany from '@/components/forms/addCompany'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin,formAddCompany, mdbCard, mdbCardBody,sideBarCompany,mdbView,mdbMask,mdbCardImage,mdbBtn
    },
    data(){
        return{
            states: [
                "Alabama",
                "Alaska",
                "Arizona",
                "Arkansas",
                "California",
                "Colorado",
                "Connecticut",
                "Delaware",
                "Florida",
                "Georgia",
                "Hawaii",
                "Idaho",
                "Illnois",
                "Indiana",
                "Iowa",
                "Kansas",
                "Kentucky",
                "Louisiana",
                "Maine",
                "Maryland",
                "Massachusetts",
                "Michigan",
                "Minnesota",
                "Mississippi",
                "Missouri",
                "Montana",
                "Nebraska",
                "Nevada",
                "New Hampshire",
                "New Jersey",
                "New Mexico",
                "New York",
                "North Carolina",
                "North Dakota",
                "Ohio",
                "Oklahoma",
                "Oregon",
                "Pennsylvania",
                "Rhode Island",
                "South Carolina",
                "South Dakota",
                "Tennessee",
                "Texas",
                "Utah",
                "Vermont",
                "Virginia",
                "Washington",
                "West Virginia",
                "Wisconsin",
                "Wyoming"
            ]
        }
    }
}
</script>
<style scoped>

</style>

