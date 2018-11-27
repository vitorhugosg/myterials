<template>
    <md-mask overlay="stylish-strong" class="d-flex justify-content-center align-items-center py-5">
      <container id="" >
          <row>
            
          <div class="col-md-6 p-3 pt-5">
              <mdb-card id="classic-card">
              <mdb-card-body class="z-depth-2 white-text">
                  <div class="form-header purple-gradient">
                  <h3><i class="fa fa-user mt-2 mb-2"></i> <b>MyTerials</b> Register:</h3>
                  </div>
                  <div>{{errorValidation}}</div>
                  <mdb-input v-model="name" label="Your name" labelColor="white" icon="user"/>
                  <mdb-input v-model="email" label="Your email" labelColor="white" icon="envelope"/>
                  <mdb-input v-model="password" label="Your password" labelColor="white" icon="lock" type="password"/>
                  <mdb-input v-model="password_confirmation" label="Repeat your password" labelColor="white" icon="lock" type="password"/>
                  <div class="text-center mt-4 black-text">
                    <div class="w-100" v-on:click="registerUser()"  v-if="!loader">
                      <btn gradient="purple">Register</btn>
                    </div>
                    <div class="w-100" v-if="loader">
                      <progress-wrapper>
                        <progress-bar :value="progressLoader" color="danger" animated></progress-bar>
                      </progress-wrapper>
                      {{response}}
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
          <div class="col-md-6">
            
          </div>
          </row>
      </container>
    </md-mask>  
    
</template>

<script>
import mixinxs from '@/store/modules/users/mixins'
import { Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand,ProgressBar ,ProgressWrapper } from 'mdbvue'
export default {
    name: 'register',
    mixins: [mixinxs],
    components: {
        Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand,ProgressBar ,ProgressWrapper
    },
    data(){
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        errorValidation: '',
        loader: false,
        progressLoader: 0,
        errorLoader: 'info'
      }
    },
    methods:{
      
    }
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
</style>

