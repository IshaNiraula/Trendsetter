@extends('client.layouts.master')

@section('content')
    <div class="page-banner-area bg-1">
        <div class="container">
            <div class="page-banner-content">
                <h1>Academics</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Academics</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="academics-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="academics-left-content">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-pc"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Computer Science</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-art"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Art & Design</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Law Department</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-profile"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Management Business</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-help"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Information Technology</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-heartbeat"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Health Care</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-blueprint"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Architecture</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-connection"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Engineering</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-academics-card3">
                                    <div class="icon">
                                        <i class="flaticon-money-exchange"></i>
                                    </div>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}">
                                        <h3>Law & Economy</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet ctetur adipiscing elit</p>
                                    <a href="{{ route('academic.show', ['slug' => 'new academic']) }}"
                                        class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="acdemics-right-content">
                        <div class="serch-content">
                            <h3>Search</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Find Your Course">
                                <button type="submit" class="src-btn">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="category-content">
                            <h3>Select a Category</h3>
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Select a Category</option>
                                <option value="1">Business</option>
                                <option value="2">Fashion</option>
                                <option value="3">writing</option>
                                <option value="3">Development</option>
                                <option value="3">Marketing</option>
                            </select>
                        </div>
                        <div class="location-type">
                            <h3>Location Type</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    On Campus
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Online
                                </label>
                            </div>
                        </div>
                        <div class="program-level">
                            <h3>Program Level</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Graduate
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Undergraduate
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
