@extends('webSit.layout.head')
@section('cnt')
    @php
        $loader="dont";


    @endphp
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area my-courses-bread">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content my-courses-bread-content">
                    <div class="section-heading">
                        <h2 class="section__title">My courses</h2>
                    </div>
                </div><!-- end breadcrumb-content -->
                <div class="my-courses-tab">
                    <div class="section-tab section-tab-2">
                        <ul class="nav nav-tabs" role="tablist" id="review">
                            <li role="presentation">
                                <a href="my-courses.html#all-courses" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                    All Courses
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="my-courses.html#collections" role="tab" data-toggle="tab" aria-selected="false">
                                    Collections
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="my-courses.html#wishlist" role="tab" data-toggle="tab" aria-selected="false">
                                   Wishlist
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="my-courses.html#archived" role="tab" data-toggle="tab" aria-selected="false">
                                    Archived
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START MY COURSES
================================= -->
<section class="my-courses-area padding-top-30px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="my-course-content-wrap">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="all-courses">
                            <div class="course-alert-info">
                                <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                    <i class="la la-users"></i> <a href="my-courses.html#" class="alert-link">Share Aduca with friends</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div><!-- end course-alert-info -->
                            <div class="my-course-content-body">
                                <div class="lecture-overview-item">
                                    <div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
                                        <div class="my-course-sort-by-content">
                                            <div class="question-overview-filter-item">
                                                <span class="badge font-size-14 font-weight-semi-bold">Sort by</span>
                                                <div class="sort-ordering user-form-short mt-2">
                                                    <select class="sort-ordering-select">
                                                        <option value="0" selected="">Recently Accessed</option>
                                                        <option value="1">Recently Enrolled</option>
                                                        <option value="2">Title: A-to-Z</option>
                                                        <option value="3">Title: Z-to-A</option>
                                                        <option value="4">Completion: 0% to 100%</option>
                                                        <option value="5">Completion: 100% to 0%</option>
                                                    </select>
                                                </div>
                                            </div><!-- end question-overview-filter-item -->
                                        </div><!-- end my-course-sort-by-content -->
                                        <div class="my-course-filter-by-content">
                                            <div class="question-overview-filter-item">
                                                <span class="badge font-size-14 font-weight-semi-bold">Filter by</span>
                                                <div class="d-flex align-items-center mt-2">
                                                    <div class="sort-ordering user-form-short">
                                                        <select class="sort-ordering-select">
                                                            <option value="0" selected="">Categories</option>
                                                            <option value="1">Favorites</option>
                                                            <option value="2">Archived</option>
                                                            <option value="3">All Categories</option>
                                                            <option value="4">Development</option>
                                                            <option value="5">Design</option>
                                                            <option value="6">Business</option>
                                                            <option value="7">Marketing</option>
                                                            <option value="8">IT & Software</option>
                                                            <option value="9">Finance & Accounting</option>
                                                            <option value="10">Personal Development</option>
                                                            <option value="11">Office Productivity</option>
                                                            <option value="12">Teaching & Academics</option>
                                                            <option value="13">Lifestyle</option>
                                                            <option value="14">Aduca Free Resource Center</option>
                                                        </select>
                                                    </div>
                                                    <div class="sort-ordering user-form-short">
                                                        <select class="sort-ordering-select">
                                                            <option value="0" selected="">Progress</option>
                                                            <option value="1">Not Started</option>
                                                            <option value="2">In Progress</option>
                                                            <option value="3">Completed</option>
                                                        </select>
                                                    </div>
                                                    <div class="sort-ordering user-form-short">
                                                        <select class="sort-ordering-select">
                                                            <option selected>All Instructor</option>
                                                            <option value="1">Aduca Instructor Team</option>
                                                            <option value="1">Aatef Jaberi</option>
                                                            <option value="2">Abdul Wali</option>
                                                            <option value="3">Abhay Talreja</option>
                                                            <option value="4">Akshay Goel</option>
                                                            <option value="5">Al Sweigart</option>
                                                            <option value="6">Alagappan K</option>
                                                            <option value="7">Bluelime Learning Solutions</option>
                                                            <option value="8">Boris Paskhaver</option>
                                                            <option value="9">Brent Dalley</option>
                                                            <option value="10">Brian Jackson</option>
                                                            <option value="11">Bruce Chamoff</option>
                                                            <option value="12">Carl Heaton</option>
                                                            <option value="13">Chad Tennant</option>
                                                            <option value="14">Chris Lele</option>
                                                            <option value="15">Daniel Kalish</option>
                                                            <option value="16">Daniel White</option>
                                                            <option value="17">Darrel Wilson</option>
                                                            <option value="18">EDUmobile Academy</option>
                                                            <option value="19">Eduonix Learning Solutions</option>
                                                            <option value="20">Eduonix-Tech</option>
                                                            <option value="21">Ermin Kreponic</option>
                                                            <option value="22">Fahad Chaudhry</option>
                                                            <option value="23">Federico Fort</option>
                                                            <option value="24">Frahaan Hussain</option>
                                                            <option value="25">Gabriel Both</option>
                                                            <option value="26">Gandhi Kumarasamy Sezhian</option>
                                                            <option value="27">Hayley - Creative Mind Ch</option>
                                                            <option value="28">Hussein Al Rubaye</option>
                                                            <option value="29">Infinite Skills</option>
                                                            <option value="30">Irfan Dayan</option>
                                                            <option value="31">James Canzanella</option>
                                                            <option value="32">James G</option>
                                                            <option value="33">Kawser Ahmed</option>
                                                            <option value="34">Kraig Mathias</option>
                                                            <option value="35">Krisztina Rudnay</option>
                                                            <option value="36">Laurence Svekis</option>
                                                            <option value="37">Lawrence Kim</option>
                                                            <option value="17">M Darwish</option>
                                                            <option value="38">Maggie Osama</option>
                                                            <option value="39">Nader Hantash</option>
                                                            <option value="40">Naeem Hussain</option>
                                                            <option value="41">Phil Ebiner</option>
                                                            <option value="42">Rufeena Jones S</option>
                                                            <option value="43">Richard Miles</option>
                                                            <option value="44">Sandor Kiss</option>
                                                            <option value="45">Saranya Srinidhi</option>
                                                            <option value="46">Think Forward Online Training</option>
                                                            <option value="47">Tim Sharp</option>
                                                            <option value="48">Usman Raoof</option>
                                                            <option value="49">Victoria White</option>
                                                            <option value="50">Wayne Walker</option>
                                                            <option value="51">Yohann Taieb</option>
                                                            <option value="52">Zac Johnson</option>
                                                            <option value="53">Zach Miller</option>
                                                        </select>
                                                    </div>
                                                    <div class="reset-btn-box">
                                                        <button class="theme-btn" type="button">Reset</button>
                                                    </div>
                                                </div>
                                            </div><!-- end question-overview-filter-item -->
                                        </div><!-- end my-course-filter-by-content -->
                                        <div class="my-course-search-content">
                                            <div class="question-overview-filter-item">
                                                <span class="badge font-size-14 font-weight-semi-bold">Search</span>
                                                <div class="contact-form-action mt-2">
                                                    <form method="post">
                                                        <div class="input-box">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control" type="text" name="search" placeholder="Search courses">
                                                                <span class="la la-search search-icon"></span>
                                                            </div>
                                                        </div><!-- end input-box -->
                                                    </form>
                                                </div><!-- end contact-form-action -->
                                            </div><!-- end question-overview-filter-item -->
                                        </div><!-- end my-course-search-content -->
                                    </div>
                                </div><!-- end lecture-overview-item -->
                                <div class="my-course-container">
                                    <div class="row">
                                         <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img8.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                                <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li><p class="dropdown-header pt-0 pb-0 primary-color">Collections</p></li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Javascript</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Business</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="section-block mt-2 mb-2"></div>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                            Share <i class="ml-auto la la-share"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">
                                                                            Create New Collection <i class="ml-auto la la-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                            <i class="ml-auto la la-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                            <i class="ml-auto la la-archive"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">The Complete Full-Stack JavaScript Course!</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">Joseph Delgadillo</a>
                                                        <span>, Internet Marketer & Business Innovator</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="70%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">70%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                          <i class="la la-star mr-1"></i>Leave a Rating
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                         <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img9.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                                <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li><p class="dropdown-header pt-0 pb-0 primary-color">Collections</p></li>
                                                                    <li>
                                                                        <p class="dropdown-header pt-0 pb-3">You have no collections</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="section-block mb-2"></div>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                            Share <i class="ml-auto la la-share"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">
                                                                            Create New Collection <i class="ml-auto la la-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                            <i class="ml-auto la la-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                            <i class="ml-auto la la-archive"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">Microsoft SQL Server 2019 for Everyone</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">Hussain Rubaye</a>
                                                        <span>, Software Engineer and Developer</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="0%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">0%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="lesson-details.html" class="btn rating-btn">
                                                            <i class="la la-eye mr-1"></i>Start course
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                         <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img10.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                                <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li><p class="dropdown-header pt-0 pb-0 primary-color">Collections</p></li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Javascript</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Business</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="section-block mt-2 mb-2"></div>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                            Share <i class="ml-auto la la-share"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">
                                                                            Create New Collection <i class="ml-auto la la-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                            <i class="ml-auto la la-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                            <i class="ml-auto la la-archive"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">WordPress for Beginners – Master WordPress</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">alex smith</a>
                                                        <span>, Developer, Team Lead, Software Consultant, Loves Technology</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="0%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">0%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="lesson-details.html" class="btn rating-btn">
                                                             <i class="la la-eye mr-1"></i>Start course
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                         <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img11.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                                <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li><p class="dropdown-header pt-0 pb-0 primary-color">Collections</p></li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Javascript</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Business</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="section-block mt-2 mb-2"></div>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                            Share <i class="ml-auto la la-share"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">
                                                                            Create New Collection <i class="ml-auto la la-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                            <i class="ml-auto la la-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                            <i class="ml-auto la la-archive"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">User Experience Design - Adobe XD UI UX Design</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">Luise Zambarkji</a>
                                                        <span>, Digital Marketing Legend and CEO of FirstLookAi Company</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="3%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">3%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                          <i class="la la-star mr-1"></i>Leave a Rating
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                         <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img12.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                                <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li><p class="dropdown-header pt-0 pb-0 primary-color">Collections</p></li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Javascript</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Business</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="section-block mt-2 mb-2"></div>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                            Share <i class="ml-auto la la-share"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">
                                                                            Create New Collection <i class="ml-auto la la-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                            <i class="ml-auto la la-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                            <i class="ml-auto la la-archive"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">The Complete Digital finance Marketing Course</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">David Doe</a>
                                                        <span>, Digital Marketing Legend and CEO of FirstLookAi Company</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="10%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">10%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                          <i class="la la-star mr-1"></i>Leave a Rating
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                         <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img13.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                <style type="text/css">
                                                                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                    .st1{fill:#FFFFFF;}
                                                                </style>
                                                                <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li><p class="dropdown-header pt-0 pb-0 primary-color">Collections</p></li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Javascript</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="dropdown-item">
                                                                            <a href="javascript:void(0)" class="collection-link d-flex align-items-center justify-content-between">
                                                                                <span>Business</span>
                                                                                <span class="la la-check collection-icon"></span>
                                                                            </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="section-block mt-2 mb-2"></div>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".share-modal-form">
                                                                            Share <i class="ml-auto la la-share"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" data-toggle="modal" data-target=".create-collection-modal-form">
                                                                            Create New Collection <i class="ml-auto la la-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Unfavorite" data-text-original="Favorite">Favorite</span>
                                                                            <i class="ml-auto la la-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                                                                            <span class="swapping-btn w-100" data-text-swap="Archived" data-text-original="Archive">Archive</span>
                                                                            <i class="ml-auto la la-archive"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">Complete Python Bootcamp: Go from zero to hero</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">Kamran Adi</a>
                                                        <span>, Digital Marketing Legend and CEO of FirstLookAi Company</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="70%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">70%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                          <i class="la la-star mr-1"></i>Leave a Rating
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                    </div>
                                </div>
                                <div class="page-navigation-wrap mt-4 text-center">
                                    <div class="page-navigation-inner d-inline-block">
                                        <div class="page-navigation">
                                            <a href="my-courses.html#" class="page-go page-prev">
                                                <i class="la la-arrow-left"></i>
                                            </a>
                                            <ul class="page-navigation-nav">
                                                <li><a href="my-courses.html#" class="page-go-link">1</a></li>
                                                <li class="active"><a href="my-courses.html#" class="page-go-link">2</a></li>
                                                <li><a href="my-courses.html#" class="page-go-link">3</a></li>
                                                <li><a href="my-courses.html#" class="page-go-link">4</a></li>

                                            </ul>
                                            <a href="my-courses.html#" class="page-go page-next">
                                                <i class="la la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="font-size-14 mt-3">Showing 1-6 of 14 courses</p>
                                </div><!-- end page-navigation-wrap -->
                            </div>
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="collections">
                            <div class="my-collection-wrap">
                                <div class="my-collection-item">
                                    <div class="my-collection-info">
                                        <div class="d-flex align-items-center pb-2">
                                            <h3 class="widget-title">Javascript</h3>
                                            <div class="my-collection-action-wrap ml-2">
                                                <span class="la la-edit icon-element" title="Edit" data-toggle="modal" data-target=".edit-collection-modal-form"></span>
                                                <span class="la la-trash icon-element" title="Delete" data-toggle="modal" data-target=".account-delete-modal"></span>
                                            </div>
                                        </div>
                                        <p>Leading the basics fundamentals</p>
                                    </div>
                                    <div class="my-collection-card-body padding-top-35px">
                                        <div class="row">
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="/images/img8.jpg" alt="">
                                                            <div class="play-button">
                                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                    <g>
                                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                        Remove from collection <i class="la la-eye-slash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">The Complete Full-Stack JavaScript Course!</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">Joseph Delgadillo</a>
                                                            <span>, Internet Marketer & Business Innovator</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="70%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">70%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                                <i class="la la-star mr-1"></i>Leave a Rating
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="/images/img9.jpg" alt="">
                                                            <div class="play-button">
                                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                    <g>
                                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                        Remove from collection <i class="la la-eye-slash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">Modern JavaScript From The Beginning</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">Hussain Rubaye</a>
                                                            <span>, Software Engineer and Developer</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="0%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">0%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="lesson-details.html" class="btn rating-btn">
                                                                <i class="la la-eye mr-1"></i>Start course
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="/images/img10.jpg" alt="">
                                                            <div class="play-button">
                                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                    <g>
                                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                        Remove from collection <i class="la la-eye-slash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">The Complete JavaScript Course 2020: Build Real Projects!</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">alex smith</a>
                                                            <span>, Developer, Team Lead, Software Consultant, Loves Technology</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="0%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">0%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="lesson-details.html" class="btn rating-btn">
                                                                <i class="la la-eye mr-1"></i>Start course
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end my-collection-item -->
                                <div class="my-collection-item">
                                    <div class="my-collection-info">
                                        <div class="d-flex align-items-center pb-2">
                                            <h3 class="widget-title">Business</h3>
                                            <div class="my-collection-action-wrap ml-2">
                                                <span class="la la-edit icon-element" title="Edit" data-toggle="modal" data-target=".edit-collection-modal-form"></span>
                                                <span class="la la-trash icon-element" title="Delete" data-toggle="modal" data-target=".account-delete-modal"></span>
                                            </div>
                                        </div>
                                        <p>Leading the basics fundamentals</p>
                                    </div>
                                    <div class="my-collection-card-body padding-top-35px">
                                        <div class="row">
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="/images/img8.jpg" alt="">
                                                            <div class="play-button">
                                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                    <g>
                                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                        Remove from collection <i class="la la-eye-slash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">An Entire MBA in 1 Course:Award Winning Business School Prof</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">Joseph Delgadillo</a>
                                                            <span>, Internet Marketer & Business Innovator</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="70%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">70%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                                <i class="la la-star mr-1"></i>Leave a Rating
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="/images/img9.jpg" alt="">
                                                            <div class="play-button">
                                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                    <g>
                                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                        Remove from collection <i class="la la-eye-slash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">The Complete Financial Analyst Course 2020</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">Hussain Rubaye</a>
                                                            <span>, Software Engineer and Developer</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="0%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">0%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="lesson-details.html" class="btn rating-btn">
                                                                <i class="la la-eye mr-1"></i>Start course
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-td-half">
                                                <div class="card-item">
                                                    <div class="card-image">
                                                        <a href="lesson-details.html" class="card__img">
                                                            <img src="/images/img10.jpg" alt="">
                                                            <div class="play-button">
                                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                    <g>
                                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="msg-action-dot my-course-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                        Remove from collection <i class="la la-eye-slash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card-image -->
                                                    <div class="card-content p-4">
                                                        <h3 class="card__title mt-0">
                                                            <a href="lesson-details.html">Ninja Writing: The Four Levels Of Writing Mastery</a>
                                                        </h3>
                                                        <p class="card__author">
                                                            <a href="teacher-detail.html">alex smith</a>
                                                            <span>, Developer, Team Lead, Software Consultant, Loves Technology</span>
                                                        </p>
                                                        <div class="course-complete-bar-2 mt-2">
                                                            <div class="progress-item mb-0">
                                                                <p class="skillbar-title">Complete:</p>
                                                                <div class="skillbar-box mt-1">
                                                                    <div class="skillbar" data-percent="0%">
                                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                                    </div> <!-- End Skill Bar -->
                                                                </div>
                                                                <div class="skill-bar-percent">0%</div>
                                                            </div>
                                                        </div><!-- end course-complete-bar-2 -->
                                                        <div class="rating-wrap d-flex mt-3">
                                                            <a href="lesson-details.html" class="btn rating-btn">
                                                                <i class="la la-eye mr-1"></i>Start course
                                                            </a>
                                                        </div><!-- end rating-wrap -->
                                                    </div><!-- end card-content -->
                                                </div><!-- end card-item -->
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end my-collection-item -->
                            </div>
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="wishlist">
                            <div class="my-wishlist-wrap">
                                <div class="my-wishlist-info d-flex align-items-center justify-content-between">
                                    <h3 class="widget-title">My wishlists</h3>
                                    <div class="lecture-overview-item m-0">
                                        <div class="my-course-search-content">
                                            <div class="question-overview-filter-item">
                                                <div class="contact-form-action">
                                                    <form method="post">
                                                        <div class="input-box">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control" type="text" name="search" placeholder="Search courses">
                                                                <span class="la la-search search-icon"></span>
                                                            </div>
                                                        </div><!-- end input-box -->
                                                    </form>
                                                </div><!-- end contact-form-action -->
                                            </div><!-- end question-overview-filter-item -->
                                        </div><!-- end my-course-search-content -->
                                    </div>
                                </div>
                                <div class="my-wishlist-card-body padding-top-35px">
                                    <div class="row">
                                        <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
                                                    <p class="card__label">
                                                        <span class="card__label-text">all levels</span>
                                                        <a href="my-courses.html#" class="card__collection-icon primary-color-2" data-toggle="tooltip" data-placement="top" title="Remove form wishlist"><span class="la la-heart"></span></a>
                                                    </p>
                                                    <h3 class="card__title">
                                                        <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">kamran paul</a>
                                                    </p>
                                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                                        <ul class="review-stars">
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star-o"></span></li>
                                                        </ul>
                                                        <span class="star-rating-wrap">
                                                            <span class="star__rating">4.4</span>
                                                            <span class="star__count">(20)</span>
                                                        </span>
                                                    </div><!-- end rating-wrap -->
                                                    <div class="card-action">
                                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                                            <li>
                                                                <span class="meta__date">
                                                                    <i class="la la-play-circle"></i> 45 Classes
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="meta__date">
                                                                    <i class="la la-clock-o"></i> 3 hours 20 min
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-action -->
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price">Free</span>
                                                        <a href="my-courses.html#" class="text-btn">Get Enrolled</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                                    <div class="card-badge">
                                                        <span class="badge-label">bestseller</span>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
                                                    <p class="card__label">
                                                        <span class="card__label-text">all levels</span>
                                                        <a href="my-courses.html#" class="card__collection-icon primary-color-2" data-toggle="tooltip" data-placement="top" title="Remove form wishlist"><span class="la la-heart"></span></a>
                                                    </p>
                                                    <h3 class="card__title">
                                                        <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">jose purtila</a>
                                                    </p>
                                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                                        <ul class="review-stars">
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star-o"></span></li>
                                                        </ul>
                                                        <span class="star-rating-wrap">
                                                            <span class="star__rating">4.2</span>
                                                          <span class="star__count">(30)</span>
                                                        </span>
                                                    </div><!-- end rating-wrap -->
                                                    <div class="card-action">
                                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                                            <li>
                                                                <span class="meta__date">
                                                                    <i class="la la-play-circle"></i> 45 Classes
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="meta__date">
                                                                    <i class="la la-clock-o"></i> 3 hours 20 min
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-action -->
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                        <a href="my-courses.html#" class="text-btn">Add to cart</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                                </div><!-- end card-image -->
                                                <div class="card-content">
                                                    <p class="card__label">
                                                        <span class="card__label-text">all levels</span>
                                                        <a href="my-courses.html#" class="card__collection-icon primary-color-2" data-toggle="tooltip" data-placement="top" title="Remove form wishlist"><span class="la la-heart"></span></a>
                                                    </p>
                                                    <h3 class="card__title">
                                                        <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">noelle travesy</a>
                                                    </p>
                                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                                        <ul class="review-stars">
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star"></span></li>
                                                            <li><span class="la la-star-o"></span></li>
                                                        </ul>
                                                        <span class="star-rating-wrap">
                                                            <span class="star__rating">4.5</span>
                                                            <span class="star__count">(40)</span>
                                                        </span>
                                                    </div><!-- end rating-wrap -->
                                                    <div class="card-action">
                                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                                            <li>
                                                                <span class="meta__date">
                                                                    <i class="la la-play-circle"></i> 45 Classes
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="meta__date">
                                                                    <i class="la la-clock-o"></i> 3 hours 20 min
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-action -->
                                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                        <span class="card__price">$68.00</span>
                                                        <a href="my-courses.html#" class="text-btn">Add to cart</a>
                                                    </div><!-- end card-price-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end my-wishlist-wrap -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="archived">
                            <div class="my-archived-wrap">
                                <div class="my-wishlist-info">
                                    <h3 class="widget-title">My archives</h3>
                                </div>
                                <div class="my-archived-card-body padding-top-35px">
                                    <div class="row">
                                        <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img8.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                <g>
                                                                    <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                    Unarchive <i class="la la-archive"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">The Complete Full-Stack JavaScript Course!</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">Joseph Delgadillo</a>
                                                        <span>, Internet Marketer & Business Innovator</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="70%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">70%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".rating-modal-form" class="btn rating-btn">
                                                            <i class="la la-star mr-1"></i>Leave a Rating
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img9.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                <g>
                                                                    <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                    Unarchive <i class="la la-archive"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">Microsoft SQL Server 2019 for Everyone</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">Hussain Rubaye</a>
                                                        <span>, Software Engineer and Developer</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="0%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">0%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="lesson-details.html" class="btn rating-btn">
                                                            <i class="la la-eye mr-1"></i>Start course
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="card-item">
                                                <div class="card-image">
                                                    <a href="lesson-details.html" class="card__img">
                                                        <img src="/images/img10.jpg" alt="">
                                                        <div class="play-button">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                                                                        .st1{fill:#FFFFFF;}
                                                                    </style>
                                                                <g>
                                                                    <circle class="st0" cx="-261.5" cy="384.7" r="45.9"/><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="msg-action-dot my-course-action-dot">
                                                        <div class="dropdown">
                                                            <a class="action-dot btn" href="my-courses.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="la la-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                    Unarchive <i class="la la-archive"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-image -->
                                                <div class="card-content p-4">
                                                    <h3 class="card__title mt-0">
                                                        <a href="lesson-details.html">WordPress for Beginners – Master WordPress</a>
                                                    </h3>
                                                    <p class="card__author">
                                                        <a href="teacher-detail.html">alex smith</a>
                                                        <span>, Developer, Team Lead, Software Consultant, Loves Technology</span>
                                                    </p>
                                                    <div class="course-complete-bar-2 mt-2">
                                                        <div class="progress-item mb-0">
                                                            <p class="skillbar-title">Complete:</p>
                                                            <div class="skillbar-box mt-1">
                                                                <div class="skillbar" data-percent="0%">
                                                                    <div class="skillbar-bar skillbar-bar-1"></div>
                                                                </div> <!-- End Skill Bar -->
                                                            </div>
                                                            <div class="skill-bar-percent">0%</div>
                                                        </div>
                                                    </div><!-- end course-complete-bar-2 -->
                                                    <div class="rating-wrap d-flex mt-3">
                                                        <a href="lesson-details.html" class="btn rating-btn">
                                                            <i class="la la-eye mr-1"></i>Start course
                                                        </a>
                                                    </div><!-- end rating-wrap -->
                                                </div><!-- end card-content -->
                                            </div><!-- end card-item -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end my-archived-wrap -->
                        </div><!-- end tab-pane -->
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end my-courses-area -->
<!-- ================================
       START MY COURSES
================================= -->

<!--================================
        START GET STAR AREA
=================================-->
<div class="subscriber-area call-to-action padding-top-40px padding-bottom-40px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="call-to-action-heading d-flex align-items-center">
                    <div class="call-to-action-icon">
                        <svg viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"/><path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"/><path d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"/><path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"/><path d="m152 288h16v80h-16zm0 0"/><path d="m120 288h16v80h-16zm0 0"/><path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"/></svg>
                    </div>
                    <div class="section-heading">
                        <h2 class="section__title font-size-20 pb-1">Teach the world online</h2>
                        <p class="section__desc mb-0 ">Create an online video course, reach students across the globe, and earn money</p>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="btn-box text-right">
                    <a href="my-courses.html#" class="theme-btn">Tech on aduca</a>
                </div><!-- end btn-box-->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end subscriber-area -->
<!--================================
        END GET STAR AREA
=================================-->

<!-- ================================
         END FOOTER AREA
================================= -->

<!-- end scroll top -->

<!-- end modal-shared -->
<div class="modal-form">
    <div class="modal fade rating-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top mb-0">
                    <h4 class="modal-title widget-title font-size-20">How would you rate this course?</h4>
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                </div>
                <div class="course-rating-wrap p-4 text-center">
                    <h3 class="widget-title padding-bottom-30px font-size-18">Select Rating</h3>
                    <div class="rating-shared rating-shared-2">
                        <fieldset>
                            <input type="radio" id="star5" name="rating" value="5"><label for="star5" data-toggle="tooltip" data-placement="top" title="Amazing, above expectations!"></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4" data-toggle="tooltip" data-placement="top" title="Good, what i expected"></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3" data-toggle="tooltip" data-placement="top" title="Average, could be better"></label>
                            <input type="radio" id="star2" name="rating" value="2"><label for="star2" data-toggle="tooltip" data-placement="top" title="Poor, pretty disappointed"></label>
                            <input type="radio" id="star1" name="rating" value="1"><label for="star1" data-toggle="tooltip" data-placement="top" title="Awful, not what i expected at all"></label>
                        </fieldset>
                    </div>
                </div><!-- end course-rating-wrap -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<div class="modal-form copy-to-clipboard-modal">
    <div class="modal fade share-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top mb-0">
                    <h4 class="modal-title widget-title font-size-20">Share this course</h4>
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                </div>
                <div class="copy-to-clipboard-wrap p-4 text-center">
                    <div class="copy-to-clipboard mb-3">
                        <div class="contact-form-action d-flex align-items-center">
                            <span class="success-message">Copied!</span>
                            <input type="text" class="form-control copy-input" value="https://www.aduca.com/share/101WxMB0oac1hVQQ==/">
                            <div class="copy-tooltip">
                                <button class="theme-btn theme-btn-light copy-text">Copy</button>
                            </div>
                        </div>
                    </div><!-- end copy-to-clipboard -->
                    <ul class="social-profile">
                        <li><a href="my-courses.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="my-courses.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="my-courses.html#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="my-courses.html#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<div class="modal-form">
    <div class="modal fade create-collection-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top">
                    <h4 class="modal-title widget-title font-size-20">Create new collection</h4>
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                </div>
                <div class="contact-form-action">
                    <form action="https://techydevs.com/demos/themes/html/aduca/post">
                        <div class="input-box">
                            <label class="label-text">Collection Title<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="text" placeholder="Name your collection e.g. HTML skills">
                                <i class="la la-briefcase input-icon"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">Description<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <textarea class="message-control form-control" name="message" placeholder="Why are you creating this collection? e.g. To start a new business, To get a new job, To become a web developer"></textarea>
                                <i class="la la-pencil input-icon"></i>
                            </div>
                        </div>
                        <div class="btn-box text-right">
                            <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="theme-btn" >Create</button>
                        </div>
                    </form>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<div class="modal-form">
    <div class="modal fade edit-collection-modal-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-top">
                    <h4 class="modal-title widget-title font-size-20">Edit your collection</h4>
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                </div>
                <div class="contact-form-action">
                    <form action="https://techydevs.com/demos/themes/html/aduca/post">
                        <div class="input-box">
                            <label class="label-text">Collection Title<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="text" value="Javascript">
                                <i class="la la-briefcase input-icon"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">Description<span class="primary-color-2 ml-1">*</span></label>
                            <div class="form-group">
                                <textarea class="message-control form-control" name="message">Leading the basics fundamentals</textarea>
                                <i class="la la-pencil input-icon"></i>
                            </div>
                        </div>
                        <div class="btn-box text-right">
                            <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="theme-btn" >Edit</button>
                        </div>
                    </form>
                </div>
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
                        <h4 class="modal-title widget-title font-size-20 mt-2 mb-1">Please Confirm</h4>
                        <p class="modal-sub">Are you sure you want to delete your collection? Your courses will still be available in "All Courses".</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white" >Ok</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- template js files -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/emojionearea.min.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/copy-text-script.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/progress-bar.js"></script>
<script src="/js/main.js"></script>
@endsection
