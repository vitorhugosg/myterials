import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)

export default {
    state:{
        usuario: sessionStorage.getItem('usuario') ? JSON.parse(sessionStorage.getItem('usuario')) : null
    },
    getters:{
        getUsuario: state =>{
            return state.usuario;
        },
        getToken: state => {
            //pegando token
            if(state.usuario !== undefined){
                return state.usuario.token;
            }else{
                return null;
            }
        }
    },
    mutations:{
        SET_USUARIO(state, n){
            state.usuario = n;
        }
    }
}

