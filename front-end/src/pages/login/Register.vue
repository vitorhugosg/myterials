<template>
    <div class="fullscreen white-skin">
        <nav-bar-home></nav-bar-home>
        <form-register></form-register>
        
        <footer-home></footer-home>
    </div>
</template>

<script>
import formRegister from '@/components/login/Register'
import NavBarHome from '@/components/navs/NavBarHome'
import FooterHome from '@/components/footers/FooterHome'
export default {
  name: 'Register',
  components: {
    FooterHome ,NavBarHome, formRegister
  },
  data () {
    return {
    }
  }
}
</script>

<style scoped>

</style>
