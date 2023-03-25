<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Signup | Vuesy - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <div class="auth-bg-basic d-flex align-items-center min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 py-5 px-3">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="text-center text-muted mb-2">
                            <div class="pb-3">
                                <a href="home.php">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Vuesy</span>
                                    </span>
                                </a>
                                <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience &amp; Interface Design Strategy Saas Solution</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-transparent shadow-none border-0">

                            <div class="card-body">
                                <div class="py-3">
                                    <div class="text-center">
                                        <h5 class="mb-0">Register Account</h5>
                                        <p class="text-muted mt-2">Get your free Vuesy account now.</p>
                                    </div>
                                    <form action ="home.php" class="mt-4 pt-2">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="email" class="form-control" id="input-email" placeholder="Enter Email" required="">
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div> 
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-envelope-alt"></i>
                                            </div>
                                        </div>
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter User Name">
                                            <label for="input-username">Username</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-users-alt"></i>
                                            </div>
                                        </div>
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="password" class="form-control" id="input-password" placeholder="Enter Password">
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-padlock"></i>
                                            </div>
                                        </div>
    
                                        <div class="py-1">
                                            <p class="mb-0">By registering you agree to the Vuesy <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
    
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-15 mb-4 text-muted fw-medium">- Or you can join with -</h5>
                                            </div>

                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-soft-primary waves-effect waves-light w-100">
                                                    <i class="bx bxl-facebook font-size-16 align-middle"></i> 
                                                </button>
                                                <button type="button" class="btn btn-soft-info waves-effect waves-light w-100">
                                                    <i class="bx bxl-linkedin font-size-16 align-middle"></i> 
                                                </button>
                                                <button type="button" class="btn btn-soft-danger waves-effect waves-light w-100">
                                                    <i class="bx bxl-google font-size-16 align-middle"></i> 
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mt-4 pt-3 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="auth-signin-basic.html" class="fw-semibold text-decoration-underline"> Login </a> </p>
                                        </div>
    
                                    </form><!-- end form -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Vuesy. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a></p>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div>
        <!-- end container fluid -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

    </body>
</html>
