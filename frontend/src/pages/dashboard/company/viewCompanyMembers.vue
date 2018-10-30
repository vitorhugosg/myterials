<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts" class="mb-5">

                </side-bar-company>
                
            <!--Section: Intro-->
                <div class="row pt-5">
                    <div class="col-md-4 my-5" v-for="index in 4" :key="index">
                        <!--Section: Basic Info-->
                        <section class="card profile-card mb-4 text-center">
                            <div class="avatar z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" alt="" class="img-fluid">
                            </div>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title"><strong>John Doe</strong></h4>
                                <h5>Web designer at <a href="">Cargo</a></h5>
                                <p class="dark-grey-text">California, USA</p>

                                <!-- Social -->
                                <!-- <mdb-btn class="dark-grey-text" tag="a" dark-waves floating transparent><mdb-icon class="dark-grey-text" icon="facebook"/></mdb-btn>
                                <mdb-btn class="dark-grey-text" tag="a" dark-waves floating transparent><mdb-icon class="dark-grey-text" icon="twitter"/></mdb-btn>
                                <mdb-btn class="dark-grey-text" tag="a" dark-waves floating transparent><mdb-icon class="dark-grey-text" icon="linkedin"/></mdb-btn> -->

                                <!--Text-->
                                <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>

                                <mdb-btn color="info" rounded size="sm" icon="paper-plane" iconRight>View Member</mdb-btn>

                                

                            </div>

                        </section>
                        <!--/.Card-->
                    </div>
                    
                    
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
import formAddCompany from '@/components/forms/addCompany'
export default {
    name: 'Company Members',
    components:{
        mdbContainer, admin,formAddCompany, mdbCard, mdbCardBody,sideBarCompany,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon
    }
}
</script>
<style scoped>
.profile-card .avatar {
    max-width: 150px;
    max-height: 150px;
    margin: -70px auto 0;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    overflow: hidden;
}
</style>

