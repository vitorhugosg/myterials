<template>
    <!--Footer-->
    <footer class="footer-myterials page-footer py-4 text-center text-md-left">

        <!--Footer Links-->
        <div class="container">
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="text-uppercase font-weight-bold space-letter">Company Name</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 ml-auto">
                    <h5 class="text-uppercase font-weight-bold space-letter">Products</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-2 ml-auto">
                    <h5 class="text-uppercase font-weight-bold space-letter">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 ml-auto">
                    <h5 class="text-uppercase font-weight-bold space-letter">Contact</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>

        <hr>

        <div class="container">
            <!--Grid row-->
            <div class="row mb-3">

                <!--First column-->
                <div class="col-md-12">

                    <ul class="list-unstyled d-flex justify-content-center mb-0 py-4 list-inline">
                        <li class="list-inline-item"><a class="p-2 m-2 fa-lg fb-ic"><i class="fa fa-facebook white-text fa-lg icon-myterials"> </i></a></li>
                        <li class="list-inline-item"><a class="p-2 m-2 fa-lg tw-ic"><i class="fa fa-twitter white-text fa-lg icon-myterials"> </i></a></li>
                        <li class="list-inline-item"><a class="p-2 m-2 fa-lg gplus-ic"><i class="fa fa-google-plus white-text fa-lg icon-myterials"> </i></a></li>
                        <li class="list-inline-item"><a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text fa-lg icon-myterials"> </i></a></li>
                        <li class="list-inline-item"><a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text fa-lg icon-myterials"> </i></a></li>
                        <li class="list-inline-item"><a class="p-2 m-2 fa-lg pin-ic"><i class="fa fa-pinterest white-text fa-lg icon-myterials"> </i></a></li>
                    </ul>

                </div>
                <!--/First column-->
            </div>
            <!--/Grid row-->
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &copy; 2018 Copyright: <a href="#"> Myterials.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
</template>
<script>
    export default{
        name :'FooterHome'
    }
</script>

<style scoped>

.footer-myterials {
    background-color:#222222 !important; 
/*  background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%)!important;*/


}

.icon-myterials {
     color: #be3030 !important;
}
.space-letter {
    letter-spacing: .1em;
}
.space-letter:hover { 
    color: #be3030;
    cursor:pointer;
}

</style>


