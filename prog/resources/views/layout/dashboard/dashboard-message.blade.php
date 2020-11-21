@extends('layout.dashboard.dashlayout.head')
@section('title','پیام')
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
                            <form action="dashboard-message.html#" method="post" enctype="multipart/form-data">
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
                    <h3 class="widget-title">Message</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Message</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="row">
                                <div class="col">
                                    <div class="dashboard-message-wrapper d-flex">
                                        <div class="message-sidebar">
                                            <div class="message-search">
                                                <div class="contact-form-action">
                                                    <form action="dashboard-message.html#">
                                                        <div class="form-group mb-0">
                                                            <input class="form-control" type="text" placeholder="Search...">
                                                            <button type="submit" class="search-icon"><i class="la la-search"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- message-search -->
                                            <div class="message-inbox-item">
                                                <div class="mess__body">
                                                    <a href="dashboard-message.html#" class=" d-block message-inbox message-active">
                                                        <div class="mess__item">
                                                            <div class="avatar dot-status online-status">
                                                                <img src="images/team7.jpg" alt="Michelle Moreno">
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title">Daniel Hardman</h4>
                                                                <p class="text">How the hell am I supposed to get a jury to believe you when I am not even sure that I do</p>
                                                                <span class="time color-text-3 font-size-12">5 min ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="dashboard-message.html#" class=" d-block message-inbox">
                                                        <div class="mess__item">
                                                            <div class="avatar dot-status">
                                                                <img src="images/team8.jpg" alt="Michelle Moreno">
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title">Michelle Moreno</h4>
                                                                <p class="text">John, I know everything!</p>
                                                                <span class="time color-text-3 font-size-12">Yesterday</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="dashboard-message.html#" class=" d-block message-inbox">
                                                        <div class="mess__item">
                                                            <div class="avatar dot-status online-status">
                                                                <img src="images/team9.jpg" alt="Michelle Moreno">
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title">Charles Forstman <span class="badge badge-success radius-rounded margin-top-10px p-1 float-right">2</span></h4>
                                                                <p class="text">Thanks Mike! :)</p>
                                                                <span class="time color-text-3 font-size-12">1:55 PM</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="dashboard-message.html#" class=" d-block message-inbox">
                                                        <div class="mess__item">
                                                            <div class="avatar dot-status">
                                                                <img src="images/team8.jpg" alt="Michelle Moreno">
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title">Rachel Zane</h4>
                                                                <p class="text">I've sent you the files for the Garrett trial</p>
                                                                <span class="time color-text-3 font-size-12">1 hour ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="dashboard-message.html#" class=" d-block message-inbox">
                                                        <div class="mess__item">
                                                            <div class="avatar dot-status">
                                                                <img src="images/team9.jpg" alt="Michelle Moreno">
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title">Rock William</h4>
                                                                <p class="text">Payment Received?</p>
                                                                <span class="time color-text-3 font-size-12">Today</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="dashboard-message.html#" class=" d-block message-inbox">
                                                        <div class="mess__item">
                                                            <div class="avatar dot-status">
                                                                <img src="images/team8.jpg" alt="Michelle Moreno">
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title">Harvey Specter</h4>
                                                                <p class="text">Oh yeah, did Michael Jordan tell you that?</p>
                                                                <span class="time color-text-3 font-size-12">2 days ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!-- end mess__body -->
                                                <div class="msg-action-bar d-flex justify-content-between align-items-centerbg-light">
                                                    <a href="dashboard-message.html#"><i class="la la-user-plus"></i> <span>Add Contact</span></a>
                                                    <a href="dashboard-message.html#"><i class="la la-cog"></i> <span>Settings</span></a>
                                                </div><!-- end msg-action-bar -->
                                            </div><!-- end message-inbox-item -->
                                        </div><!-- message-sidebar -->
                                        <div class="message-content flex-grow-1">
                                            <div class="message-header">
                                                <div class="mess__item justify-content-between align-items-center">
                                                    <div class="d-flex">
                                                        <div class="avatar">
                                                            <img src="images/team8.jpg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-15 mb-0">Michelle Moreno</h4>
                                                            <span class="time color-text font-size-14">Last seen today at 11:20 am</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <ul class="info-list">
                                                            <li><a href="dashboard-message.html#"><i class="la la-trash icon-element bg-color-1 text-white mr-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Clear chart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- mess__item -->
                                            </div><!-- message-header -->
                                            <div class="conversation-wrap">
                                                <div class="conversation-box">
                                                    <div class="message-time">
                                                        <span>30 Jan, 2020</span>
                                                    </div>
                                                    <div class="conversation-item msg-sent">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot mr-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">How the hell am I supposed to get a jury to believe you when I am not even sure that I do? 😒</p>
                                                                    <span class="time">11:44 AM <i class="fa fa-check"></i></span>
                                                                </div>
                                                                <div class="avatar">
                                                                    <img src="images/team7.jpg" alt="">
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-reply">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="avatar">
                                                                    <img src="images/team8.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">When you're backed against the wall, break the god damn thing down.</p>
                                                                    <span class="time">11:46 AM</span>
                                                                </div>
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot ml-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-reply">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="avatar">
                                                                    <img src="images/team9.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Excuses don't win championships. 😐</p>
                                                                    <span class="time">12:01 PM</span>
                                                                </div>
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot ml-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="message-time">
                                                        <span>Yesterday</span>
                                                    </div>
                                                    <div class="conversation-item msg-sent">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot mr-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Oh yeah, you said right 👍</p>
                                                                    <span class="time">12:4 PM <i class="fa fa-check"></i></span>
                                                                </div>
                                                                <div class="avatar">
                                                                    <img src="images/team7.jpg" alt="Michelle Moreno">
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-reply">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="avatar">
                                                                    <img src="images/team8.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Anyway! when i will start working on your project 😎😎😎</p>
                                                                    <span class="time">12:07 PM</span>
                                                                </div>
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot ml-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-sent">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot mr-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">You can start working on project tomorrow 🙂</p>
                                                                    <span class="time">12:4 PM <i class="fa fa-check"></i></span>
                                                                </div>
                                                                <div class="avatar">
                                                                    <img src="images/team9.jpg" alt="Michelle Moreno">
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-reply">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="avatar">
                                                                    <img src="images/team7.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Ok, i will 😉</p>
                                                                    <span class="time">12:07 PM</span>
                                                                </div>
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot ml-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="message-time">
                                                        <span>Today</span>
                                                    </div>
                                                    <div class="conversation-item msg-reply">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="avatar">
                                                                    <img src="images/team8.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Hi John, I just wanted to let you know that project is finished</p>
                                                                    <span class="time">8:19 AM</span>
                                                                </div>
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot ml-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-sent">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot mr-1" href="dashboard-message.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Edit <i class="ml-auto la la-edit"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Share <i class="ml-auto la la-share-alt"></i>
                                                                            </a>
                                                                            <a class="dropdown-item d-flex align-items-center" href="dashboard-message.html#">
                                                                                Delete <i class="ml-auto la la-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Hi Daniel! I'm actually on vacation 🏖️ until Sunday so I can't check it now 😎</p>
                                                                    <span class="time">12:4 PM <i class="fa fa-check"></i></span>
                                                                </div>
                                                                <div class="avatar">
                                                                    <img src="images/team9.jpg" alt="Michelle Moreno">
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                    <div class="conversation-item msg-reply">
                                                        <div class="mess__body">
                                                            <div class="mess__item">
                                                                <div class="avatar">
                                                                    <img src="images/team7.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content msg-typing">
                                                                    <p class="text">Typing</p>
                                                                    <div class="typing-director">
                                                                        <span></span>
                                                                        <span></span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- mess__item -->
                                                        </div><!-- mess__body -->
                                                    </div><!-- conversation-item -->
                                                </div><!-- conversation-box -->
                                            </div><!-- conversation-wrap -->
                                            <div class="message-reply-input">
                                                <div class="contact-form-action">
                                                    <form method="post">
                                                        <div class="input-box d-flex align-items-center">
                                                            <div class="form-group flex-grow-1 mb-0">
                                                                <textarea class="message-control form-control mr-2 emoji-picker" name="message" placeholder="Type a message"></textarea>
                                                                <button type="submit" class="theme-btn submit-btn border-0">
                                                                    <span class="la la-paper-plane"></span>
                                                                </button>
                                                            </div>
                                                            <div class="msg-action-wrap">
                                                                <div class="upload-btn-box">
                                                                    <form action="dashboard-message.html#" method="post" enctype="multipart/form-data">
                                                                        <input type="file" name="files[]" class="filer_input" multiple="multiple">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div><!-- input-box -->
                                                    </form>
                                                </div><!-- end contact-form-action -->
                                            </div><!-- message-reply-input -->
                                        </div><!-- message-content -->
                                    </div><!-- end dashboard-message-wrapper -->
                                </div><!-- end col -->
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
<script src="js/wow.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/progress-bar.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/main.js"></script>
@endsection
