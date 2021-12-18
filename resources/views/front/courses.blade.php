@extends('front.layout.app')
@section('content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Well to Our Courses</li>
            </ul>
            <h2>Well to Our Courses</h2>
        </div>
    </div>
    <div class="shape9"><img src="{{asset('asset/front/images/style/shape8.svg')}}" alt="image" /></div>
</div>
<div class="courses-area courses-section pt-100 pb-70">
    <div class="container">
        <div class="edemy-grid-sorting row align-items-center">
            <div class="col-lg-8 col-md-6 result-count">
                <p>We found <span class="count">3</span> courses available for you</p>
            </div>
            <div class="col-lg-4 col-md-6 ordering">
                <div class="select-box"><select class="form-control"><option>Sort By</option><option>Popularity</option><option>Latest</option><option>Price: low to high</option><option>Price: high to low</option></select></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-box">
                    <div class="courses-image">
                        <a class="d-block image" href="/courses/9cc67e32-f063-4f0a-a97f-675033cb32e9"><img src="https://res.cloudinary.com/dev-empty/image/upload/v1611676955/c4rde6bgusmnuwoymfve.jpg" alt="AI" /></a><a class="fav" href="#"><i class="flaticon-heart"></i></a>
                        <div class="price shadow">$
                            <!-- -->10</div>
                    </div>
                    <div class="courses-content">
                        <div class="course-author d-flex align-items-center"><img src="{{asset('asset/front/images/user1.jpg')}}" class="rounded-circle" alt="Goberr.com" /><span>Goberr.com</span></div>
                        <h3><a href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2">The Python Mega Course: Build 10 Real World Applications</a></h3>
                        <p>Go from a total beginner to a confident Python programmer Create 10 real-world Python programs (no t</p>
                        <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                            <li><i class="fas fa-book-reader mt-1"></i>
                                <!-- -->15
                                <!-- -->Lessons</li>
                            <li><i class="fas fa-users mt-1 "></i>
                                <!-- -->21
                                <!-- -->Students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-box">
                    <div class="courses-image">
                        <a class="d-block image" href="/courses/56418231-8bf1-40c0-9ad1-b67dae108151"><img src="https://res.cloudinary.com/dev-empty/image/upload/v1611677211/dgfkptphczegy0k4ou9t.jpg" alt="The Complete Digital Marketing Course - 12 Courses in 1" /></a><a class="fav" href="#"><i class="flaticon-heart"></i></a>
                        <div
                            class="price shadow">$
                            <!-- -->60</div>
                </div>
                 <div class="courses-content">
                        <div class="course-author d-flex align-items-center"><img src="{{asset('asset/front/images/user1.jpg')}}" class="rounded-circle" alt="Goberr.com" /><span>Goberr.com</span></div>
                        <h3><a href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2">The Python Mega Course: Build 10 Real World Applications</a></h3>
                        <p>Go from a total beginner to a confident Python programmer Create 10 real-world Python programs (no t</p>
                        <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                            <li><i class="fas fa-book-reader mt-1"></i>
                                <!-- -->15
                                <!-- -->Lessons</li>
                            <li><i class="fas fa-users mt-1 "></i>
                                <!-- -->21
                                <!-- -->Students</li>
                        </ul>
                     </div>
             </div>
         </div>
        <div class="col-lg-4 col-md-6">
            <div class="single-courses-box">
                <div class="courses-image">
                    <a class="d-block image" href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2"><img src="https://res.cloudinary.com/dev-empty/image/upload/v1611676955/c4rde6bgusmnuwoymfve.jpg" alt="The Python Mega Course: Build 10 Real World Applications" /></a><a class="fav" href="#"><i class="flaticon-heart"></i></a>
                    <div
                        class="price shadow">$
                        <!-- -->15</div>
            </div>
            <div class="courses-content">
                <div class="course-author d-flex align-items-center"><img src="{{asset('asset/front/images/user1.jpg')}}" class="rounded-circle" alt="Goberr.com" /><span>Goberr.com</span></div>
                <h3><a href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2">The Python Mega Course: Build 10 Real World Applications</a></h3>
                <p>Go from a total beginner to a confident Python programmer Create 10 real-world Python programs (no t</p>
                <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                    <li><i class="fas fa-book-reader mt-1"></i>
                        <!-- -->15
                        <!-- -->Lessons</li>
                    <li><i class="fas fa-users mt-1 "></i>
                        <!-- -->21
                        <!-- -->Students</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="single-courses-box">
            <div class="courses-image">
                <a class="d-block image" href="/courses/56418231-8bf1-40c0-9ad1-b67dae108151"><img src="https://res.cloudinary.com/dev-empty/image/upload/v1611677211/dgfkptphczegy0k4ou9t.jpg" alt="The Complete Digital Marketing Course - 12 Courses in 1" /></a><a class="fav" href="#"><i class="flaticon-heart"></i></a>
                <div
                    class="price shadow">$
                    <!-- -->60</div>
        </div>
         <div class="courses-content">
                <div class="course-author d-flex align-items-center"><img src="{{asset('asset/front/images/user1.jpg')}}" class="rounded-circle" alt="Goberr.com" /><span>Goberr.com</span></div>
                <h3><a href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2">The Python Mega Course: Build 10 Real World Applications</a></h3>
                <p>Go from a total beginner to a confident Python programmer Create 10 real-world Python programs (no t</p>
                <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                    <li><i class="fas fa-book-reader mt-1"></i>
                        <!-- -->15
                        <!-- -->Lessons</li>
                    <li><i class="fas fa-users mt-1 "></i>
                        <!-- -->21
                        <!-- -->Students</li>
                </ul>
             </div>
     </div>
 </div>
 <div class="col-lg-4 col-md-6">
    <div class="single-courses-box">
        <div class="courses-image">
            <a class="d-block image" href="/courses/56418231-8bf1-40c0-9ad1-b67dae108151"><img src="https://res.cloudinary.com/dev-empty/image/upload/v1611677211/dgfkptphczegy0k4ou9t.jpg" alt="The Complete Digital Marketing Course - 12 Courses in 1" /></a><a class="fav" href="#"><i class="flaticon-heart"></i></a>
            <div
                class="price shadow">$
                <!-- -->60</div>
    </div>
     <div class="courses-content">
            <div class="course-author d-flex align-items-center"><img src="{{asset('asset/front/images/user1.jpg')}}" class="rounded-circle" alt="Goberr.com" /><span>Goberr.com</span></div>
            <h3><a href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2">The Python Mega Course: Build 10 Real World Applications</a></h3>
            <p>Go from a total beginner to a confident Python programmer Create 10 real-world Python programs (no t</p>
            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                <li><i class="fas fa-book-reader mt-1"></i>
                    <!-- -->15
                    <!-- -->Lessons</li>
                <li><i class="fas fa-users mt-1 "></i>
                    <!-- -->21
                    <!-- -->Students</li>
            </ul>
         </div>
 </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="single-courses-box">
        <div class="courses-image">
            <a class="d-block image" href="/courses/56418231-8bf1-40c0-9ad1-b67dae108151"><img src="https://res.cloudinary.com/dev-empty/image/upload/v1611677211/dgfkptphczegy0k4ou9t.jpg" alt="The Complete Digital Marketing Course - 12 Courses in 1" /></a><a class="fav" href="#"><i class="flaticon-heart"></i></a>
            <div
                class="price shadow">$
                <!-- -->60</div>
    </div>
     <div class="courses-content">
            <div class="course-author d-flex align-items-center"><img src="{{asset('asset/front/images/user1.jpg')}}" class="rounded-circle" alt="Goberr.com" /><span>Goberr.com</span></div>
            <h3><a href="/courses/9839b20b-d45c-4c93-ba52-81d53839feb2">The Python Mega Course: Build 10 Real World Applications</a></h3>
            <p>Go from a total beginner to a confident Python programmer Create 10 real-world Python programs (no t</p>
            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                <li><i class="fas fa-book-reader mt-1"></i>
                    <!-- -->15
                    <!-- -->Lessons</li>
                <li><i class="fas fa-users mt-1 "></i>
                    <!-- -->21
                    <!-- -->Students</li>
            </ul>
         </div>
 </div>
</div>
  </div>
 </div>
</div>       
@endsection