<template>
    <admin>
        <span slot="body">
            <mdb-container fluid>
            <!--Section: Intro-->
                <div class="row">
                    <div class="col-md-4" v-for="organization in organizations" :key="organization.id">
                        <!--Section: Live preview-->
                        <section>

                            <!--Card-->
                            <mdb-card testimonial style="max-width: 22rem;">

                                <!--Bacground color-->
                                <div class="card-up">
                                </div>

                                <!--Avatar-->
                                <mdb-avatar class="mx-auto white"><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/organization-57-402095.png" class="rounded-circle img-fluid">
                                </mdb-avatar>

                                <mdb-card-body>
                                    <!--Name-->
                                    <h4 class="card-title dark-grey-text"><strong>{{organization.name}}</strong></h4>
                                    
                                    <!--Quotation-->
                                    <!-- <p class="card-text pt-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci Sed ut perspiciatis
                                        unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem
                                        aperiam. Facere modi sunt, quod quibusdam dignissimos neque rem nihil.</p> -->
                                </mdb-card-body>

                            </mdb-card>
                            <!--/.Card-->

                        </section>
                    </div>
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, mdbCard, mdbCardBody, mdbAvatar } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import formAddOrganization from '@/components/forms/addOrganization'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin,formAddOrganization, mdbCard, mdbCardBody, mdbAvatar
    },
    data(){
        return{
            organizations: ''
        }
    },
    mounted(){
        this.organizations = this.$store.getters.getOrganizations;
    }
}
</script>



<style scoped>

.card-up {
    background-color: #be3030 !important;
}


</style>
