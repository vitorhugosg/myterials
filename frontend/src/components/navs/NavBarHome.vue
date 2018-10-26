<template>
    <navbar navStyle="background-color: #424242;" position="top" color="mdb" dark transparent class="margin-reponsive">
        
        <mdb-navbar-brand><strong><router-link to="/" class="nav-brand">MyTerials</router-link> </strong></mdb-navbar-brand>
        <navbar-collapse>
            <navbar-nav>
                <navbar-item  waves-fixed active ><router-link to="/login" class='text-white'>Login</router-link></navbar-item>
                <navbar-item  waves-fixed active ><router-link to="/register" class='text-white'>Register</router-link></navbar-item>
            </navbar-nav>
        </navbar-collapse>
        
    </navbar>
</template>
<script>
import{ Container, mdbNavbarBrand, NavbarItem, Navbar, NavbarNav, NavbarCollapse, Row} from 'mdbvue'


export default {
    components:{
        Navbar,
        NavbarItem,
        NavbarNav,
        NavbarCollapse,
        Container,
        mdbNavbarBrand,
        Row

    },
    name: 'NavBarHome',
    data(){
        return{
            organizations: ''
        }
    },
    mounted(){
        
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
@media (max-width: 768px) {
    
}
</style>
