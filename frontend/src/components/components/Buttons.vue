<template>
  <mdb-container fluid>

    <h2 class="font-weight-bold mt-lg-5 mb-5 pb-4"><strong>Buttons</strong></h2>

    <!--Section: Basic buttons-->
    <section class="mb-5 pb-4">
        <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Basic buttons</strong></h4>

        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <mdb-btn color="primary">Primary</mdb-btn>
        <!-- Default button -->
        <mdb-btn>Default</mdb-btn>
        <!-- Secondary button -->
        <mdb-btn color="secondary">Secondary</mdb-btn>
        <!-- Indicates a successful or positive action -->
        <mdb-btn color="success">Success</mdb-btn>
        <!-- Contextual button for informational alert messages -->
        <mdb-btn color="info">Info</mdb-btn>
        <!-- Indicates caution should be taken with this action -->
        <mdb-btn color="warning">Warning</mdb-btn>
        <!-- Indicates a dangerous or potentially negative action -->
        <mdb-btn color="danger">Danger</mdb-btn>

    </section>
    <!--Section: Basic buttons-->

    <!--Section: Outline buttons-->
    <section class="mb-5 pb-4">
        <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Outline buttons</strong></h4>

        <mdb-btn outline="primary" dark-waves>Primary</mdb-btn>
        <mdb-btn outline="default" dark-waves>Default</mdb-btn>
        <mdb-btn outline="secondary" dark-waves>Secondary</mdb-btn>
        <mdb-btn outline="success" dark-waves>Success</mdb-btn>
        <mdb-btn outline="info" dark-waves>Info</mdb-btn>
        <mdb-btn outline="warning" dark-waves>Warning</mdb-btn>
        <mdb-btn outline="danger" dark-waves>Danger</mdb-btn>

    </section>
    <!--Section: Outline buttons-->

    <!--Section: Additional buttons-->
    <section class="mb-5 pb-4">
        <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Additional buttons</strong></h4>

        <!--Elegant-->
        <mdb-btn color="elegant">Elegant</mdb-btn>
        <!--Unique-->
        <mdb-btn color="unique">Unique</mdb-btn>
        <!--Pink-->
        <mdb-btn color="pink">Pink</mdb-btn>
        <!--Purple-->
        <mdb-btn color="purple">Purple</mdb-btn>
        <!--Deep-purple-->
        <mdb-btn color="deep-purple">Deep-purple</mdb-btn>
        <!--Indigo-->
        <mdb-btn color="indigo">Indigo</mdb-btn>
        <!--Light blue-->
        <mdb-btn color="light-blue">Light blue</mdb-btn>
        <!--Cyan-->
        <mdb-btn color="cyan">Cyan</mdb-btn>
        <p></p>
        <!--Dark-green-->
        <mdb-btn color="dark-green">Dark-green</mdb-btn>
        <!--Light-green-->
        <mdb-btn color="light-green">Light-green</mdb-btn>
        <!--Yellow-->
        <mdb-btn color="yellow">Yellow</mdb-btn>
        <!--Amber-->
        <mdb-btn color="amber">Amber</mdb-btn>
        <!--Deep-orange-->
        <mdb-btn color="deep-orange">Deep-orange</mdb-btn>
        <!--Brown-->
        <mdb-btn color="brown">Brown</mdb-btn>
        <!--Blue-grey-->
        <mdb-btn color="blue-grey">Blue-grey</mdb-btn>
        <!--MDB-->
        <mdb-btn color="mdb-color">MDB</mdb-btn>

    </section>
    <!--Section: Additional buttons-->

    <!--Section: Gradient buttons-->
    <section class="">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Gradient buttons</strong></h4>

                <mdb-btn gradient="peach" rounded>Peach</mdb-btn>
                <mdb-btn gradient="purple" rounded>Purple</mdb-btn>
                <mdb-btn gradient="blue" rounded>Blue</mdb-btn>
                <mdb-btn gradient="aqua" rounded>Aqua</mdb-btn>

            </div>
        </div>

    </section>
    <!--Section: Gradient buttons-->

    <!--Section: Style and size-->
    <section class="">
        <div class="row">
            <div class="col-md-6 col-xl-5 mb-5 pb-4">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Style</strong></h4>

                <mdb-btn color="secondary">Default</mdb-btn>
                <mdb-btn color="secondary" rounded>Round</mdb-btn>
                <mdb-btn color="secondary" rounded><i class="fa fa-heart mr-2"></i> With icon</mdb-btn>
                <mdb-btn tag="a" color="secondary" floating icon="leaf" iconLeft></mdb-btn>

            </div>

            <div class="col-md-6 col-xl-5 mb-5 pb-4">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Sizes</strong></h4>

                <mdb-btn color="primary" size="lg">Large button</mdb-btn>
                <mdb-btn color="primary">Regular button</mdb-btn>
                <mdb-btn color="primary" size="sm">Small button</mdb-btn>

            </div>
        </div>

    </section>
    <!--Section: Style and size-->

    <!--Section: Social buttons-->
    <section class="">
        <div class="row">
            <div class="col-md-3 mb-5 pb-4">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Regular</strong></h4>

                <!--Facebook-->
                <mdb-btn color="fb" icon="facebook" iconLeft> Facebook</mdb-btn>
                <!--Twitter-->
                <mdb-btn color="tw" icon="twitter" iconLeft> Twitter</mdb-btn>
                <!--Google +-->
                <mdb-btn color="gplus" icon="google" iconLeft> Google +</mdb-btn>
                <!--Linkedin-->
                <mdb-btn color="li" icon="linkedin" iconLeft> Linkedin</mdb-btn>
                <!--Instagram-->
                <mdb-btn color="ins" icon="instagram" iconLeft> Instagram</mdb-btn>
                <!--Pinterest-->
                <mdb-btn color="pin" icon="pinterest" iconLeft> Pinterest</mdb-btn>
                <!--Youtube-->
                <mdb-btn color="yt" icon="youtube" iconLeft> Youtube</mdb-btn>
                <!--Dribbble-->
                <mdb-btn color="dribbble" icon="dribbble" iconLeft> Dribbble</mdb-btn>
                <!--Vkontakte-->
                <mdb-btn color="vk" icon="vk" iconLeft> Vkontakte</mdb-btn>
                <!--Stack Overflow-->
                <mdb-btn color="so" icon="stack-overflow" iconLeft> Stack Overflow</mdb-btn>
                <!--Slack-->
                <mdb-btn color="slack" icon="slack" iconLeft> Slack</mdb-btn>
                <!--Comments-->
                <mdb-btn color="comm" icon="comments" iconLeft> Comments</mdb-btn>
                <!--Github-->
                <mdb-btn color="git" icon="github" iconLeft> Github</mdb-btn>
                <!--Email-->
                <mdb-btn color="email" icon="envelope" iconLeft> Email</mdb-btn>

            </div>

            <div class="col-md-2 mb-5 pb-4">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Simple</strong></h4>

                <!--Facebook-->
                <mdb-btn color="fb" icon="facebook" iconLeft></mdb-btn>
                <!--Twitter-->
                <mdb-btn color="tw" icon="twitter" iconLeft></mdb-btn>
                <!--Google +-->
                <mdb-btn color="gplus" icon="google" iconLeft></mdb-btn>
                <!--Linkedin-->
                <mdb-btn color="li" icon="linkedin" iconLeft></mdb-btn>
                <!--Instagram-->
                <mdb-btn color="ins" icon="instagram" iconLeft></mdb-btn>
                <!--Pinterest-->
                <mdb-btn color="pin" icon="pinterest" iconLeft></mdb-btn>
                <!--Youtube-->
                <mdb-btn color="yt" icon="youtube" iconLeft></mdb-btn>
                <!--Dribbble-->
                <mdb-btn color="dribbble" icon="dribbble" iconLeft></mdb-btn>
                <!--Vkontakte-->
                <mdb-btn color="vk" icon="vk" iconLeft></mdb-btn>
                <!--Stack Overflow-->
                <mdb-btn color="so" icon="stack-overflow" iconLeft></mdb-btn>
                <!--Slack-->
                <mdb-btn color="slack" icon="slack" iconLeft></mdb-btn>
                <!--Comments-->
                <mdb-btn color="comm" icon="comments" iconLeft></mdb-btn>
                <!--Github-->
                <mdb-btn color="git" icon="github" iconLeft></mdb-btn>
                <!--Email-->
                <mdb-btn color="email" icon="envelope" iconLeft></mdb-btn>

            </div>

            <div class="col-md-4 mb-5 pb-4">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>With counters</strong></h4>

                <!--Facebook-->
                <mdb-btn color="fb" icon="facebook" iconLeft><span>Facebook</span></mdb-btn>
                <span class="counter">22</span>

                <!--Twitter-->
                <mdb-btn color="tw" icon="twitter" iconLeft><span>Twitter</span></mdb-btn>
                <span class="counter">22</span>

                <!--Google +-->
                <mdb-btn color="gplus" icon="google-plus" iconLeft><span>Google+</span></mdb-btn>
                <span class="counter">22</span>

                <!--Linkedin-->
                <mdb-btn color="li" icon="linkedin" iconLeft><span>Linkedin</span></mdb-btn>
                <span class="counter">22</span>

                <!--Instagram-->
                <mdb-btn color="ins" icon="instagram" iconLeft><span>Instagram</span></mdb-btn>
                <span class="counter">22</span>

                <!--Pinterest-->
                <mdb-btn color="pin" icon="pinterest" iconLeft><span>Pinterest</span></mdb-btn>
                <span class="counter">22</span>

                <!--Youtube-->
                <mdb-btn color="yt" icon="youtube" iconLeft><span>Youtube</span></mdb-btn>
                <span class="counter">22</span>

                <!--Dribbble-->
                <mdb-btn color="dribbble" icon="dribbble" iconLeft><span>Dribbble</span></mdb-btn>
                <span class="counter">22</span>

                <!--Vkontakte-->
                <mdb-btn color="vk" icon="vk" iconLeft><span>Vkontakte</span></mdb-btn>
                <span class="counter">22</span>

                <!--Stack Overflow-->
                <mdb-btn color="so" icon="stack-overflow" iconLeft><span>Stack Overflow</span></mdb-btn>
                <span class="counter">22</span>

                <!--Slack-->
                <mdb-btn color="slack" icon="slack" iconLeft><span>Slack</span></mdb-btn>
                <span class="counter">22</span>

                <!--Comments-->
                <mdb-btn color="comm" icon="comments" iconLeft><span>Comments</span></mdb-btn>
                <span class="counter">22</span>

                <!--Github-->
                <mdb-btn color="git" icon="github" iconLeft><span>Github</span></mdb-btn>
                <span class="counter">22</span>

                <!--Emails-->
                <mdb-btn color="email" icon="envelope" iconLeft><span>Emails</span></mdb-btn>
                <span class="counter">22</span>

            </div>

            <div class="col-md-3 mb-5 pb-4">
                <h4 class="mb-4 dark-grey-text font-weight-bold"><strong>Round</strong></h4>

                <!--Facebook-->
                <mdb-btn floating color="fb" iconLeft icon="facebook"></mdb-btn>
                <!--Twitter-->
                <mdb-btn floating color="tw" iconLeft icon="twitter"></mdb-btn>
                <!--Google +-->
                <mdb-btn floating color="gplus" iconLeft icon="google-plus"></mdb-btn>
                <!--Linkedin-->
                <mdb-btn floating color="li" iconLeft icon="linkedin"></mdb-btn>
                <!--Instagram-->
                <mdb-btn floating color="ins" iconLeft icon="instagram"></mdb-btn>
                <!--Pinterest-->
                <mdb-btn floating color="pin" iconLeft icon="pinterest"></mdb-btn>
                <!--Youtube-->
                <mdb-btn floating color="yt" iconLeft icon="youtube"></mdb-btn>
                <!--Dribbble-->
                <mdb-btn floating color="dribbble" iconLeft icon="dribbble"></mdb-btn>
                <!--Vkontakte-->
                <mdb-btn floating color="vk" iconLeft icon="vk"></mdb-btn>
                <!--Stack Overflow-->
                <mdb-btn floating color="so" iconLeft icon="stack-overflow"></mdb-btn>
                <!--Slack-->
                <mdb-btn floating color="slack" iconLeft icon="slack"></mdb-btn>
                <!--Github-->
                <mdb-btn floating color="git" iconLeft icon="github"></mdb-btn>
                <!--Comments-->
                <mdb-btn floating color="comm" iconLeft icon="comments"></mdb-btn>
                <!--Email-->
                <mdb-btn floating color="email" iconLeft icon="envelope"></mdb-btn>

            </div>

        </div>

    </section>
    <!--Section: social buttons-->

    <!--Section: Docs link-->
    <section class="pb-4">

        <!--Panel-->
        <div class="card text-center">
            <h3 class="card-header primary-color white-text">Full documentation</h3>
            <div class="card-body">
                <p class="card-text">Read the full documentation for these components.</p>
                <a href="https://mdbootstrap.com/vue/components/buttons/" target="_blank" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <!--/.Panel-->

    </section>
    <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbBtn } from 'mdbvue'

export default {
  name: 'Buttons',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbBtn
  },
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
