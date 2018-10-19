<template>
  <div class="classic-form-page ">
    <navbar navStyle="background-color: transparent;" position="top" dark transparent>
      <mdb-navbar-brand href="#"><strong>MDB</strong></mdb-navbar-brand>
      <navbar-collapse>
        <navbar-nav>
          <navbar-item href="#" waves-fixed active>Home</navbar-item>
          <navbar-item href="#" waves-fixed>Features</navbar-item>
          <navbar-item href="#" waves-fixed>Pricing</navbar-item>
        </navbar-nav>
        <!-- Search form -->
        <form>
          <mdb-input type="text" class="text-white" placeholder="Search" aria-label="Search" label navInput waves waves-fixed/>
        </form>
      </navbar-collapse>
    </navbar>

    <view-wrapper>
      <md-mask overlay="stylish-strong" class="d-flex justify-content-center align-items-center">
        <container>
          <row>
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
              <mdb-card id="classic-card">
                <mdb-card-body class="z-depth-2 white-text">
                  <div class="form-header purple-gradient">
                    <h3><i class="fa fa-user mt-2 mb-2"></i> Log in:</h3>
                  </div>
                  <mdb-input label="Your name" labelColor="white" icon="user"/>
                  <mdb-input label="Your email" labelColor="white" icon="envelope"/>
                  <mdb-input label="Your password" labelColor="white" icon="lock" type="password"/>
                  <div class="text-center mt-4 black-text">
                    <btn gradient="purple">Sign Up</btn>
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
    </view-wrapper>
  </div>
</template>

<script>
import { Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand } from 'mdbvue'

export default {
  name: 'Login',
  components: {
    Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand
  },
  data () {
    return {
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
