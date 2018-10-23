<template>
    <navbar navStyle="background-color: transparent;" position="top" color="mdb" dark scrolling transparent>
        <container>
            <mdb-navbar-brand><strong><router-link to="/" class="nav-brand">MyTerials</router-link> </strong></mdb-navbar-brand>
            
                <navbar-nav>
                    <navbar-item  waves-fixed active ><router-link to="/login" class='text-white'>Login</router-link></navbar-item>
                    <navbar-item  waves-fixed active ><router-link to="/register" class='text-white'>Register</router-link></navbar-item>
                </navbar-nav>
                
            
        </container>
    </navbar>
</template>
<script>
import{ Container, mdbNavbarBrand, NavbarItem, Navbar, NavbarNav, NavbarCollapse} from 'mdbvue'


export default {
    components:{
        Navbar,
        NavbarItem,
        NavbarNav,
        NavbarCollapse,
        Container,
        mdbNavbarBrand

    },
    name: 'NavBarHome',
    data(){
        return{
            organizations: ''
        }
    },
    mounted(){
        this.$http.get(this.$urlAPI + 'auth/login').then(response =>{
            if(response.data.status){
                this.organizations = response.data.organizations;
            }else{
                this.errorGetOrganization = 'Error get informations for organizations';
            }
        }).catch(e => {
            console.log(e)
            this.errorValidation = 'Houve uma falha ao se conectar com servidor';
        });
    }
}
</script>
<style scoped>
.navbar {
    background: transparent;
}
.nav-brand{
    color: #fff;
}
</style>
