@extends('layout.dashboard.dashlayout.head')
@section('title','تنظیمات')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                        <div class="user-bread-content d-flex align-items-center">
                            <div class="bread-img-wrap">
                                <img src="images/team10.jpg" alt="">
                            </div>
                            <div class="section-heading">
                                <h2 class="section__title font-size-30">Howdy, Alex Smith</h2>
                                <div class="rating-wrap d-flex mt-2">
                                    <ul class="review-stars">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                    <span class="star-rating-wrap">
                                        <span class="star__rating">4.2</span>
                                        <span class="star__count">(70)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="upload-btn-box">
                            <form action="dashboard-settings.html#" method="post" enctype="multipart/form-data">
                                <input type="file" name="files[]" class="filer_input" multiple="multiple">
                            </form>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-block"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Settings</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Settings info</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="section-tab section-tab-2">
                                <ul class="nav nav-tabs" role="tablist" id="review">
                                    <li role="presentation">
                                        <a href="dashboard-settings.html#profile" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                            Profile
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="dashboard-settings.html#password" role="tab" data-toggle="tab" aria-selected="false">
                                             Password
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="dashboard-settings.html#change-email" role="tab" data-toggle="tab" aria-selected="false">
                                            Change Email
                                        </a>
                                    </li>
                                     <li role="presentation">
                                        <a href="dashboard-settings.html#withdraw" role="tab" data-toggle="tab" aria-selected="false">
                                            Withdraw
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="dashboard-settings.html#account" role="tab" data-toggle="tab" aria-selected="false">
                                            Account
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dashboard-tab-content mt-5">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active show" id="profile">
                                        <div class="user-form">
                                            <div class="user-profile-action-wrap mb-5">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">Profile Settings</h3>
                                                <div class="user-profile-action d-flex align-items-center">
                                                    <div class="user-pro-img">
                                                        <img src="images/team11.jpg" alt="user-image" class="img-fluid radius-round border">
                                                    </div>
                                                    <div class="upload-btn-box course-photo-btn">
                                                        <form action="dashboard-settings.html#" method="post" enctype="multipart/form-data">
                                                            <input type="file" name="files[]" class="filer_input" multiple="multiple">
                                                        </form>
                                                        <p>Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg &amp; .png</p>
                                                        <button class="theme-btn mt-3" type="button">Remove Photo</button>
                                                    </div>
                                                </div><!-- end user-profile-action -->
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">First Name<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="Alex">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Last Name<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="Smith">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">User Name<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="alex-admin">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Email Address<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="alexsmith@gmail.com">
                                                                    <span class="la la-envelope input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="(91) 7547 622250">
                                                                    <span class="la la-phone input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="input-box">
                                                                <label class="label-text">Bio<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <textarea class="message-control form-control" name="message">Hello! I am a Alex Smith, Washington area graphic designer with over 6 years of graphic design experience. I specialize in designing infographics, icons, brochures, and flyers.</textarea>
                                                                    <span class="la la-pencil input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">save changes</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                    <div role="tabpanel" class="tab-pane fade" id="password">
                                        <div class="user-form padding-bottom-60px">
                                            <div class="user-profile-action-wrap">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">Change Password</h3>
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Old Password<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="Old password">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">New Password<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="New password">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Confirm New Password<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="Confirm new password">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">Change password</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                        <div class="section-block"></div>
                                        <div class="user-form padding-top-60px">
                                            <div class="user-profile-action-wrap padding-bottom-20px">
                                                <h3 class="widget-title font-size-18 padding-bottom-10px">Forgot Password then Recover Password</h3>
                                                <p class="line-height-26">Enter the email of your account to reset password. Then you will receive a link to email
                                                    <br> to reset the password.If you have any issue about reset password <a href="dashboard-settings.html#" class="primary-color-2">contact us</a></p>
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Email Address<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="Enter email address">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">recover password</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                    <div role="tabpanel" class="tab-pane fade" id="change-email">
                                        <div class="user-form">
                                            <div class="user-profile-action-wrap">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">Change email</h3>
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Old Email<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="Old email">
                                                                    <span class="la la-envelope input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">New Email<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="New email">
                                                                    <span class="la la-envelope input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Confirm New Email<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" placeholder="Confirm new email">
                                                                    <span class="la la-envelope input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">save changes</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                    <div role="tabpanel" class="tab-pane fade" id="withdraw">
                                        <div class="user-profile-action-wrap">
                                            <h3 class="widget-title font-size-18 padding-bottom-40px">Select a Withdraw Method</h3>
                                        </div><!-- end user-profile-action-wrap -->
                                        <div class="withdraw-method-wrap">
                                            <div class="row">
                                                <div class="col-lg-2 column-td-half">
                                                    <div class="payment-option">
                                                        <label for="radio-1" class="radio-trigger">
                                                            <input type="radio" id="radio-1" name="radio">
                                                            <span class="checkmark"></span>
                                                            <span class="widget-title font-size-18">
                                                                Bank Transfer
                                                                <span class="d-block primary-color-3 font-weight-medium font-size-13 line-height-18">Min withdraw $50.00</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div><!-- end col-lg-2 -->
                                                 <div class="col-lg-2 column-td-half">
                                                    <div class="payment-option">
                                                        <label for="radio-2" class="radio-trigger">
                                                            <input type="radio" id="radio-2" name="radio">
                                                            <span class="checkmark"></span>
                                                            <span class="widget-title font-size-18">
                                                                E-Check
                                                                <span class="d-block primary-color-3 font-weight-medium font-size-13 line-height-18">Min withdraw $50.00</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div><!-- end col-lg-2 -->
                                                <div class="col-lg-2 column-td-half">
                                                    <div class="payment-option">
                                                        <label for="radio-3" class="radio-trigger">
                                                            <input type="radio" id="radio-3" name="radio">
                                                            <span class="checkmark"></span>
                                                            <span class="widget-title font-size-18">
                                                                Payoneer
                                                                <span class="d-block primary-color-3 font-weight-medium font-size-13 line-height-18">Min withdraw $50.00</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div><!-- end col-lg-2 -->
                                                <div class="col-lg-2 column-td-half">
                                                    <div class="payment-option">
                                                        <label for="radio-4" class="radio-trigger">
                                                            <input type="radio" id="radio-4" name="radio">
                                                            <span class="checkmark"></span>
                                                            <span class="widget-title font-size-18">
                                                                PayPal
                                                                <span class="d-block primary-color-3 font-weight-medium font-size-13 line-height-18">Min withdraw $50.00</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div><!-- end col-lg-2 -->
                                                 <div class="col-lg-2 column-td-half">
                                                    <div class="payment-option">
                                                        <label for="radio-5" class="radio-trigger">
                                                            <input type="radio" id="radio-5" name="radio">
                                                            <span class="checkmark"></span>
                                                            <span class="widget-title font-size-18">
                                                                Skrill
                                                                <span class="d-block primary-color-3 font-weight-medium font-size-13 line-height-18">Min withdraw $50.00</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div><!-- end col-lg-2 -->
                                                <div class="col-lg-2 column-td-half">
                                                    <div class="payment-option">
                                                        <label for="radio-6" class="radio-trigger">
                                                            <input type="radio" id="radio-6" name="radio">
                                                            <span class="checkmark"></span>
                                                            <span class="widget-title font-size-18">
                                                                Stripe
                                                                <span class="d-block primary-color-3 font-weight-medium font-size-13 line-height-18">Min withdraw $50.00</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div><!-- end col-lg-2 -->
                                            </div><!-- end row -->
                                        </div>
                                        <div class="user-form padding-top-50px">
                                            <div class="user-profile-action-wrap">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">Account info</h3>
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Account Name<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="Alex Smith">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Account Number<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="3275476222500">
                                                                    <span class="la la-pencil input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Bank Name<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="South State Bank">
                                                                    <span class="la la-bank input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                         <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">IBAN<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="3030">
                                                                    <span class="la la-pencil input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                         <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">BIC/SWIFT<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="text" value="CDDHDBBL">
                                                                    <span class="la la-pencil input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">save withdraw account</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                    <div role="tabpanel" class="tab-pane fade" id="account">
                                        <div class="user-profile-action-wrap">
                                            <h3 class="widget-title font-size-18 padding-bottom-40px">My Account</h3>
                                        </div><!-- end user-profile-action-wrap -->
                                       <div class="user-account-wrap padding-bottom-40px">
                                           <div class="row">
                                               <div class="col-lg-4">
                                                   <div class="deactivate-account d-flex align-items-center">
                                                       <div class="payment-option">
                                                           <label for="radio-7" class="radio-trigger mb-0">
                                                               <input type="radio" id="radio-7" name="radio">
                                                               <span class="checkmark"></span>
                                                               <span class="widget-title font-size-18">Deactivate Account</span>
                                                           </label>
                                                       </div>
                                                       <div class="btn-box ml-3">
                                                           <button class="theme-btn line-height-40 font-size-14">Deactivate</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                        <div class="section-block"></div>
                                        <div class="user-profile-action-wrap padding-top-40px">
                                            <div class="delete-account-wrap">
                                                <h3 class="widget-title font-size-18 pb-2 text-danger">Delete Account Permanently</h3>
                                                <p><span class="text-warning">Warning:</span> Once you delete your account, there is no going back. Please be certain.</p>
                                                <div class="btn-box mt-4">
                                                    <button class="theme-btn line-height-40 font-size-14" data-toggle="modal" data-target=".account-delete-modal">Delete My Account</button>
                                                </div>
                                            </div>
                                        </div><!-- end user-profile-action-wrap -->
                                    </div><!-- end tab-pane-->
                                </div><!-- end tab-content -->
                            </div><!-- end dashboard-tab-content -->
                        </div>
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content mt-0 pt-0 pb-4 border-top-0 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copy__desc">&copy; 2020 Aduca. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </div><!-- end copyright-content -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white" >Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/progress-bar.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/main.js"></script>
@endsection
