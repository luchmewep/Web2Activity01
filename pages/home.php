<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="jumbotron jumbotron-fluid text-center">
                <div class="container">
                    <h2 class="display-4">Welcome to Love Mail!<i class="fas fa-heart fa-fw"></i></h2>
                    <p class="lead">This is the place where you can write your heart out!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/img01.jpg" alt="LizQuen">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/img02.jpg" alt="Ivana">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/img03.jpg" alt="Marzia & Pewdipie">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                        <img src="images/img01.jpg" width="100">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="1">
                        <img src="images/img02.jpg" width="100">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="2">
                        <img src="images/img03.jpg" width="100">
                    </li>
                </ol>
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i
                                    class="fas fa-user mr-1"></i>
                                Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#register" role="tab"><i
                                    class="fas fa-user-plus mr-1"></i>
                                Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="login" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                                <form id="formLogin">
                                    <!-- Email -->
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="email" name="email" id="login_email"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="login_email">Your
                                            email</label>
                                    </div>

                                    <div class="md-form form-sm mb-4">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" name="password" id="login_password"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="login_password">Your
                                            password</label>
                                    </div>
                                    <div class="text-center mt-2">
                                        <button id="btnLogin" class="btn btn-info btn-rounded">Log in <i
                                                class="fas fa-sign-in ml-1"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a id="sign-up" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info btn-rounded waves-effect ml-auto"
                                    data-dismiss="modal">Close</button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="register" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                                <form id="formSignup">
                                    <!-- First Name -->
                                    <div class="md-form form-sm mb-5">
                                        <input type="text" name="fname" id="fname"
                                            class="form-control form-control-sm validate required">
                                        <label data-error="" data-success="Looks good!" for="fname">Your first
                                            name</label>
                                    </div>

                                    <!-- Middle Name -->
                                    <div class="md-form form-sm mb-5">
                                        <input type="text" name="mname" id="mname"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="Looks good!" for="mname">Your middle
                                            name</label>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="md-form form-sm mb-5">
                                        <input type="text" name="lname" id="lname"
                                            class="form-control form-control-sm validate required">
                                        <label data-error="wrong" data-success="right" for="lname">Your last
                                            name</label>
                                    </div>

                                    <!-- Birthdate -->
                                    <div class="md-form form-sm mb-5">
                                        <input type="text" name="bdate" id="bdate"
                                            class="form-control form-control-sm bdate validate">
                                        <label data-error="wrong" data-success="right" for="bdate">Your birth
                                            date</label>
                                    </div>

                                    <!-- email -->
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="email" name="email" id="email"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="email">Your email</label>
                                    </div>

                                    <!-- password -->
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" name="password1" id="password1"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="password1">Your
                                            password</label>
                                    </div>

                                    <!-- repeat password -->
                                    <div class="md-form form-sm mb-4">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" name="password2" id="password2"
                                            class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="password2">Repeat
                                            password</label>
                                    </div>
                                    <div class="text-center form-sm mt-2">
                                        <button type="submit" id="btnSignup" class="btn btn-info btn-rounded">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                                    </div>
                                </form>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a id="log-in" class="blue-text">Log In</a>
                                    </p>
                                </div>
                                <button type="button" class="btn btn-outline-info btn-rounded waves-effect ml-auto"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login / Register Form-->
</div>
<script src="js/home.js"></script>