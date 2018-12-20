<template>
  <router-view></router-view>
</template>

<script>


export default {
  name: 'App',
  components: {
  }
}
</script>

<style>
body {
  font-size: 14px;
  font-weight: 300;
  background-color: #eee !important;
}

.side-nav {
  width: 240px !important;
  background-image: url('https://mdbootstrap.com/img/Photos/Others/sidenav4.jpg');
}

.side-nav ul {
  height: 100%;
}

.side-nav-scroll {
  position: absolute;
  height: 100%;
}

main {
  min-height: 90vh;
}

.flexible-content {
  transition: padding-left 0.3s;
  padding-left: 240px;
}

.flexible-navbar {
  transition: padding-left 0.5s;
  padding-left: 240px !important;
}

.navbar-bars {
  margin-right: 0;
  padding-bottom: 0;
  display: none !important;
}

@media (max-width: 848px) {
  .navbar-bars {
    display: block !important;
  }
  .flexible-content {
    padding-left: 0;
  }
  .flexible-navbar {
    padding-left: 10px !important;
  }
}

.flexible-navbar .navbar-toggler {
  display: none !important;
}

.navbar .btn, .navbar .nav-item, .navbar .nav-link {
  padding: 0;
}

.select-wrapper input.select-dropdown {
  font-size: 14px;
}

.form-control {
  font-size: 14px;
}

.cascading-admin-card {
  margin-top: 20px; }
  .cascading-admin-card .admin-up {
    margin-left: 4%;
    margin-right: 4%;
    margin-top: -20px; }
    .cascading-admin-card .admin-up .fa {
      padding: 1.7rem;
      font-size: 2rem;
      color: #fff;
      text-align: left;
      -webkit-border-radius: 3px;
      border-radius: 3px; }
    .cascading-admin-card .admin-up .data {
      float: right;
      margin-top: 2rem;
      text-align: right; }
      .cascading-admin-card .admin-up .data p {
        color: #999999;
        font-size: 12px; }

.classic-admin-card .card-body {
  color: #fff;
  margin-bottom: 0;
  padding: 0.9rem; }
  .classic-admin-card .card-body p {
    font-size: 13px;
    opacity: 0.7;
    margin-bottom: 0; }
  .classic-admin-card .card-body h4 {
    margin-top: 10px; }
  .classic-admin-card .card-body .float-right .fa {
    font-size: 3rem;
    opacity: 0.5; }

.table-ui {
  border: 1px solid #e0e0e9;
}

.fullscreen {
  background: #fff;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 100000;
  min-height: 100vh;
}

.fullscreen-view {
  height: 100vh;
}



.form-control {
  height: calc(2rem + 1px);
  padding: 0.375rem 0.75rem;
}

.list-group .ml-auto {
  float: right;
  flex: none !important;
}
.container{
  padding-top: 0px;
  padding-bottom: 0px;
}
</style>
