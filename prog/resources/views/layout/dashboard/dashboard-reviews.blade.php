@extends('layout.dashboard.dashlayout.head')
@section('title','دوره های تایید شده')
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
                            <form action="dashboard-reviews.html#" method="post" enctype="multipart/form-data">
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
                    <h3 class="widget-title">Reviews</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Reviews</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <ul class="comments-list review-list">
                                <li>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <img class="avatar__img" alt="" src="images/team7.jpg">
                                        </div>
                                        <div class="comment-body padding-right-50px w-100">
                                            <div class="meta-data">
                                                <h3 class="comment__author"><a href="dashboard-reviews.html#">Microsoft SQL Server 2019 for Everyone</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <ul class="review-stars review-stars1">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul>
                                                    <p class="comment__date ml-1">by <a href="dashboard-reviews.html#" class="primary-color-2 mr-1">John doe</a>2 days ago</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.
                                            </p>
                                            <div class="comment-reply">
                                                <a class="theme-btn" href="dashboard-reviews.html#" data-toggle="modal" data-target=".modal-action-form">
                                                    <span class="la la-mail-reply"></span> Reply to this review
                                                </a>
                                            </div>
                                        </div>
                                        <div class="msg-action-dot comment-action-dot">
                                            <div class="dropdown">
                                                <a class="action-dot ml-1" href="dashboard-reviews.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                        Edit <i class="ml-auto la la-edit"></i>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                        Share <i class="ml-auto la la-share-alt"></i>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                        Delete <i class="ml-auto la la-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-reply">
                                        <li>
                                            <div class="comment">
                                                <div class="comment-avatar">
                                                    <img class="avatar__img" alt="" src="images/team8.jpg">
                                                </div>
                                                <div class="comment-body padding-right-50px w-100">
                                                    <div class="meta-data">
                                                        <h3 class="comment__author">Author response</h3>
                                                        <div class="meta-data-inner d-flex">
                                                            <p class="comment__date">2 days ago</p>
                                                        </div>
                                                    </div>
                                                    <p class="comment-content">
                                                     Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.
                                                    </p>
                                                    <div class="comment-reply">
                                                        <a class="theme-btn" href="dashboard-reviews.html#" data-toggle="modal" data-target=".modal-action-form">
                                                            <span class="la la-mail-reply"></span> Reply to this review
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="msg-action-dot comment-action-dot">
                                                    <div class="dropdown">
                                                        <a class="action-dot ml-1" href="dashboard-reviews.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="la la-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                                Edit <i class="ml-auto la la-edit"></i>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                                Delete <i class="ml-auto la la-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                     <div class="comment">
                                        <div class="comment-avatar">
                                            <img class="avatar__img" alt="" src="images/team8.jpg">
                                        </div>
                                        <div class="comment-body padding-right-50px w-100">
                                            <div class="meta-data">
                                                <h3 class="comment__author"><a href="dashboard-reviews.html#">Introduction Web Design with HTML</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <ul class="review-stars review-stars1">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <p class="comment__date ml-1">by <a href="dashboard-reviews.html#" class="primary-color-2 mr-1">John doe</a>Yesterday</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.
                                            </p>
                                            <div class="comment-reply">
                                                <a class="theme-btn" href="dashboard-reviews.html#" data-toggle="modal" data-target=".modal-action-form">
                                                    <span class="la la-mail-reply"></span> Reply to this review
                                                </a>
                                            </div>
                                        </div>
                                         <div class="msg-action-dot comment-action-dot">
                                             <div class="dropdown">
                                                 <a class="action-dot ml-1" href="dashboard-reviews.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <i class="la la-ellipsis-v"></i>
                                                 </a>
                                                 <div class="dropdown-menu" style="">
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Edit <i class="ml-auto la la-edit"></i>
                                                     </a>
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Share <i class="ml-auto la la-share-alt"></i>
                                                     </a>
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Delete <i class="ml-auto la la-trash"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                     <div class="comment">
                                        <div class="comment-avatar">
                                            <img class="avatar__img" alt="" src="images/team9.jpg">
                                        </div>
                                        <div class="comment-body padding-right-50px w-100">
                                            <div class="meta-data">
                                                <h3 class="comment__author"><a href="dashboard-reviews.html#">Sketch: Creating Responsive SVG</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <ul class="review-stars review-stars1">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <p class="comment__date ml-1">by <a href="dashboard-reviews.html#" class="primary-color-2 mr-1">John doe</a>Today</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.
                                            </p>
                                            <div class="comment-reply">
                                                <a class="theme-btn" href="dashboard-reviews.html#" data-toggle="modal" data-target=".modal-action-form">
                                                    <span class="la la-mail-reply"></span> Reply to this review
                                                </a>
                                            </div>
                                        </div>
                                         <div class="msg-action-dot comment-action-dot">
                                             <div class="dropdown">
                                                 <a class="action-dot ml-1" href="dashboard-reviews.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <i class="la la-ellipsis-v"></i>
                                                 </a>
                                                 <div class="dropdown-menu" style="">
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Edit <i class="ml-auto la la-edit"></i>
                                                     </a>
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Share <i class="ml-auto la la-share-alt"></i>
                                                     </a>
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Delete <i class="ml-auto la la-trash"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                     <div class="comment">
                                        <div class="comment-avatar">
                                            <img class="avatar__img" alt="" src="images/team7.jpg">
                                        </div>
                                        <div class="comment-body padding-right-50px w-100">
                                            <div class="meta-data">
                                                <h3 class="comment__author"><a href="dashboard-reviews.html#">How to be a DJ? Make Electronic Music</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <ul class="review-stars review-stars1">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                        <li><span class="la la-star-o"></span></li>
                                                    </ul>
                                                    <p class="comment__date ml-1">by <a href="dashboard-reviews.html#" class="primary-color-2 mr-1">John doe</a>11:45am</p>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.
                                            </p>
                                            <div class="comment-reply">
                                                <a class="theme-btn" href="dashboard-reviews.html#" data-toggle="modal" data-target=".modal-action-form">
                                                    <span class="la la-mail-reply"></span> Reply to this review
                                                </a>
                                            </div>
                                        </div>
                                         <div class="msg-action-dot comment-action-dot">
                                             <div class="dropdown">
                                                 <a class="action-dot ml-1" href="dashboard-reviews.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <i class="la la-ellipsis-v"></i>
                                                 </a>
                                                 <div class="dropdown-menu" style="">
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Edit <i class="ml-auto la la-edit"></i>
                                                     </a>
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Share <i class="ml-auto la la-share-alt"></i>
                                                     </a>
                                                     <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html#">
                                                         Delete <i class="ml-auto la la-trash"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="page-navigation-wrap mt-4 mb-4">
                                <div class="page-navigation-inner d-inline-block">
                                    <div class="page-navigation">
                                        <a href="dashboard-reviews.html#" class="page-go page-prev">
                                            <i class="la la-arrow-left"></i>
                                        </a>
                                        <ul class="page-navigation-nav">
                                            <li><a href="dashboard-reviews.html#" class="page-go-link">1</a></li>
                                            <li class="active"><a href="dashboard-reviews.html#" class="page-go-link">2</a></li>
                                            <li><a href="dashboard-reviews.html#" class="page-go-link">3</a></li>
                                            <li><a href="dashboard-reviews.html#" class="page-go-link">4</a></li>
                                        </ul>
                                        <a href="dashboard-reviews.html#" class="page-go page-next">
                                            <i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end page-navigation-wrap -->
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

<!-- end modal-shared -->
<div class="modal-form">
    <div class="modal fade modal-action-form" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-top">
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                    <h4 class="modal-title widget-title font-size-20">Reply to review</h4>
                </div>
                <div class="contact-form-action">
                    <form method="post">
                        <div class="input-box">
                            <div class="form-group">
                                <i class="la la-pencil input-icon"></i>
                                <textarea class="message-control form-control" name="message" placeholder="Write message here..." required></textarea>
                            </div>
                        </div>
                        <div class="btn-box text-right">
                            <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="theme-btn" >reply</button>
                        </div>
                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->


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
<script src="js/wow.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/progress-bar.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/main.js"></script>
@endsection
