<template>
    <div class="fullscreen white-skin">
        <nav-bar-home></nav-bar-home>
        <form-login></form-login>

        <footer-home></footer-home>
    </div>
</template>

<script>
      import formLogin from '@/components/login/Login'
      import NavBarHome from '@/components/navs/NavBarHome'
      import FooterHome from '@/components/footers/FooterHome'
      export default {
        name: 'Login',
        components: {
          FooterHome ,NavBarHome, formLogin
      },
      data () {
          return {

          }
      }
}
</script>

<style scoped>

</style>
