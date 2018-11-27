<template >
  <md-mask overlay="stylish-strong" class="d-flex justify-content-center align-items-center py-5">
    <container>
      <row class="">
        <div class="col-md-6  pt-5 mt-5 ">
          <mdb-card id="classic-card">

            <mdb-card-body class="z-depth-2 white-text">
              <div class="form-header ">
                <h3>
                  <i class="fa fa-user mt-2 mb-2"></i> 
                  <b>Myterials</b> Log in:</h3>
              </div>

            <div class="form-erros">
                {{errorValidation}}
            </div>
            <mdb-input v-model="email" label="Your email" labelColor="white" icon="envelope"/>
            <mdb-input v-model="password" label="Your password" labelColor="white" icon="lock" type="password"/>
            <div class="text-center mt-4 black-text">
                <div class="w-100" v-on:click="login()" v-if="!loader">
                  <btn  class="button-myterials">Login</btn>
              </div>
              <div class="w-100" v-if="loader">
                  <progress-wrapper>
                    <progress-bar :value="progressLoader" color="danger" animated></progress-bar>
                </progress-wrapper>
            </div>

            <hr />
            <div class="text-center d-flex justify-content-center white-label">
              <a class="p-2 m-2">
                <fa icon="twitter" class="white-text"/>
            </a>
            <a class="p-2 m-2">
                <fa icon="linkedin" class="white-text"/>
            </a>
            <a class="p-2 m-2">
                <fa icon="instagram" class="white-text"/>
            </a>
        </div>
    </div>
</mdb-card-body>
</mdb-card>
</div>
</row>
</container>
</md-mask>

</template>

<script>
    import mixinsUsers from '@/store/modules/users/mixins.js'
    import { Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand,ProgressBar,ProgressWrapper  } from 'mdbvue'

    export default {
    name: 'login',
    mixins: [mixinsUsers],
    components: {
      Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand,ProgressBar ,ProgressWrapper
    },
    data(){
      return {
            errorValidation: '',
            email: '',
            password: '',
            loader: false,
            progressLoader: 0,
            errorLoader: false
        }
    },

}
</script>
<style scoped>
.classic-form-page {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 10000;
  height: 100vh;
  width: 100%;
}

.classic-form-page .view {
  background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img%20(11).jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100vh;
}

.card {
  background-color: rgba(229, 228, 255, 0.2);
  
}

.classic-form-page h6 {
  line-height: 1.7;
}

.classic-form-page .navbar {
  transition: background .5s ease-in-out,padding .5s ease-in-out;
}

.classic-form-page .navbar .md-form {
  margin: 0;
}

.top-nav-collapse {
  background: #424f95 !important;
}

@media (max-width: 768px) {
  .classic-form-page .navbar:not(.top-nav-collapse) {
    background: #424f95 !important;
}
}

.classic-form-page label {
  color: #fff!important;
}

.button-myterials {
    background: #D02B2C !important;
    letter-spacing: .1em;
    color:#fff !important;
}
.form-header {
  background-color:#D02B2C ; 
}


</style>

