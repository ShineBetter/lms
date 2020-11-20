@extends('layout.dashboard.dashlayout.head')
@section('title','دوره های ثبت نام شده')
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
                            <form action="dashboard-enrolled-courses.html#" method="post" enctype="multipart/form-data">
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
                    <h3 class="widget-title">Enrolled Courses</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Enrolled Courses</h3>
                        </div>
                       <div class="card-box-shared-body">
                           <div class="section-tab section-tab-2">
                               <ul class="nav nav-tabs" role="tablist" id="review">
                                   <li role="presentation">
                                       <a href="dashboard-enrolled-courses.html#all-course" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                           All Courses
                                       </a>
                                   </li>
                                   <li role="presentation">
                                       <a href="dashboard-enrolled-courses.html#active-course" role="tab" data-toggle="tab" aria-selected="false">
                                           Active Courses
                                       </a>
                                   </li>
                                   <li role="presentation">
                                       <a href="dashboard-enrolled-courses.html#completed-course" role="tab" data-toggle="tab" aria-selected="false">
                                           Completed Courses
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="dashboard-tab-content mt-5">
                               <div class="tab-content">
                                   <div role="tabpanel" class="tab-pane fade active show" id="all-course">
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">5/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="100%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">100%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding"></label>
                                                           <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good"></label>
                                                           <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good"></label>
                                                           <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor"></label>
                                                           <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">0/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="0%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">0%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star6" name="rating" value="5" /><label for="star6" title="Outstanding"></label>
                                                           <input type="radio" id="star7" name="rating" value="4" /><label for="star7" title="Very Good"></label>
                                                           <input type="radio" id="star8" name="rating" value="3" /><label for="star8" title="Good"></label>
                                                           <input type="radio" id="star9" name="rating" value="2" /><label for="star9" title="Poor"></label>
                                                           <input type="radio" id="star10" name="rating" value="1" /><label for="star10" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">2/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="30%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">30%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star11" name="rating" value="5" /><label for="star11" title="Outstanding"></label>
                                                           <input type="radio" id="star12" name="rating" value="4" /><label for="star12" title="Very Good"></label>
                                                           <input type="radio" id="star13" name="rating" value="3" /><label for="star13" title="Good"></label>
                                                           <input type="radio" id="star14" name="rating" value="2" /><label for="star14" title="Poor"></label>
                                                           <input type="radio" id="star15" name="rating" value="1" /><label for="star15" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                   </div><!-- end tab-pane-->
                                   <div role="tabpanel" class="tab-pane fade" id="active-course">
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">0/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="0%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">0%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star16" name="rating" value="5" /><label for="star16" title="Outstanding"></label>
                                                           <input type="radio" id="star17" name="rating" value="4" /><label for="star17" title="Very Good"></label>
                                                           <input type="radio" id="star18" name="rating" value="3" /><label for="star18" title="Good"></label>
                                                           <input type="radio" id="star19" name="rating" value="2" /><label for="star19" title="Poor"></label>
                                                           <input type="radio" id="star20" name="rating" value="1" /><label for="star20" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">2/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="30%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">30%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star21" name="rating" value="5" /><label for="star21" title="Outstanding"></label>
                                                           <input type="radio" id="star22" name="rating" value="4" /><label for="star22" title="Very Good"></label>
                                                           <input type="radio" id="star23" name="rating" value="3" /><label for="star23" title="Good"></label>
                                                           <input type="radio" id="star24" name="rating" value="2" /><label for="star24" title="Poor"></label>
                                                           <input type="radio" id="star25" name="rating" value="1" /><label for="star25" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                   </div><!-- end tab-pane-->
                                   <div role="tabpanel" class="tab-pane fade" id="completed-course">
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">5/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="100%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">100%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star26" name="rating" value="5" /><label for="star26" title="Outstanding"></label>
                                                           <input type="radio" id="star27" name="rating" value="4" /><label for="star27" title="Very Good"></label>
                                                           <input type="radio" id="star28" name="rating" value="3" /><label for="star28" title="Good"></label>
                                                           <input type="radio" id="star29" name="rating" value="2" /><label for="star29" title="Poor"></label>
                                                           <input type="radio" id="star30" name="rating" value="1" /><label for="star30" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                   </div><!-- end tab-pane-->
                               </div><!-- end tab-content -->
                           </div><!-- end dashboard-tab-content -->
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
<script src="js/wow.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/progress-bar.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/main.js"></script>
@endsection
