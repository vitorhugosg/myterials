<template>
    <md-mask overlay="stylish-strong" class="d-flex justify-content-center align-items-center py-5">
    <container>
        <row>
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
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
                  <div class="w-100" v-on:click="registerUser()" >
                    <btn gradient="purple">Register</btn>
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

import { Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand } from 'mdbvue'
export default {
    name: 'register',
    components: {
        Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand
    },
    data(){
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        errorValidation: ''
      }
    },
    methods:{
      registerUser(){
        this.errorValidation = '';
        let data = {};
        data.name = this.name;
        data.email = this.email;
        data.password = this.password;
        data.password_confirmation = this.password_confirmation;
        // if(this.validation()){
          this.$http.post(this.$urlAPI + 'auth/register',data).then(response =>{
              if(response.data.status){
                  sessionStorage.setItem('usuario', JSON.stringify(response.data.usuario));
                  this.$store.commit('setUsuario', response.data.usuario);
                  this.$router.push('/admin');
              }else if(response.data.status == false && response.data.validacao){
                  let erros = '';
                  for(let erro of Object.values(response.data.erros)){
                      if(erro != 'no' && erro != 'false'){
                          erros += " - "+ erro + " <br>".replace('<br>', "\n");
                      }
                  }
                  this.errorValidation = erros;
              }else{
                  this.errorValidation = 'Usuário não existe em nosso banco de dados';
              }
          }).catch(e => {
              console.log(e)
              this.errorValidation = 'Houve uma falha ao se conectar com servidor';
          });
        // }
        
      },
      validation(){
        if(this.password_confirmation != this.password){
          this.errorValidation = 'The passwords entered in the fields do not match';
          return false;
        }
        if(this.name == '' || this.email == '' || this.password == '' || this.password_confirmation == ''){
          this.errorValidation = 'Fields can not be empty';
          return false;
        }
        return true;
      }
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

