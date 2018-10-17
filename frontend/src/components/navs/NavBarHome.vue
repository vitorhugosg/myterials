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
    name: 'NavBarHome'
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
