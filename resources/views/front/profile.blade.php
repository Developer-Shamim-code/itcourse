@extends('front.layout.app')
@section('content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Profile</li>
            </ul>
            <h2>Profile</h2>
        </div>
    </div>
    <div class="shape9"><img src="/images/shape8.svg" alt="image" /></div>
</div>
<div class="profile-area">
    <div class="container">
        <div class="profile-box ptb-100">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4">
                    <div class="image"><img src="/images/advisor/advisor10.jpg" alt="image" /></div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="content">
                        <h3>Sarah Taylor</h3><span class="sub-title">Agile Project Expert</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="info">
                            <li><span>Phone Number:</span> <a href="tel:+44254588689">(+44) -2545 - 88689</a></li>
                            <li><span>Email:</span> <a href="/cdn-cgi/l/email-protection#d2bab7bebebd92a1b3a0b3baa6b3abbebda0fcb1bdbf"><span class="__cf_email__" data-cfemail="fc9499909093bc8f9d8e9d94889d8590938ed29f9391">[email&#160;protected]</span></a></li>
                        </ul>
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
        <div class="profile-courses pb-70">
            <h3 class="title">Courses</h3>
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
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses4.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$39</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user6.jpg" class="rounded-circle" alt="image" /><span>Alex Morgan</span></div>
                            <h3><a href="/single-courses-1">Python for Finance: Investment Fundamentals &amp; Data Analytics</a></h3>
                            <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
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
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses5.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$49</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user5.jpg" class="rounded-circle" alt="image" /><span>Sarah Taylor</span></div>
                            <h3><a href="/single-courses-1">Machine Learning A-Z™: Hands-On Python &amp; R In Data Science</a></h3>
                            <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 20 Lessons</li>
                                <li><i class="flaticon-people"></i> 100 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses6.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$99</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user4.jpg" class="rounded-circle" alt="image" /><span>James Anderson</span></div>
                            <h3><a href="/single-courses-1">R Programming A-Z™: R For Data Science With Real Exercises!</a></h3>
                            <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 44 Lessons</li>
                                <li><i class="flaticon-people"></i> 440 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses10.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$39</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user1.jpg" class="rounded-circle" alt="image" /><span>Alex Morgan</span></div>
                            <h3><a href="/single-courses-1">Deep Learning The Numpy Stack in Python</a></h3>
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
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses11.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$49</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user2.jpg" class="rounded-circle" alt="image" /><span>Sarah Taylor</span></div>
                            <h3><a href="/single-courses-1">Statistics for Data Science and Business Analysis</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 20 Lessons</li>
                                <li><i class="flaticon-people"></i> 100 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses12.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$59</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user3.jpg" class="rounded-circle" alt="image" /><span>David Warner</span></div>
                            <h3><a href="/single-courses-1">Microsoft Excel - Excel from Beginner to Advanced</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 20 Lessons</li>
                                <li><i class="flaticon-people"></i> 150 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses13.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$39</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user6.jpg" class="rounded-circle" alt="image" /><span>Alex Morgan</span></div>
                            <h3><a href="/single-courses-1">Python Django Web Development: To-Do App</a></h3>
                            <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
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
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses14.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$49</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user5.jpg" class="rounded-circle" alt="image" /><span>Sarah Taylor</span></div>
                            <h3><a href="/single-courses-1">Oracle SQL Developer : Essentials, Tips and Tricks</a></h3>
                            <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 20 Lessons</li>
                                <li><i class="flaticon-people"></i> 100 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a class="d-block image" href="/single-courses-1"><img src="/images/courses/courses15.jpg" alt="image" /></a><a href="#" class="fav"><i class="flaticon-heart"></i></a>
                            <div class="price shadow">$99</div>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center"><img src="/images/user4.jpg" class="rounded-circle" alt="image" /><span>James Anderson</span></div>
                            <h3><a href="/single-courses-1">Learning A-Z™: Hands-On Python In Data Science</a></h3>
                            <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                <li><i class="flaticon-agenda"></i> 44 Lessons</li>
                                <li><i class="flaticon-people"></i> 440 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-quizzes pb-70">
            <h3 class="title">Quizzes</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Quiz</th>
                            <th>Date</th>
                            <th>Progress</th>
                            <th>Interval</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">Introduction to Python for Beginners</a></td>
                            <td>Lesson 1 Term Test</td>
                            <td>May 20, 2020</td>
                            <td>25% <span class="progress">In Progress</span></td>
                            <td>15:30</td>
                        </tr>
                        <tr>
                            <td><a href="#">Python for Data Science and Machine Learning Bootcamp</a></td>
                            <td>Lesson 2 Term Test</td>
                            <td>May 21, 2020</td>
                            <td>0% <span class="progress pending">Pending</span></td>
                            <td>20:20</td>
                        </tr>
                        <tr>
                            <td><a href="#">The Modern Python 3 Bootcamp</a></td>
                            <td>Lesson 5 Term Test</td>
                            <td>May 22, 2020</td>
                            <td>100% <span class="progress completed">Completed</span></td>
                            <td>10:10</td>
                        </tr>
                        <tr>
                            <td><a href="#">REST APIs with Flask and Python</a></td>
                            <td>Lesson 1 Term Test</td>
                            <td>May 23, 2020</td>
                            <td>30% <span class="progress">In Progress</span></td>
                            <td>15:30</td>
                        </tr>
                        <tr>
                            <td><a href="#">Reinforcement Learning in Python</a></td>
                            <td>Lesson 1 Term Test</td>
                            <td>May 24, 2020</td>
                            <td>35% <span class="progress failed">Failed</span></td>
                            <td>15:30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection