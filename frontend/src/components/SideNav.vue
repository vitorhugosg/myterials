<template>
  <mdb-side-nav :OpenedFromOutside.sync="toggle" dark color="primary-color" ref="sideNav">
    <mdb-scrollbar class="img-no side-nav-scroll" :wheelSpeed="0.3">
      <li class="logo-nav">
        <div class="logo-wrapper">
          <img alt="" class="img-fluid" src="/static/img/logo/myterials.png"/>
        </div>
      </li>
      <li>
        <form class="search-form" role="search">
          <div class="form-group md-form mt-0 pt-1 ripple-parent" @click="wave">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
      </li>
      <li>
        <ul class="collapsible up-font">
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 11 ? active = 0 : active = 11">
              <mdb-icon icon="cubes red-text"/> Organization<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 11 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 11" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" :to="'/admin/organization/'+ organization.id" v-for="organization in organizations" :key="organization.id">{{organization.name}}</router-link></li>
                <hr>
                <li><router-link class="ripple-parent" @click.native="wave" to="/admin/organization">View Organizations</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/admin/organization/add">Add Organization</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 22 ? active = 0 : active = 22">
              <mdb-icon icon="cube red-text" /> Companyes<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 22 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 22" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" :to="'/admin/company/' + company.id" v-for="company in companyes" :key="company.id">{{company.name}}</router-link></li>
                <hr>
                <li><router-link class="ripple-parent" @click.native="wave" to="/admin/company/add">Add Companyes</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 7 ? active = 0 : active = 7">
              <mdb-icon icon="table red-text"/> Tables<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 7 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 7" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/tables/basic">Basic</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/tables/extended">Extended</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/tables/datatables">DataTables</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          
          <li>
            <router-link class="ripple-parent" @click.native="wave" to="/sections/sections"><mdb-icon icon="th-large red-text"/> Sections</router-link>
          </li>
        </ul>
      </li>
      <div class="sidenav-bg mask-strong"></div>
    </mdb-scrollbar>
  </mdb-side-nav>
</template>

<script>
import { mdbContainer, mdbScrollbar, mdbSideNav, mdbSubMenu, mdbIcon, waves } from 'mdbvue'

export default {
  name: 'Dashboardv2',
  props: {
    waves: {
      type: Boolean,
      default: true
    },
    open: {
      type: Boolean
    }
  },
  components: {
    mdbContainer,
    mdbScrollbar,
    mdbSideNav,
    mdbSubMenu,
    mdbIcon,
    waves
  },
  data () {
    return {
      toggle: false,
      active: 0,
      elHeight: 0,
      windowHeight: 0,
      organizations: '',
      errorGetOrganization: '',
      companyes: ''
    }
  },
  created(){
      this.$http.get(this.$urlAPI + 'organization/getforuser',{
          "headers":{
              "authorization": "Bearer "+  this.$store.getters.getToken,
              'X-Requested-With': 'XMLHttpRequest' 
          }
      }).then(response =>{
          if(response.data.status){
              localStorage.setItem('organizations', JSON.stringify(response.data.organization));
              this.$store.commit('setOrganizations', response.data.organization);
              this.organizations = response.data.organization;
          }else{
              this.errorGetOrganization = 'Error get informations for organizations';
          }
      }).catch(e => {
          console.log(e)
          this.errorValidation = 'Houve uma falha ao se conectar com servidor';
      });

      this.$http.get(this.$urlAPI + 'company/getforuser',{
          "headers":{
              "authorization": "Bearer "+  this.$store.getters.getToken,
              'X-Requested-With': 'XMLHttpRequest' 
          }
      }).then(response =>{
          if(response.data.status){
              localStorage.setItem('companyes', JSON.stringify(response.data.companyes));
              this.$store.commit('setCompanyes', response.data.companyes);
              this.companyes = response.data.companyes;
          }else{
              this.errorGetOrganization = 'Error get informations for organizations';
          }
      }).catch(e => {
          console.log(e)
          this.errorValidation = 'Houve uma falha ao se conectar com servidor';
      });
  },
  methods: {
    beforeEnter (el) {
      this.elHeight = el.scrollHeight
    },
    enter (el) {
      el.style.height = this.elHeight + 'px'
    },
    beforeLeave (el) {
      el.style.height = 0
    },
    handleResize () {
      // this.windowHeight = window.innerHeight
      // this.$el.style.height = this.windowHeight + 'px'
    }
  },
  watch: {
    open (newVal) { // watch it
      this.toggle = true
    }
  },
  mixins: [ waves ],
  mounted () {
    this.handleResize()
    window.addEventListener('resize', this.handleResize)
  },
  beforeDestroy () {
    window.removeEventListener('resize', this.handleResize)
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.logo-nav .logo-wrapper{
  min-height: 200px;
}
.side-nav .collapsible a {
  color: #424242;
}

.side-nav .logo-wrapper {
  height: 100px;
}

.side-nav .logo-wrapper img {
  padding-top: 12%;
  padding-bottom: 12%;
}

.collapsible {
  margin-top: 1rem;
}

.collapsible-header {
  position: relative;
}

.collapse-side-nav-item {
  overflow: hidden;
  height: 0;
  padding: 0;
  transition: height .3s;
}
.collapse-side-nav-item a {
  padding-left: 47px;
  line-height: 36px;
  background-color: rgba(0,0,0,.15);
}

.fa-angle-down {
  float: right;
}
.icon-div {
  width: 49%;
  display: inline-block;
}

.rotated {
  transform: rotate(180deg);
}

.select-wrapper input.select-dropdown {
  font-size: 14px;
}

.form-control {
  font-size: 14px;
}

.img-no {
  background-image: none !important;
  background-color: #fff !important;
  font-size: .1em !important; 
}

.up-font a{
  font-size: 15px !important; 
}

.red-text {
  font-size: 13px !important;
}

</style>
