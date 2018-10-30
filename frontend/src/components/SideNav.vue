<template>
  <mdb-side-nav :OpenedFromOutside.sync="toggle" dark color="primary-color" ref="sideNav">
    <mdb-scrollbar class="side-nav-scroll" :wheelSpeed="0.3">
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
        <ul class="collapsible">
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 11 ? active = 0 : active = 11">
              <mdb-icon icon="cubes"/> Organization<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 11 ? 'rotated' : ''"/>
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
              <mdb-icon icon="cube"/> Companyes<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 22 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 22" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" :to="'/admin/company/' + company.id" v-for="company in companyes" :key="company.id">{{company.name}}</router-link></li>
                <hr>
                <li><router-link class="ripple-parent" @click.native="wave" to="/admin/company/add">Add Companyes</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <!-- <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 1 ? active = 0 : active = 1">
              <mdb-icon icon="tachometer"/> Dashboards<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 1 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 1" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/">Version 1</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/dashboards/v-2">Version 2</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/dashboards/v-3">Version 3</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/dashboards/v-4">Version 4</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/dashboards/v-5">Version 5</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/dashboards/v-6">Version 6</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 2 ? active = 0 : active = 2">
              <mdb-icon icon="photo"/> Pages<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 2 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 2" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/login">Login</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/register">Register</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/pricing">Pricing</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/about">About us</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/single">Single post</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/post">Post listing</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" target="_blank" to="/pages/landing">Landing Page</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/pages/customers">Customers</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/pages/invoice">Invoice</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/pages/page">Page Creator</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/pages/support">Support</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/pages/chat">Chat</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 3 ? active = 0 : active = 3">
              <mdb-icon icon="user"/> Profile<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 3 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 3" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/profiles/basic-1">Basic 1</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/profiles/basic-2">Basic 2</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/profiles/extended">Extended</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 4 ? active = 0 : active = 4">
              <mdb-icon icon="css3"/> CSS<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 4 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 4" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/grid">Grid system</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/media">Media object</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/utilities">Utilities / helpers</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/code">Code</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/icons">Icons</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/images">Images</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/typo">Typography</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/colors">Colors</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/hover">Hover effects</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/masks">Masks</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/shadows">Shadows</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/css/skins">Skins</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 5 ? active = 0 : active = 5">
              <mdb-icon icon="th"/> Components<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 5 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 5" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/buttons">Buttons</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/cards">Cards</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/panels">Panels</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/list">List group</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/pagination">Pagination</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/progress">Progress bars</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/tabs">Tabs & pills</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/tags">Tags, labels & badges</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/collapse">Collapse</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/datepicker">Date picker</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/timepicker">Time picker</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/tooltips">Tooltips</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/popovers">Popovers</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/components/stepper">Stepper</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 6 ? active = 0 : active = 6">
              <mdb-icon icon="check-square-o"/> Forms<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 6 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 6" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/forms/basic">Basic</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/forms/extended">Extended</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 7 ? active = 0 : active = 7">
              <mdb-icon icon="table"/> Tables<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 7 ? 'rotated' : ''"/>
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
            <a class="collapsible-header ripple-parent" @click="wave" @click.prevent="active === 8 ? active = 0 : active = 8">
              <mdb-icon icon="map"/> Maps<mdb-icon icon="angle-down" class="rotate-icon" :class="active === 8 ? 'rotated' : ''"/>
            </a>
            <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
              <mdb-sub-menu tag="ul" v-if="active === 8" class="collapse-side-nav-item">
                <li><router-link class="ripple-parent" @click.native="wave" to="/maps/googlemaps">Google Maps</router-link></li>
                <li><router-link class="ripple-parent" @click.native="wave" to="/maps/fullscreen">Full screen map</router-link></li>
              </mdb-sub-menu>
            </transition>
          </li>
          <li>
            <router-link class="ripple-parent" @click.native="wave" to="/modals/modals"><mdb-icon icon="bolt"/> Modals</router-link>
          </li>
          <li>
            <router-link class="ripple-parent" @click.native="wave" to="/charts/charts"><mdb-icon icon="pie-chart"/> Charts</router-link>
          </li>
          <li>
            <router-link class="ripple-parent" @click.native="wave" to="/calendar/calendar"><mdb-icon icon="calendar-check-o"/> Calendar</router-link>
          </li>
          <li>
            <router-link class="ripple-parent" @click.native="wave" to="/sections/sections"><mdb-icon icon="th-large"/> Sections</router-link>
          </li> -->
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
</style>
