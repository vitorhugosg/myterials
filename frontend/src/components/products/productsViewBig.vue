<template>
    
    <section>
        <!--Card-->
        <mdb-card>
            <!--Card image-->
            <mdb-view>
                <mdb-card-image v-if="state.images.length > 0 && i == 0" top v-for="(image, i) in state.images" :key="image.id"  :src="$urlBaseAssets + image.path" class="card-img-top" alt="sample"/>
                <mdb-mask overlay="white-slight"></mdb-mask>
            </mdb-view>
            <!--/.Card image-->
            <!--Button-->
            <mdb-btn floating action class="ml-auto mr-4 mdb-color lighten-3" icon="chevron-right" iconLeft></mdb-btn>
            <!--Card content-->
            <mdb-card-body>
                <!--Title-->
                <h4 class="card-title">{{state.name}}</h4>
                <hr>
                <!--Text-->
                <p class="card-text mb-0">{{state.position}}</p>
            </mdb-card-body>
            <!--/.Card content-->
            <!-- Card footer -->
            <div class="mdb-color lighten-3 text-center rounded-bottom">
                <ul class="list-unstyled list-inline font-small mt-3">
                <li class="list-inline-item pr-2 white-text"><i class="fa fa-clock-o pr-1"></i>{{state.date}}</li>
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
       
</template>
<script>
import { mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn} from 'mdbvue'
export default {
    name: 'productsViewBig',
    props:[
        'state'
    ],
    components:{
        mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn
    },
    mounted(){
        console.log(this.state);
    }
}
</script>
<style scoped>


.mdb-color.lighten-3 {
    background-color: #be3030 !important;
}

</style>

