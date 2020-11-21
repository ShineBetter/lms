
@extends('layout.dashboard.dashlayout.head')
@section('title','درامد')
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
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-block"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Withdraw</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Balance</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="balance-info">
                                <ul class="list-items pb-5">
                                    <li><h3 class="widget-title font-size-18">Current Balance</h3></li>
                                    <li>Your current balance is <span class="primary-color font-weight-semi-bold">$219.20 </span> ready to withdraw</li>
                                    <li><a href="dashboard-withdraw.html#" class="badge btn-primary p-1 text-white">Make a withdraw</a></li>
                                    <li>You will get paid by <span class="primary-color">Bank Transfer</span>, You can change your <a href="dashboard-withdraw.html#" class="primary-color-2">withdraw preference </a></li>
                                </ul>
                                 <ul class="list-items pb-5">
                                    <li><h3 class="widget-title font-size-18">Pending withdrawals</h3></li>
                                    <li>No withdrawals pending yet.</li>
                                </ul>
                            </div>
                            <div class="statement-table withdraw-table table-responsive mb-5">
                                <div class="statement-header pb-4">
                                    <h3 class="widget-title font-size-18">Completed Withdrawals</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Withdraw Method</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Approved at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                        <li>$55.00</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>Bank Transfer</li>
                                                        <li>Paypal</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019 12:20pm</li>
                                                        <li>July 6, 2019 11:20am</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019 1:20pm</li>
                                                        <li>July 6, 2019 12:20am</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                        <li>$55.00</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>Bank Transfer</li>
                                                        <li>PayPal</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019 12:20pm</li>
                                                        <li>July 6, 2019 11:20am</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info withdraw-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019 1:20pm</li>
                                                        <li>July 6, 2019 12:20am</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="statement-table withdraw-table table-responsive">
                                <div class="statement-header pb-4">
                                    <h3 class="widget-title font-size-18">Rejected Withdrawals</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Withdraw Method</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Approved at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                    <li>$55.00</li>
                                                </ul>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>Bank Transfer</li>
                                                    <li>PayPal</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019 12:20pm</li>
                                                    <li>July 6, 2019 11:20am</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019 1:20pm</li>
                                                    <li>July 6, 2019 12:20am</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>$79.00</li>
                                                    <li>$55.00</li>
                                                </ul>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>Bank Transfer</li>
                                                    <li>Paypal</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019 12:20pm</li>
                                                    <li>July 6, 2019 11:20am</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info withdraw-info">
                                                <ul class="list-items">
                                                    <li>July 12, 2019 1:20pm</li>
                                                    <li>July 6, 2019 12:20am</li>
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
