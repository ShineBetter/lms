@extends('webSit.partial._master')
@section('main.content')

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="section__title">Login</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="index.html">home</a></li>
                            <li class="active__list-item">pages</li>
                            <li>Login</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
           START LOGIN AREA
    ================================= -->
    <section class="login-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title text-center">
                            <h3 class="widget-title font-size-25">Login to Your Account!</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-4 column-td-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-google mr-2"></i>Google
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-facebook mr-2"></i>Facebook
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-twitter mr-2"></i>Twitter
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div class="account-assist mt-3 margin-bottom-35px text-center">
                                                <p class="account__desc">or</p>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Email or Username<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="text" placeholder="Email, or username">
                                                    <span class="la la-envelope input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Password<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="text" placeholder="Password">
                                                    <span class="la la-lock input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="custom-checkbox d-flex justify-content-between">
                                                    <input type="checkbox" id="chb1">
                                                    <label for="chb1">Remember Me</label>
                                                    <a href="recover.html" class="primary-color-2"> Forgot my password?</a>
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12 ">
                                            <div class="btn-box">
                                                <button class="theme-btn" type="submit">login account</button>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <p class="mt-4">Don't have an account? <a href="sign-up.html" class="primary-color-2">Register</a></p>
                                        </div><!-- end col-md-12 -->
                                    </div><!-- end row -->
                                </form>
                            </div><!-- end contact-form -->
                        </div>
                    </div>
                </div><!-- end col-lg-7 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    @endsection
