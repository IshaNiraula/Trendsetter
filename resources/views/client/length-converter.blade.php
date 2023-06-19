@extends('client.layouts.master')
@section('metadata')
    @if (isset($metatag))
        <title>{{ $metatag->title }}</title>
        <meta name="description" content="{{ $metatag->description }}">
        <meta name="keywords" content="{{ $metatag->tags }}">
        <meta name="jadanconstruction" content="a construction company">
        <link rel="image_src" href="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:image" content="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
    @endif
@endsection
@section('content')
    <section id="converter">
        <div class="container">
            <div class="breadcrumb flat mt-3">
                <a href="/" class="active">Home</a>
                <a href="#">Length Converter</a>
            </div>
            <div style="text-align:center;color:gray;" class="intro">
                <h5 class="text-gray fw-bold">Type a value in the field to convert the value</h5>
            </div>

            <div class="row shadow rounded my-4 p-2">
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Roapni</label>
                        <input class="form-control" id="ropani" type="number" placeholder="0"
                            oninput="ropani(this.value)" onchange="ropani(this.value)">
                    </p>
                </div>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Aana</label>
                        <input class="form-control" id="aana" type="number" placeholder="0" oninput="aana(this.value)"
                            onchange="aana(this.value)">
                    </p>
                </div>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Paisa</label>
                        <input class="form-control" id="paisa" type="number" placeholder="0"
                            oninput="paisa(this.value)" onchange="paisa(this.value)">
                    </p>

                </div>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Daam</label>
                        <input class="form-control" id="daam" type="number" placeholder="0" oninput="daam(this.value)"
                            onchange="daam(this.value)">
                    </p>
                </div>

                <hr>
                </hr>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Bigha</label>
                        <input class="form-control" id="bigha" type="number" placeholder="0"
                            oninput="bigha(this.value)" onchange="bigha(this.value)">
                    </p>
                </div>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Kattha</label>
                        <input class="form-control" id="kattha" type="number" placeholder="0"
                            oninput="kattha(this.value)" onchange="kattha(this.value)">
                    </p>
                </div>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Dhur</label>
                        <input class="form-control" id="dhur" type="number" placeholder="0" oninput="dhur(this.value)"
                            onchange="dhur(this.value)">
                    </p>
                </div>

                <hr>
                </hr>
                <div class="col pt-3 my-2 rounded shadow-sm-4">
                    <p>
                        <label style="font-weight: 600" class="form-label">Sq.feet</label>
                        <input class="form-control" id="sf" type="number" placeholder="0" oninput="sf(this.value)"
                            onchange="dhur(this.value)">
                    </p>
                </div>
                <div class="col pt-3 my-2 rounded shadow-sm-3">
                    <p>
                        <label style="font-weight: 600" class="form-label">Sq. meter</label>
                        <input class="form-control" id="sm" type="number" placeholder="0" oninput="sm(this.value)"
                            onchange="sm(this.value)">
                    </p>
                </div>
                <div class="col-lg-4 pt-3 my-2 rounded shadow-sm-4 d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary float-right px-3 mt-3" onclick="setEmpty();">clear Form</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div style="text-align:center;color:gray;" class="intro">
                <h5 class="text-gray fw-bold">Unit information at a glance.</h5>
            </div>
            <ul class="nav nav-pills mb-3 mt-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Hilly Area</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Terai Area</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Ropani equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Aana</h5>
                            <p style="font-weight: 600">16</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Paisa</h5>
                            <p style="font-weight: 600">64</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr. sq</h5>
                            <p style="font-weight: 600">508.72</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Sq. Feet</h5>
                            <p style="font-weight: 600">5476</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Daam</h5>
                            <p style="font-weight: 600">256</p>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Aana equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Paisa</h5>
                            <p style="font-weight: 600">4</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr. sq</h5>
                            <p style="font-weight: 600">31.80</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Sq. feet</h5>
                            <p style="font-weight: 600">342.25</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Daam</h5>
                            <p style="font-weight: 600">4</p>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Paisa equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr.sq</h5>
                            <p style="font-weight: 600">7.95</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Sq. feet</h5>
                            <p style="font-weight: 600">85.56</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Daam</h5>
                            <p style="font-weight: 600">4</p>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Daam equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr. sq</h5>
                            <p style="font-weight: 600">1.99</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Sq. feet</h5>
                            <p style="font-weight: 600">21.39</p>
                        </div>
                    </div>
                    <hr>
                    </hr>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Bigha equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Kattha</h5>
                            <p style="font-weight: 600">20</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr. sq</h5>
                            <p style="font-weight: 600">6772.63</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>sq. Feet</h5>
                            <p style="font-weight: 600">72900</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Ropani</h5>
                            <p style="font-weight: 600">13.31</p>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Kattha equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Dhur</h5>
                            <p style="font-weight: 600">20</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr. sq</h5>
                            <p style="font-weight: 600">338.63</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Sq. feet</h5>
                            <p style="font-weight: 600">3645</p>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <h5 class="py-2 px-3">1 Dhur equivalent to:</h5>
                    <div class="row gap-5 text-center">
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Mtr. sq</h5>
                            <p style="font-weight: 600">16.93</p>
                        </div>
                        <div data-aos-offset="0" data-aos="flip-right" class="col pt-3 my-2 rounded shadow">
                            <h5>Sq. feet</h5>
                            <p style="font-weight: 600">182..25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        function ropani(valNum) {
            document.getElementById("aana").value = valNum * 16;
            document.getElementById("paisa").value = valNum * 64;
            document.getElementById("daam").value = valNum * 256;
            document.getElementById("bigha").value = valNum / 13.31;
            document.getElementById("sm").value = valNum * 508.72;
            document.getElementById("sf").value = valNum * 5476;
        }

        function aana(valNum) {
            document.getElementById("ropani").value = valNum / 16;
            document.getElementById("paisa").value = valNum * (64 / 16);
            document.getElementById("daam").value = valNum * (256 / 16);
            document.getElementById("sm").value = valNum * 31.80;
            document.getElementById("sf").value = valNum * 342.25;


        }

        function paisa(valNum) {
            document.getElementById("ropani").value = valNum / 64;
            document.getElementById("aana").value = valNum * (16 / 64);
            document.getElementById("daam").value = valNum * (256 / 64);
            document.getElementById("sm").value = valNum * 7.95;
            document.getElementById("sf").value = valNum * 85.56;

        }

        function daam(valNum) {
            document.getElementById("ropani").value = valNum / 256;
            document.getElementById("aana").value = valNum * (16 / 256);
            document.getElementById("paisa").value = valNum * (64 / 256);
            document.getElementById("sm").value = valNum * 1.99;
            document.getElementById("sf").value = valNum * 21.39;


        }

        function bigha(valNum) {
            document.getElementById("ropani").value = valNum * 13.31;
            document.getElementById("kattha").value = valNum * 20;
            document.getElementById("dhur").value = valNum * 400;
            document.getElementById("sm").value = valNum * 6772.63;
            document.getElementById("sf").value = valNum * 72900;
        }

        function kattha(valNum) {
            document.getElementById("bigha").value = valNum / 20;
            document.getElementById("dhur").value = valNum * 20;
            document.getElementById("sm").value = valNum * 338.63;
            document.getElementById("sf").value = valNum * 3645;
        }

        function dhur(valNum) {
            document.getElementById("bigha").value = valNum / 400;
            document.getElementById("kattha").value = valNum / 20;
            document.getElementById("sm").value = valNum * 16.93;
            document.getElementById("sf").value = valNum * 182.25;
        }

        function sf(valNum) {
            document.getElementById("ropani").value = valNum / 5476;
            document.getElementById("aana").value = valNum / 342.25;
            document.getElementById("paisa").value = valNum / 85.56;
            document.getElementById("daam").value = valNum / 21.39;
            document.getElementById("bigha").value = valNum / 400;
            document.getElementById("kattha").value = valNum / 20;
            document.getElementById("dhur").value = valNum / 400;
            document.getElementById("sm").value = valNum * (16.93 / 182.25);
        }

        function sm(valNum) {
            document.getElementById("ropani").value = valNum / 508.72;
            document.getElementById("aana").value = valNum / 31.80;
            document.getElementById("paisa").value = valNum / 7.95;
            document.getElementById("daam").value = valNum / 1.99;
            document.getElementById("bigha").value = valNum / 400;
            document.getElementById("kattha").value = valNum / 20;
            document.getElementById("dhur").value = valNum / 400;
            document.getElementById("sf").value = valNum * (182.25 / 16.93);
        }

        function setEmpty() {
            var hello = document.getElementsByTagName('input');
            for (i = 0, len = hello.length; i < len; i++) {
                hello[i].value = ""
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#converter').on('load', function() {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('page.visit', ['page' => 'converter', '_token' => csrf_token()]) }}",
                    success: function(response) {
                        console.log(response);
                    }
                });
            })

            $('#converter').trigger('load')

        });
    </script>
@endpush
