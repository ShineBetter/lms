@extends('layout.dashboard.dashlayout.head')
@section('title','دوره های تایید نشده')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
<!-- end dashboard-sidebar -->
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
                            <form action="dashboard-purchase-history.html#" method="post" enctype="multipart/form-data">
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
                    <h3 class="widget-title">Purchase History</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Purchase History</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html" class="d-inline-block primary-color">
                                                                MERN Stack Master Course - Building your own Instagram
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                             <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html" class="d-inline-block primary-color">
                                                                The Ultimate Text-To-Video Creation Course
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-info text-white p-1">On Hold</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html" class="d-inline-block primary-color">
                                                                Ultimate Guide for the Next Generation of Affiliates
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-danger text-white p-1">Cancelled</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html" class="d-inline-block primary-color">
                                                                Complete Ethical Hacking Course: Zero to Hero
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-danger text-white p-1">Cancelled</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <div class="statement-header pb-4">
                                    <h3 class="widget-title font-size-18">Order Details</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Coupon Code</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Paid via</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li> Introduction Web Design with HTML</li>
                                                </ul>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>SNUGGLE323</li>
                                                </ul>
                                            </div>
                                        </td>
                                         <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>1</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>PayPal</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li> Introduction Web Design with HTML</li>
                                                </ul>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>SNUGGLE323</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>1</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>PayPal</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-bottom-0 pb-0 pt-0"></th>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pb-2">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li class="primary-color font-weight-semi-bold font-size-18">Total:</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0 pb-0 pb-2">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-bottom-0 pb-0 pt-0"></th>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0"></td>
                                        <td class="border-bottom-0 pb-0 pt-0">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li class="primary-color font-weight-semi-bold font-size-18">Total Paid:</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0 pb-0 pt-0">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="statement-table purchase-table refunds-table table-responsive">
                                <div class="statement-header pb-4">
                                    <h3 class="widget-title font-size-18">Refunds Details</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Refunds</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Refunded to</th>
                                        <th scope="col">Refund Type</th>
                                        <th scope="col">Credit Note</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li> Introduction Web Design with HTML</li>
                                                </ul>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>Alex Smith</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>1</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>PayPal</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
