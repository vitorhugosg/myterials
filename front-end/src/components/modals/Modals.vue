<template>
  <mdb-container>
    <!--Section: Modals-->
    <section>

        <!-- Frame Modal Top Info-->
        <mdb-modal frame position="top" v-if="showModal" @close="showModal = false">
          <mdb-modal-body class="text-center">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nisi quo provident fugiat reprehenderit nostrum quos...</span>
            <mdb-btn color="secondary" @click.native="showModal = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-body>
        </mdb-modal>
        <!-- Frame Modal Bottom Success-->

        <!-- Frame Modal Bottom Success-->
        <mdb-modal frame position="bottom" v-if="showModal2" @close="showModal2 = false">
          <mdb-modal-body class="text-center">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nisi quo provident fugiat reprehenderit nostrum quos...</span>
            <mdb-btn color="secondary" @click.native="showModal2 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-body>
        </mdb-modal>
        <!-- Frame Modal Bottom Success-->

        <!-- Side Modal Top Right Success-->
        <mdb-modal removeBackdrop side position="top-right" v-if="showModal3" @close="showModal3 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal3 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>
        <!-- Side Modal Top Right Success-->

        <!-- Side Modal Top Left Info-->
        <mdb-modal removeBackdrop side position="top-left" v-if="showModal4" @close="showModal4 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal4 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>
        <!-- Side Modal Top Left Info-->

        <!-- Side Modal Bottom Right Danger-->
        <mdb-modal removeBackdrop side position="bottom-right" v-if="showModal5" @close="showModal5 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal5 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>
        <!-- Side Modal Bottom Right Danger-->

        <!-- Side Modal Bottom Left Warning-->
        <mdb-modal removeBackdrop side position="bottom-left" v-if="showModal6" @close="showModal6 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal6 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>
        <!-- Side Modal Bottom Left Warning-->

        <mdb-modal size="sm" v-if="showModal7" @close="showModal7 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" size="sm" @click.native="showModal7 = false">Close</mdb-btn>
            <mdb-btn color="primary" size="sm">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal v-if="showModal8" @close="showModal8 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" size="sm" @click.native="showModal8 = false">Close</mdb-btn>
            <mdb-btn color="primary" size="sm">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal size="lg" v-if="showModal9" @close="showModal9 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" size="sm" @click.native="showModal9 = false">Close</mdb-btn>
            <mdb-btn color="primary" size="sm">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal size="fluid" v-if="showModal10" @close="showModal10 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" size="sm" @click.native="showModal10 = false">Close</mdb-btn>
            <mdb-btn color="primary" size="sm">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal fullHeight position="right" v-if="showModal11" @close="showModal11 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal11 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal fullHeight position="left" v-if="showModal12" @close="showModal12 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal12 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal fullHeight position="top" v-if="showModal13" @close="showModal13 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal13 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <mdb-modal fullHeight position="bottom" v-if="showModal14" @close="showModal14 = false">
          <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
          </mdb-modal-header>
          <mdb-modal-body>...</mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal14 = false">Close</mdb-btn>
            <mdb-btn color="primary">Save changes</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>

        <!-- Central Modal Success Demo-->
        <mdb-modal size="success" position="notify" v-if="showModal15" @close="showModal15 = false">
            <!--Header-->
            <mdb-modal-header class="text-white">
                <p class="heading lead">Modal Success</p>
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body class="text-center">
                <mdb-icon icon="check" size="4x" class="mb-3 animated rotateIn"></mdb-icon>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam
                    blanditiis ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat.
                    Esse ratione fuga, enim, ab officiis totam.
                </p>
            </mdb-modal-body>
            <!--Footer-->
            <mdb-modal-footer class="justify-content-center">
                <mdb-btn color="success">Get it now <i class="fa fa-diamond text-white ml-1"></i></mdb-btn>
                <mdb-btn outline="success" @click.native="showModal15 = false">No, thanks</mdb-btn>
            </mdb-modal-footer>
        </mdb-modal>
        <!-- Central Modal Success Demo-->

        <!-- Central Modal Info Demo-->
        <mdb-modal size="info" position="notify" v-if="showModal16" @close="showModal16 = false">
            <!--Header-->
            <mdb-modal-header class="text-white">
                <p class="heading lead">Modal Info</p>
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body class="text-center">
                <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg" alt="" class="img-fluid"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam
                    blanditiis ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat.
                    Esse ratione fuga, enim, ab officiis totam.
                </p>
            </mdb-modal-body>
            <!--Footer-->
            <mdb-modal-footer class="justify-content-center">
                <mdb-btn color="info">Get it now <i class="fa fa-diamond text-white ml-1"></i></mdb-btn>
                <mdb-btn outline="info" @click.native="showModal16 = false">No, thanks</mdb-btn>
            </mdb-modal-footer>
        </mdb-modal>
        <!-- Central Modal Info Demo-->

        <!-- Central Modal Danger Demo-->
        <mdb-modal size="danger" position="notify" v-if="showModal17" @close="showModal17 = false">
            <!--Header-->
            <mdb-modal-header class="text-white">
                <p class="heading lead">Modal Danger</p>
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body>
              <div class="row">
                  <div class="col-3">
                      <p></p>
                      <p class="text-center"><mdb-icon icon="shopping-cart" size="4x"></mdb-icon></p>
                  </div>
                  <div class="col-9">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident
                          temporibus sunt earum.</p>
                      <h2><span class="badge">v52gs1</span></h2>
                  </div>
              </div>
            </mdb-modal-body>
            <!--Footer-->
            <mdb-modal-footer class="justify-content-center">
                <mdb-btn color="danger">Get it now <i class="fa fa-diamond text-white ml-1"></i></mdb-btn>
                <mdb-btn outline="danger" @click.native="showModal17 = false">No, thanks</mdb-btn>
            </mdb-modal-footer>
        </mdb-modal>
        <!-- Central Modal Danger Demo-->

        <!-- Central Modal Warning Demo-->
        <mdb-modal size="warning" position="notify" v-if="showModal18" @close="showModal18 = false">
            <!--Header-->
            <mdb-modal-header class="text-white">
                <p class="heading lead">Modal Warning</p>
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body>
              <div class="row">
                  <div class="col-3 text-center">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="Michal Szymanski - founder of Material Design for Bootstrap"
                          class="img-fluid z-depth-1-half rounded-circle">
                      <div style="height: 10px"></div>
                      <p class="title mb-0">Jane</p>
                      <p class="text-muted " style="font-size: 13px">Consultant</p>
                  </div>

                  <div class="col-9">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident
                          temporibus sunt earum.</p>
                      <p class="card-text"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></p>
                  </div>
              </div>
            </mdb-modal-body>
            <!--Footer-->
            <mdb-modal-footer class="justify-content-center">
                <mdb-btn color="warning">Get it now <i class="fa fa-diamond text-white ml-1"></i></mdb-btn>
                <mdb-btn outline="warning" @click.native="showModal18 = false">No, thanks</mdb-btn>
            </mdb-modal-footer>
        </mdb-modal>
        <!-- Central Modal Warning Demo-->

        <!-- Central Modal Contact Form-->
        <mdb-modal cascade v-if="showModal19" @close="showModal19 = false">
            <!--Header-->
            <mdb-modal-header class="light-blue darken-3 text-white">
               <h4 class=""><i class="fa fa-pencil"></i> Contact form</h4>
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body>
              <mdb-input class="grey-text" type="text" label="Your name" icon="user" />
              <mdb-input class="grey-text" type="text" label="Your email" icon="envelope" />
              <mdb-input class="grey-text" type="text" label="Your password" icon="tag" />
              <mdb-textarea class="grey-text" :rows="4" label="Message" icon="pencil" />
            </mdb-modal-body>
            <!--Footer-->
            <mdb-modal-footer class="justify-content-center">
              <mdb-btn color="info" icon="send" iconRight>Send </mdb-btn>
            </mdb-modal-footer>
        </mdb-modal>
        <!-- Central Modal Contact Form-->

        <!-- Central Modal Contact Form-->
        <mdb-modal cascade v-if="showModal20" @close="showModal20 = false">
            <!--Header-->
            <mdb-tab cascade tabs justify color="indigo" class="md-tabs">
              <mdb-tab-item icon="user" :active="tab==1" @click.native.prevent="tab = 1">Login</mdb-tab-item>
              <mdb-tab-item icon="user-add" :active="tab==2" @click.native.prevent="tab = 2">Register</mdb-tab-item>
            </mdb-tab>
            <mdb-tab-content class="card">
              <transition-group name="slide-toggle">
                <mdb-tab-pane key="show4" v-show="tab==1"><br/>
                  <mdb-input class="grey-text" type="text" label="Your email" icon="envelope" />
                  <mdb-input class="grey-text" type="text" label="Your password" icon="lock" />
                  <div class="text-center">
                    <mdb-btn color="info" icon="sign-in" iconRight>Log in </mdb-btn>
                  </div>
                </mdb-tab-pane>
                <mdb-tab-pane key="show5" v-show="tab==2"><br/>
                  <mdb-input class="grey-text" type="text" label="Your email" icon="envelope" />
                  <mdb-input class="grey-text" type="text" label="Your password" icon="lock" />
                  <mdb-input class="grey-text" type="text" label="Repeat password" icon="lock" />
                  <div class="text-center">
                    <mdb-btn color="info" icon="sign-in" iconRight>Sign up </mdb-btn>
                  </div>
                </mdb-tab-pane>
              </transition-group>
              <mdb-modal-footer>
                <div class="options text-center text-md-right mt-1">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
                <mdb-btn outline="info" class="ml-auto" @click.native="showModal20 = false">Close</mdb-btn>
              </mdb-modal-footer>
            </mdb-tab-content>
        </mdb-modal>
        <!-- Central Modal Contact Form-->

        <!-- Central Modal Subscription Form-->
        <mdb-modal cascade v-if="showModal21" @close="showModal21 = false">
            <!--Header-->
            <mdb-modal-header class="light-blue darken-3 text-white">
               <h4 class=""><i class="fa fa-newspaper-o"></i> Subscription form</h4>
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body>
              <mdb-input class="grey-text" type="text" label="Your name" icon="user" />
              <mdb-input class="grey-text" type="text" label="Your email" icon="envelope" />
            </mdb-modal-body>
            <!--Footer-->
            <mdb-modal-footer class="justify-content-center">
              <mdb-btn color="info" icon="check" iconRight>Submit </mdb-btn>
            </mdb-modal-footer>
        </mdb-modal>
        <!-- Central Modal Subscription Form-->

        <!-- Central Modal Avatar Form-->
        <mdb-modal cascade size="sm" position="avatar" v-if="showModal22" @close="showModal22 = false">
            <!--Header-->
            <mdb-modal-header :close="false">
               <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" class="rounded-circle img-fluid">
            </mdb-modal-header>
            <!--Body-->
            <mdb-modal-body class="text-center">
              <h5 class="mt-1 mb-2">Maria Doe</h5>
              <mdb-input class="grey-text" type="password" label="Enter password" />
              <mdb-btn color="info" icon="sign" iconRight>Login </mdb-btn>
            </mdb-modal-body>
        </mdb-modal>
        <!-- Central Modal Avatar Form-->

    </section>
    <!--/Section: Modals-->

    <!-- SECTION: Demo-->
    <section>

        <!--Section: Position & Sizes-->
        <section>
            <h4 class="mb-5 mt-4 dark-grey-text text-center font-weight-bold"><strong>Position & Sizes</strong></h4>

            <div class="text-center mb-5">
                <p class="lead">Click buttons below to launch modals demo</p>
            </div>

            <!-- First row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="text-center mb-3">Frame Modal</h5>

                    <img src="https://mdbootstrap.com/img/brandflow/modal4.jpg" alt="" class="img-fluid z-depth-1">
                    <div class="text-center">
                        <h5 class="my-3">Position</h5>

                        <mdb-btn color="primary" @click.native="showModal = true">Top</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal2 = true">Bottom</mdb-btn>
                    </div>
                </div>
                <!--First column-->

                <!--Second column-->
                <div class="col-md-3">
                    <h5 class="text-center mb-3">Side Modal</h5>

                    <img src="https://mdbootstrap.com/img/brandflow/modal3.jpg" alt="" class="img-fluid z-depth-1">
                    <div class="text-center">
                        <h5 class="my-3">Position</h5>

                        <mdb-btn color="primary" @click.native="showModal3 = true">Top right</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal4 = true">Top left</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal5 = true">Bottom right</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal6 = true">Bottom left</mdb-btn><br/>
                    </div>
                </div>
                <!--Second column-->

                <!--Third column-->
                <div class="col-md-3">
                    <h5 class="text-center mb-3">Central Modal</h5>

                    <img src="https://mdbootstrap.com/img/brandflow/modal2.jpg" alt="" class="img-fluid z-depth-1">
                    <div class="text-center">
                        <h5 class="my-3">Size</h5>

                        <mdb-btn color="primary" @click.native="showModal7 = true">Small</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal8 = true">Medium</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal9 = true">Large</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal10 = true">Fluid</mdb-btn><br/>
                    </div>
                </div>
                <!--Third column-->

                <!--Fourth column-->
                <div class="col-md-3">
                    <h5 class="text-center mb-3">Fluid Modal</h5>

                    <img src="https://mdbootstrap.com/img/brandflow/modal1.jpg" alt="" class="img-fluid z-depth-1">
                    <div class="text-center">
                        <h5 class="my-3">Position</h5>

                        <mdb-btn color="primary" @click.native="showModal11 = true">Right</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal12 = true">Left</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal13 = true">Top</mdb-btn><br/>
                        <mdb-btn color="primary" @click.native="showModal14 = true">Bottom</mdb-btn><br/>
                    </div>
                </div>
                <!--Fourth column-->

            </div>
            <!-- /.First row-->

        </section>
        <!--/Section: Position & Sizes-->

        <hr class="my-5">

        <!--Section: Styles-->
        <section>
            <h4 class="my-5 mt-4 dark-grey-text text-center"><strong>Styles examples</strong></h4>

            <!--First row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-6">

                    <div class="text-center">
                        <mdb-btn color="primary" rounded @click.native="showModal15 = true" icon="eye" iconRight>Launch Modal Success </mdb-btn>
                    </div>

                    <!--Modal: mdb-abandonedCart-hard-->
                    <div class="modal-dialog modal-notify modal-success" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading lead">Modal Success</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">
                                <div class="text-center">
                                    <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla
                                        aperiam blanditiis ad consequatur in dolores culpa, dignissimos, eius non
                                        possimus fugiat. Esse ratione fuga, enim, ab officiis totam.</p>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-success px-3 px-3">Get it now <i class="fa fa-diamond text-white ml-1"></i></a>
                                <a type="button" class="btn btn-outline-success waves-effect px-3 px-3" data-dismiss="modal">No, thanks</a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6">

                    <div class="text-center">
                      <mdb-btn color="primary" rounded @click.native="showModal16 = true" icon="eye" iconRight>Launch Modal Info </mdb-btn>
                    </div>

                    <!--Modal: mdb-abandonedCart-hard-->
                    <div class="modal-dialog modal-notify modal-info" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading lead">Modal Info</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">

                                <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg" alt="" class="img-fluid">

                                <div class="text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vero illo
                                        error eveniet cum.
                                    </p>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-info px-3">Get it now <i class="fa fa-diamond text-white ml-1"></i></a>
                                <a type="button" class="btn btn-outline-info waves-effect px-3" data-dismiss="modal">No, thanks</a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                    <!--/Modal: mdb-abandonedCart-hard-->
                </div>
                <!--/Second column-->
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
                <!--First column-->
                <div class="col-md-6">

                    <div class="text-center">
                        <mdb-btn color="primary" rounded @click.native="showModal17 = true" icon="eye" iconRight>Launch Modal Danger </mdb-btn>
                    </div>

                    <!--Modal: mdb-abandonedCart-hard-->
                    <div class="modal-dialog modal-notify modal-danger" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading">Modal Danger</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-3">
                                        <p></p>
                                        <p class="text-center"><i class="fa fa-shopping-cart fa-4x"></i></p>
                                    </div>

                                    <div class="col-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae
                                            provident temporibus sunt earum.</p>
                                        <h2><span class="badge">v52gs1</span></h2>
                                    </div>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-danger px-3">Get it now <i class="fa fa-diamond text-white ml-1"></i></a>
                                <a type="button" class="btn btn-outline-danger waves-effect px-3" data-dismiss="modal">No, thanks</a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6">

                    <div class="text-center">
                      <mdb-btn color="primary" rounded @click.native="showModal18 = true" icon="eye" iconRight>Launch Modal Warning </mdb-btn>
                    </div>

                    <!--Modal: mdb-abandonedCart-hard-->
                    <div class="modal-dialog modal-notify modal-warning" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading">Modal Warning</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="Michal Szymanski - founder of Material Design for Bootstrap"
                                            class="img-fluid z-depth-1-half rounded-circle">
                                        <div style="height: 10px"></div>
                                        <p class="title mb-0">Jane</p>
                                        <p class="text-muted " style="font-size: 13px">Consultant</p>
                                    </div>

                                    <div class="col-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae
                                            provident temporibus sunt earum.</p>
                                        <p class="card-text"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></p>
                                    </div>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-warning px-3">Get it now <i class="fa fa-diamond text-white ml-1"></i></a>
                                <a type="button" class="btn btn-outline-warning waves-effect px-3" data-dismiss="modal">No, thanks</a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--/Second column-->
            </div>
            <!--/Second row-->

        </section>
        <!--Section: Styles-->

        <hr class="my-5">

        <!--Section: Forms-->
        <section>
            <h4 class="my-5 mt-4 dark-grey-text text-center"><strong>Forms Examples</strong></h4>

            <!--First row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-6">

                    <div class="text-center">
                      <mdb-btn color="primary" rounded @click.native="showModal19 = true" icon="eye" iconRight>Launch Modal Contact Form </mdb-btn>
                    </div>

                    <!--Modal: Contact form-->
                    <div class="modal-dialog cascading-modal" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Header-->
                            <div class="modal-header light-blue darken-3 white-text">
                                <h4 class=""><i class="fa fa-pencil"></i> Contact form</h4>
                                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                            </div>
                            <!--Body-->
                            <div class="modal-body mb-0">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form8" class="form-control form-control-sm">
                                    <label for="form8">Your name</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form9" class="form-control form-control-sm">
                                    <label for="form9">Your email</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-tag prefix"></i>
                                    <input type="text" id="form10" class="form-control form-control-sm">
                                    <label for="form10">Subject</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-pencil prefix"></i>
                                    <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="3"></textarea>
                                    <label for="form8">Your message</label>
                                </div>

                                <div class="text-center mt-1-half">
                                    <button class="btn btn-info mb-2">Send <i class="fa fa-send ml-1"></i></button>
                                </div>

                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                    <!--/Modal: Contact form-->

                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6">

                    <div class="text-center">
                      <mdb-btn color="primary" rounded @click.native="showModal20 = true" icon="eye" iconRight>Launch Modal Login/Register </mdb-btn>
                    </div>

                    <!--Modal: Login & Register tabs-->
                    <div class="modal-dialog cascading-modal" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Modal cascading tabs-->
                            <div class="modal-c-tabs">

                                <!-- Nav tabs -->
                                <ul class="nav md-tabs tabs-2 light-blue darken-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                                    </li>
                                </ul>

                                <!-- Tab panels -->
                                <div class="tab-content">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">

                                        <!--Body-->
                                        <div class="modal-body mb-1">
                                            <div class="md-form form-sm">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="text" id="form11" class="form-control form-control">
                                                <label for="form11">Your email</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" id="form12" class="form-control form-control">
                                                <label for="form12">Your password</label>
                                            </div>
                                            <div class="text-center mt-2">
                                                <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                            </div>
                                        </div>
                                        <!--Footer-->
                                        <div class="modal-footer display-footer">
                                            <div class="options text-center text-md-right mt-1">
                                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                            </div>
                                            <button type="button" class="btn btn-outline-info waves-effects ml-auto" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                    <!--/.Panel 1-->

                                    <!--Panel 2-->
                                    <div class="tab-pane fade" id="panel2" role="tabpanel">

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="md-form form-sm">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="text" id="form13" class="form-control form-control-sm">
                                                <label for="form13">Your email</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" id="form24" class="form-control form-control-sm">
                                                <label for="form24">Your password</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" id="form15" class="form-control form-control-sm">
                                                <label for="form15">Repeat password</label>
                                            </div>

                                            <div class="text-center form-sm mt-2">
                                                <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                                            </div>

                                        </div>
                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options text-right">
                                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                            </div>
                                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!--/.Panel 2-->
                                </div>

                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                    <!--/Modal: Login & Register tabs-->

                </div>
                <!--/Second column-->
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-6">

                    <div class="text-center">
                      <mdb-btn color="primary" rounded @click.native="showModal21 = true" icon="eye" iconRight>Launch Modal Contact Form </mdb-btn>
                    </div>

                    <!--Modal: Subscription-->
                    <div class="modal-dialog cascading-modal" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Header-->
                            <div class="modal-header light-blue darken-3 white-text">
                                <h4 class=""><i class="fa fa-newspaper-o"></i> Subscription form</h4>
                                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                            </div>
                            <!--Body-->
                            <div class="modal-body mb-0">

                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form16" class="form-control form-control-sm">
                                    <label for="form16">Your name</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form17" class="form-control form-control-sm">
                                    <label for="form17">Your email</label>
                                </div>

                                <div class="text-center mt-1-half">
                                    <button class="btn btn-info mb-1">Submit <i class="fa fa-check ml-1"></i></button>
                                </div>

                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                    <!--/Modal: Subscription-->

                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-6">

                    <div class="text-center">
                      <mdb-btn color="primary" rounded @click.native="showModal22 = true" icon="eye" iconRight>Launch Modal Login with Avatar </mdb-btn>
                    </div>

                    <!--Modal: Avatar-->
                    <div class="modal-dialog modal-sm cascading-modal modal-avatar" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Header-->
                            <div class="modal-header">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" class="rounded-circle img-fluid">
                            </div>
                            <!--Body-->
                            <div class="modal-body text-center mb-1">

                                <h5 class="mt-1 mb-2">Maria Doe</h5>

                                <div class="md-form ml-0 mr-0">
                                    <input type="password" id="form18" class="form-control ml-0">
                                    <label for="form18" class="ml-0">Enter password</label>
                                </div>

                                <div class="text-center pt-4">
                                    <button class="btn btn-cyan mt-1">Login <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
                            </div>

                        </div>
                        <!--/.Content-->
                    </div>
                    <!--/Modal: Avatar-->

                </div>
                <!--/Second column-->
            </div>
            <!--/Second row-->

        </section>
        <!--Section: Forms-->

    </section>
    <!-- /SECTION: Demo-->

    <!--Section: Docs link-->
    <section class="pb-4 pt-5">

        <!--Panel-->
        <div class="card text-center">
            <h3 class="card-header primary-color white-text">Full documentation</h3>
            <div class="card-body">
                <p class="card-text">Read the full documentation for these components.</p>
                <a href="https://mdbootstrap.com/vue/advanced/modals/" target="_blank" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <!--/.Panel-->

    </section>
    <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbBtn, mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbModalFooter, mdbIcon, mdbInput, mdbTextarea, mdbTab, mdbTabItem, mdbTabContent, mdbTabPane } from 'mdbvue'

export default {
  name: 'ModalPage',
  components: {
    mdbContainer,
    mdbBtn,
    mdbModal,
    mdbModalHeader,
    mdbModalTitle,
    mdbModalBody,
    mdbModalFooter,
    mdbIcon,
    mdbInput,
    mdbTextarea,
    mdbTab,
    mdbTabItem,
    mdbTabContent,
    mdbTabPane
  },
  data () {
    return {
      showModal: false,
      showModal2: false,
      showModal3: false,
      showModal4: false,
      showModal5: false,
      showModal6: false,
      showModal7: false,
      showModal8: false,
      showModal9: false,
      showModal10: false,
      showModal11: false,
      showModal12: false,
      showModal13: false,
      showModal14: false,
      showModal15: false,
      showModal16: false,
      showModal17: false,
      showModal18: false,
      showModal19: false,
      showModal20: false,
      showModal21: false,
      showModal22: false,
      tab: '1'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
