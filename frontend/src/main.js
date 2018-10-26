// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import Vuetify from 'vuetify'
import DaySpanVuetify from 'dayspan-vuetify'
import Vuex from 'vuex'
//VUEEX
Vue.use(Vuex)
import axios from 'axios'
import * as VueGoogleMaps from 'vue2-google-maps'
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'dayspan-vuetify/dist/lib/dayspan-vuetify.min.css'
import 'mdbvue/build/css/mdb.css'
import 'bootstrap/dist/css/bootstrap.css'


var store = {
  //variaveis e listas
  state: {
    usuario: sessionStorage.getItem('usuario') ? JSON.parse(sessionStorage.getItem('usuario')) : null,
    organizations: localStorage.getItem('organizations') ? JSON.parse(localStorage.getItem('organizations')) : null,
    companyes: localStorage.getItem('companyes') ? JSON.parse(localStorage.getItem('companyes')) : null,
  },
  //metodos para listar os getters
  getters:{
    getUsuario: state =>{
      return state.usuario;
    },
    getToken: state =>{
      //pegando token
      if(state.usuario.token != null){
        return state.usuario.token;
      }else{
        return;
      }
    },
    getOrganizations: state =>{
      return state.organizations;
    },
    getCompanyes: state =>{
      return state.companyes;
    }
  },
  //meetodos para auterar os valores 
  mutations:{
    setUsuario(state, n){
      state.usuario = n;
    },
    setOrganizations(state, n){
      state.organizations = n;
    },
    setCompanyes(state, n){
      state.companyes = n;
    }
  }
}


Vue.use(VueGoogleMaps, {
  load: {
    libraries: 'places'
  }
})

Vue.use(Vuetify)
Vue.use(DaySpanVuetify, {
  methods: {
    getDefaultEventColor: () => '#1976d2'
  }
})

//definindo stancia do axios:
Vue.prototype.$http = axios;
//definindo variavel URL
console.log();
if(process.env.NODE_ENV == 'development'){
  Vue.prototype.$urlAPI = 'http://127.0.0.1:8000/api/';
  Vue.prototype.$urlBaseAssets = 'http://127.0.0.1:8000/storage/';
}else{
  Vue.prototype.$urlAPI = 'https://api.myterials.com/api/';
  Vue.prototype.$urlBaseAssets = 'https://api.myterials.com/storage/';
}


Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store: new Vuex.Store(store),
  components: { App },
  template: '<App/>'
})
