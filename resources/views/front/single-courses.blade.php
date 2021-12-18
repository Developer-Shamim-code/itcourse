@extends('front.layout.app')
@section('content')
@section('title')
    This is sitngle page
@endsection
       <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/courses-1">Courses</a></li>
                    <li class="active">Python for Finance: Investment Fundamentals &amp; Data Analytics</li>
                </ul>
                <h2>Python for Finance: Investment Fundamentals &amp; Data Analytics</h2>
                <div class="rating"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
                    <div class="rating-count"><span>4.0 (1 rating)</span></div>
                </div>
            </div>
        </div>
        <div class="shape9"><img src="{{asset('asset/front/images/shape8.svg')}}" alt="image" /></div>
    </div>
    <div class="courses-details-area pb-100">
        <div class="courses-details-image"><img src="{{asset('asset/front/images/courses/course-details.jpg')}}" alt="image" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="courses-details-desc">
                        <div class="react-tabs" data-tabs="true">
                            <ul class="react-tabs__tab-list" role="tablist">
                                <li class="react-tabs__tab react-tabs__tab--selected" role="tab" id="react-tabs-716" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-717" tabindex="0">Overview</li>
                                <li class="react-tabs__tab" role="tab" id="react-tabs-718" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-719">Curriculum</li>
                                <li class="react-tabs__tab" role="tab" id="react-tabs-720" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-721">Instructor</li>
                                <li class="react-tabs__tab" role="tab" id="react-tabs-722" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-723">Reviews</li>
                            </ul>
                            <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-717" aria-labelledby="react-tabs-716">
                                <div class="courses-overview">
                                    <h3>Course Description</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                        facilisis.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                        facilisis.</p>
                                    <h3>Certification</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                        facilisis.</p>
                                    <h3>Who this course is for</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                        facilisis.</p>
                                </div>
                            </div>
                            <div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-719" aria-labelledby="react-tabs-718"></div>
                            <div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-721" aria-labelledby="react-tabs-720"></div>
                            <div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-723" aria-labelledby="react-tabs-722"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="courses-details-info">
                        <div class="image"><img src="{{asset('asset/front/images/blog/blog2.jpg')}}" alt="image" />
                            <div class="link-btn popup-youtube"></div>
                            <div class="content"><i class="flaticon-play"></i><span>Course Preview</span></div>
                        </div>
                        <ul class="info">
                            <li class="price">
                                <div class="d-flex justify-content-between align-items-center"><span><i class="flaticon-tag"></i> Price</span>$49</div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center"><span><i class="flaticon-teacher"></i> Instructor</span>Sarah Taylor</div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center"><span><i class="flaticon-time"></i> Duration</span>7 weeks</div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center"><span><i class="flaticon-distance-learning"></i> Lessons</span>25</div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center"><span><i class="flaticon-web"></i> Enrolled</span>255 students</div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center"><span><i class="flaticon-lock"></i> Access</span>Lifetime</div>
                            </li>
                        </ul>
                        <div class="btn-box"><a class="default-btn" href="#"><i class="flaticon-shopping-cart"></i> Add to Cart <span></span></a><a class="default-btn" href="#"><i class="flaticon-tag"></i> Buy Now <span></span></a></div>
                        <div class="courses-share">
                            <div class="share-info"><span>Share This Course <i class="flaticon-share"></i></span>
                                <ul class="social-link">
                                    <li><a href="#" class="d-block" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#" class="d-block" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#" class="d-block" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                    <li><a href="#" class="d-block" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-area bg-f8f9f8 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>More Courses You Might Like</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses1.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$39</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user1.jpg" class="rounded-circle" alt="image" /><span>Alex Morgan</span></div>
                            <h3><a href="/single-courses-1">The Data Science Course 2020: Complete Data Science Bootcamp</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 15 Lessons</li>
                                <li><i class="flaticon-people"></i> 145 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses2.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$49</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user2.jpg" class="rounded-circle" alt="image" /><span>Sarah Taylor</span></div>
                            <h3><a href="/single-courses-1">Java Programming MasterclassName for Software Developers</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 20 Lessons</li>
                                <li><i class="flaticon-people"></i> 100 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses3.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$59</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user3.jpg" class="rounded-circle" alt="image" /><span>David Warner</span></div>
                            <h3><a href="/single-courses-1">Deep Learning A-Z™: Hands-On Artificial Neural Networks</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 20 Lessons</li>
                                <li><i class="flaticon-people"></i> 150 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection