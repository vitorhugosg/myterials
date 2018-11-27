<template>
    <navbar navStyle="background-color: #FFF;" position="top" color="mdb"  transparent class="margin-reponsive">
        
        <mdb-navbar-brand><strong><router-link to="/" class="nav-brand"><img src="/static/img/logo/myterials.png" class="img-fluid  imagem-logo ">Myterials</router-link> </strong></mdb-navbar-brand>
        <navbar-collapse class="meunavered">
            <navbar-nav>
                <navbar-item  waves-fixed active ><router-link to="/login" class='d-flex justify-content-end'>Login</router-link></navbar-item>
                <navbar-item  waves-fixed active ><router-link to="/register" class='d-flex justify-content-end'>Register</router-link></navbar-item>
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
.nav-item a {
    color: #143F3B !important;
}
.nav-brand{
    color: #143F3B;
    font-weight: 500;
    letter-spacing: 0.8px;

}
.imagem-logo{
    max-width: 30px;
    margin-right: 20px;

}
.navbar.navbar-toggler{
    background: red !important;
}

</style>
