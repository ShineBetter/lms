@extends('layout.head')
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
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">Shopping Cart</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Shopping cart</li>
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
    START CART AREA
================================= -->
<section class="cart-area padding-top-120px padding-bottom-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping-cart-wrap table-responsive">
                    <table class="table table-bordered ">
                        <thead class="cart-head">
                            <tr>
                                <td class="cart__title">Image</td>
                                <td class="cart__title">Product details</td>
                                <td class="cart__title">Price</td>
                                <td class="cart__title">Quantity</td>
                                <td class="cart__title">remove</td>
                            </tr>
                        </thead>
                        <tbody class="cart-body">
                        <tr>
                            <td><a href="course-details.blade.php" class="d-block"><img src="/images/small-img.jpg" alt="product image"></a></td>
                            <td>
                                <div class="cart-product-desc">
                                    <a href="course-details.blade.php" class="widget-title">The Complete Financial Analyst Course 2019</a>
                                    <p>
                                        By <a href="teacher-detail.html">Mark Hardson</a>, Master Digital Marketing: Strategy, Social Media Marketing, SEO, YouTube, Email, Facebook Marketing, Analytics & More!
                                    </p>
                                </div>
                            </td>
                            <td>
                                <span class="item__price">$22.99
                                    <span class="before-price">$55.99</span>
                                </span>
                            </td>
                            <td>
                                <div class="input-number-group">
                                    <div class="input-group-button">
                                        <span class="input-number-decrement">-</span>
                                    </div>
                                    <input class="input-number" type="number" value="1" min="0" max="1000">
                                    <div class="input-group-button">
                                        <span class="input-number-increment">+</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="button-remove"><i class="fa fa-close"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="course-details.blade.php" class="d-block"><img src="/images/small-img.jpg" alt="product image"></a></td>
                            <td>
                                <div class="cart-product-desc">
                                    <a href="course-details.blade.php" class="widget-title">The Complete Financial Analyst Course 2019</a>
                                    <p>
                                        By <a href="teacher-detail.html">Mark Hardson</a>, Master Digital Marketing: Strategy, Social Media Marketing, SEO, YouTube, Email, Facebook Marketing, Analytics & More!
                                    </p>
                                </div>
                            </td>
                            <td>
                                <span class="item__price">$22.99
                                    <span class="before-price">$55.99</span>
                                </span>
                            </td>
                            <td>
                                <div class="input-group input-number-group">
                                    <div class="input-group-button">
                                        <span class="input-number-decrement">-</span>
                                    </div>
                                    <input class="input-number" type="number" value="1" min="0" max="1000">
                                    <div class="input-group-button">
                                        <span class="input-number-increment">+</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="button-remove"><i class="fa fa-close"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot class="cart-foot">
                            <tr>
                                <td colspan="3">
                                    <a href="course-grid.html" class="theme-btn">continue shopping</a>
                                </td>
                                <td colspan="3" class="text-right">
                                    <a href="shopping-cart.html#" class="theme-btn">update cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- end shopping-cart-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="cart-detail-wrap mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shopping-cart-detail-item">
                        <h3 class="widget-title font-size-20">Coupon Code</h3>
                        <div class="shopping-cart-content pt-2">
                            <p class="line-height-26">
                                Etiam lacus lacus, mollis in mattis in,
                                vehicula eu nulla. Nulla nec tellus pellentesque, sollicitudin augue vitae, auctor quam.
                            </p>
                            <div class="contact-form-action pt-3">
                                <form method="post">
                                    <div class="form-group">
                                        <i class="la la-pencil input-icon"></i>
                                        <input class="form-control" type="text" name="text" placeholder="Enter Coupon code">
                                    </div><!-- end form-group -->
                                    <button type="submit" class="theme-btn theme-btn-light">Apply code</button>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end shopping-cart-content -->
                    </div><!-- end shopping-cart-detail-item -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-4 ml-auto">
                    <div class="shopping-cart-detail-item">
                        <h3 class="widget-title font-size-20">Cart Totals</h3>
                        <div class="shopping-cart-content pt-2">
                            <ul class="list-items">
                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="primary-color">Subtotal:</span>
                                    <span class="primary-color-3">$44.99</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="primary-color">Total:</span>
                                    <span class="primary-color-3">$44.99</span>
                                </li>
                            </ul>
                            <div class="btn-box mt-4">
                                <a href="../checkout.blade.php" class="theme-btn theme-btn-light">Checkout</a>
                            </div>
                        </div><!-- end shopping-cart-content -->
                    </div><!-- end shopping-cart-detail-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-12">
                    <div class="view-more-courses mt-5">
                        <h3 class="widget-title">You may also like</h3>
                        <div class="view-more-carousel-2 margin-top-30px margin-bottom-50px">
                            <div class="card-item">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">bestseller</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">beginner</span>
                                        <a href="shopping-cart.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">alex smith</a>
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
                                        <span class="card__price">$58.00</span>
                                        <a href="shopping-cart.html#" class="text-btn">Add to cart</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">beginner</span>
                                        <a href="shopping-cart.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">brad travesy</a>
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
                                        <span class="card__price">Free</span>
                                        <a href="shopping-cart.html#" class="text-btn">Get Enrolled</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">highest rated</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">advanced</span>
                                        <a href="shopping-cart.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">mark hardson</a>
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
                                        <a href="shopping-cart.html#" class="text-btn">Add to cart</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">all levels</span>
                                        <a href="shopping-cart.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                        <a href="shopping-cart.html#" class="text-btn">Get Enrolled</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                        </div><!-- end view-more-carousel -->
                    </div><!-- end view-more-courses -->
                </div>
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end cart-area -->
<!-- ================================
    END CART AREA
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
                    <a href="shopping-cart.html#" class="theme-btn">Tech on aduca</a>
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
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main.js"></script>
@endsection
