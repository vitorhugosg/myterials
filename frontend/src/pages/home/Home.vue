<template>
  <div class="fullscreen white-skin">
        <nav-bar-home></nav-bar-home>

        <!-- Intro Section -->
        <section class="view intro-2">
            <div class="mask rgba-gradient">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-center content-height">
                        <div class="row flex-center pt-5 mt-3">
                            <div class="col-md-6 text-center text-md-left mb-5">
                                <div class="white-text">
                                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
                                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                    <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
                                        nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                                        dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                                    <br>
                                    <mdb-btn outline="white" rounded>Learn more</mdb-btn>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-5 offset-xl-1">
                                <!-- Form -->
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-body">
                                        <!-- Header -->
                                        <div class="text-center">
                                            <h3 class="white-text"><i class="fa fa-user white-text"></i> Register:</h3>
                                            <hr class="hr-light">
                                        </div>

                                        <!-- Body -->
                                        <div>{{errorValidation}}</div>
                                        <mdb-input v-model="name" label="Your name" labelColor="white" icon="user"/>
                                        <mdb-input v-model="email" label="Your email" labelColor="white" icon="envelope"/>
                                        <mdb-input v-model="password" label="Your password" labelColor="white" icon="lock" type="password"/>
                                        <mdb-input v-model="password_confirmation" label="Repeat your password" labelColor="white" icon="lock" type="password"/>

                                        <div class="text-center mt-4">
                                            <div class="w-100" v-on:click="registerUser()" >
                                                <btn gradient="purple">Register</btn>
                                            </div>
                                            <hr class="hr-light mb-3 mt-4">

                                            <div class="inline-ul text-center d-flex justify-content-center">
                                                <a class="p-2 m-2 fa-lg tw-ic"><i class="fa fa-twitter white-text"></i></a>
                                                <a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                                                <a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <!--Section: Features v.4-->
            <section class="section my-5wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="text-center my-5 h1">Why is it so great?</h1>
                <!--Section description-->
                <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4">

                        <!--Grid row-->
                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="fa fa-2x fa-flag-checkered indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="font-weight-bold my-4">International</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="fa fa-2x fa-flask blue-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="font-weight-bold my-4">Experimental</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="fa fa-2x fa-glass cyan-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="font-weight-bold my-4">Relaxing</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-2 text-center text-md-left flex-center">
                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png" alt="" class="z-depth-0">
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4">

                        <!--Grid row-->
                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="fa fa-2x fa-heart deep-purple-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="font-weight-bold my-4">Beloved</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="fa fa-2x fa-flash purple-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="font-weight-bold my-4">Rapid</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="fa fa-2x fa-magic pink-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="font-weight-bold my-4">Magical</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--/Section: Features v.4-->

            <hr class="mb-5">

            <!--Section: Testimonials v.3-->
            <section class="section team-section text-center my-5 wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="text-center my-5 h1">Testimonials</h1>
                <!--Section description-->
                <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Grid row-->
                <div class="row text-center">

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <div class="testimonial">
                            <!--Avatar-->
                            <div class="avatar mx-auto">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
                            </div>

                            <!--Content-->
                            <h4 class="font-weight-bold mt-4 mb-3">Anna Deynah</h4>
                            <h6 class="mb-3 font-weight-bold grey-text">Web Designer</h6>
                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>

                            <!--Review-->
                            <div class="orange-text">
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-half-full"> </i>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">
                        <div class="testimonial">
                            <!--Avatar-->
                            <div class="avatar mx-auto">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1 img-fluid">
                            </div>

                            <!--Content-->
                            <h4 class="font-weight-bold mt-4 mb-3">John Doe</h4>
                            <h6 class="mb-3 font-weight-bold grey-text">Web Developer</h6>
                            <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                            <!--Review-->
                            <div class="orange-text">
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">
                        <div class="testimonial">
                            <!--Avatar-->
                            <div class="avatar mx-auto">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
                            </div>
                            <!--Content-->
                            <h4 class="font-weight-bold mt-4 mb-3">Maria Kate</h4>
                            <h6 class="mb-3 font-weight-bold grey-text">Photographer</h6>
                            <p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                            <!--Review-->
                            <div class="orange-text">
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-o"> </i>
                            </div>

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Testimonials v.3-->

            <hr class="mb-5">

            <!--Section: Pricing v.3-->
            <section class="section my-5 wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="text-center my-5 h1">Our pricing plans</h1>
                <!--Section description-->
                <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card hoverable">

                            <!--Content-->
                            <div class="text-center">
                                <div class="card-body">
                                    <h5>Basic plan</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-circle d-flex justify-content-center align-items-center">
                                            <i class="fa fa-home light-blue-text"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class="font-weight-bold my-3">59$</h2>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis
                                        accusamus deleniti cumque hic laborum.</p>
                                    <a class="btn btn-light-blue btn-rounded">Buy now</a>
                                </div>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card purple-gradient hoverable">

                            <!--Content-->
                            <div class="text-center white-text">
                                <div class="card-body">
                                    <h5>Premium plan</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-circle d-flex justify-content-center align-items-center">
                                            <i class="fa fa-group white-text"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class="font-weight-bold my-3">79$</h2>
                                    <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non
                                        distinctio cupiditate sequi atque.</p>
                                    <a class="btn btn-outline-white btn-rounded">Buy now</a>
                                </div>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card hoverable">

                            <!--Content-->
                            <div class="text-center">
                                <div class="card-body">
                                    <h5>Advanced plan</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-circle d-flex justify-content-center align-items-center">
                                            <i class="fa fa-bar-chart light-blue-text"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class="font-weight-bold my-3">99$</h2>
                                    <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni accusantium
                                        repellat eveniet quia vitae.</p>
                                    <a class="btn btn-light-blue btn-rounded">Buy now</a>
                                </div>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Pricing v.3-->

            <hr class="mb-5">

            <!--Section: Contact v.2-->
            <section class="section my-5 wow fadeIn" data-wow-delay="0.3s">
                
                <!--Section heading-->
                <h2 class="text-center my-5 h1">Contact us</h2>
                <!--Section description-->
                <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                        <form>

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <mdb-input label="Your name"/>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <mdb-input label="Your email"/>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <mdb-input label="Subject"/>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <mdb-textarea label="Your message"/>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="text-center text-md-left my-4">
                            <mdb-btn color="light-blue" rounded>Send</mdb-btn>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons list-unstyled text-center">
                            <li><i class="fa fa-map-marker fa-2x"></i>
                                <p>San Francisco, CA 94126, USA</p>
                            </li>

                            <li><i class="fa fa-phone fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li><i class="fa fa-envelope fa-2x"></i>
                                <p>contact@mdbootstrap.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!--Section: Contact v.2-->

        </div>
        <footer-home></footer-home>

    

  </div>
</template>

<script>
import { mdbContainer, Row, Column, Navbar, NavbarItem, NavbarNav, NavbarCollapse, ViewWrapper, MdMask, mdbBtn, mdbCard, mdbCardBody, mdbInput, mdbNavbarBrand, mdbTextarea } from 'mdbvue'
import NavBarHome from '@/components/navs/NavBarHome'
import FooterHome from '@/components/footers/FooterHome'
export default {
  name: 'Home',
  components: {
    FooterHome ,NavBarHome, mdbContainer, Row, Column, Navbar, NavbarItem, NavbarNav, NavbarCollapse, ViewWrapper, MdMask, mdbBtn, mdbCard, mdbCardBody, mdbInput, mdbNavbarBrand, mdbTextarea
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
        alert();
        this.errorValidation = '';
        let data = {};
        data.name = this.name;
        data.email = this.email;
        data.password = this.password;
        data.password_confirmation = this.password_confirmation;
        if(this.validation()){
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
        }
        
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
.intro-2 {
    background: url("https://mdbootstrap.com/img/Photos/Others/img%20(42).jpg")no-repeat center center;
    background-size: cover;
    height: 100vh;
}



.rgba-gradient {
    background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
    background: linear-gradient(45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
}

.card {
    background-color: rgba(229, 228, 255, 0.2);
}
.navbar .container{

}
</style>
