<template>
  <mdb-footer>
    <p class="footer-copyright mb-0 py-3 text-center">
      &copy; {{new Date().getFullYear()}} Copyright: <a href="https://www.MDBootstrap.com">Myterials</a>
    </p>
  </mdb-footer>
</template>

<script>
import { mdbFooter } from 'mdbvue'

export default {
  name: 'Footer',
  components: {
    mdbFooter
  },
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.footer-copyright {
  background-color: #222 !important;
}

</style>
