import Vue from 'vue'
import Vuex from 'vuex'
import users from './modules/users/index'
import organizations from './modules/organizations/index'
import companyes from './modules/companyes/index'
import products from './modules/products/index'
Vue.use(Vuex);


var store = new Vuex.Store({
  modules: {
    users,
    organizations,
    companyes,
    products,
  },
  state: {
    urlAPI: process.env.NODE_ENV == 'development' ? 'http://127.0.0.1:8000/api/': 'https://api.myterials.com/api/'
  }
})

export default store;
