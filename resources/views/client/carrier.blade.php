@extends('client.layouts.master')
@section('content')
    <div id="career" class="container">
        <div class="breadcrumb flat mt-3">
            <a href="/" class="active">Home</a>
            <a href="#">career</a>
        </div>
        <div class="intro">
            <h1 class="text-gray fw-bold">career</h1>
        </div>
        <section>
            <div class="row mt-3">
                <div style="margin: 0 auto" class="col-lg-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @if (count($jobCarriers) == 0)
                            <div class="bg-dark p-4">
                                <p>Dear applicants,</p>
                                <p> Thank you for your interest in our company. We are sorry to inform you that at this
                                    time, we do not have any vacancies available. However, we are always on the lookout for
                                    talented and motivated individuals to join our team. Therefore, we will be happy to
                                    accept your application form and keep it on file for future reference.</p>
                                <p> Thank you for considering us, and we hope to have the opportunity to welcome you to our
                                    team in the future.</p>
                            </div>
                        @elseif(count($jobCarriers) >= 1)
                            @foreach ($jobCarriers as $jobCarrier)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                                        <button style="background-color: #f49c53"
                                            class="accordion-button collapsed text-white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->iteration }}"
                                            aria-expanded="{{ $loop->iteration == '1' ? 'true' : 'false' }}"
                                            aria-controls="flush-collapse{{ $loop->iteration }}">
                                            {{ $jobCarrier->title }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $loop->iteration }}"
                                        class="accordion-collapse collapse {{ $loop->iteration == '1' ? 'show' : '' }}"
                                        aria-labelledby="flush-heading{{ $loop->iteration }}"
                                        data-bs-parent="#accordionFlushExample">
                                        <div style="color:gray" class="accordion-body text-gray">{!! $jobCarrier->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </section>
        <section>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form action="{{ route('carrier.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4 g-4">
                    <div class="col-lg-4">
                        <h3>Personal Details</h3>
                        <p>General information about yourself.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name" value="{{ old('name') }}" required>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group py-3">
                            <input type="text" class="form-control" id="location" placeholder="Enter location"
                                name="location" value="{{ old('location') }}" required>
                            <span class="text-danger">
                                @error('location')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                name="email" value="{{ old('email') }}" required>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group py-3">
                            <input type="text" class="form-control" id="phone-number" placeholder="Enter phone number"
                                required name="phone" value="{{ old('phone') }}">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <hr>
                </hr>
                <div class="row mt-4 g-4">
                    <div class="col-lg-4">
                        <h3>Professional Details</h3>
                        <p>What do you expect from us.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="position">What position are you applying for.?</label>
                            <select name="position" id="" class="form-select" required>
                                <option value="Architect/interior Designer">Architect/interior Designer</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Delivery Executive">Delivery Executive</option>
                                <option value="Civil Engineer">Civil Engineer</option>
                                <option value="Drafts person">Drafts person</option>
                                <option value="Surveyor">Surveyor</option>
                                <option value="Quantity Surveyor">Quantity Surveyor</option>
                                <option value="Procurement Manager">Procurement Manager</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Admin Work">Admin Work</option>
                                <option value="Driver">Driver</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="salary">Expected Salary</label>
                            <input type="text" class="form-control" id="salary" placeholder="*****"
                                name="salary" value="{{ old('salary') }}" required>
                            <span class="text-danger">
                                @error('salary')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="date">Avaliable start date</label>
                            <input type="date" class="form-control" id="date" placeholder="mm/dd/yyyy"
                                name="date" value="{{ old('date') }}" required>
                            <span class="text-danger">
                                @error('date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-4">
                            <label for="experience">Your Experience</label>
                            <input type="text" class="form-control" id="experience"
                                placeholder="Your experience (in Years)" required name="experience"
                                value="{{ old('experience') }}" required>
                            <span class="text-danger">
                                @error('experience')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <hr>
                </hr>
                <div class="row mt-4 g-4">
                    <div class="col-lg-4">
                        <h3>Your Credentials</h3>
                        <p>Old Experience and credentials.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <p>Current employment status?</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e_status" id="employed"
                                    value="employed">
                                <label class="form-check-label" for="employed">Employed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e_status" id="unemployed"
                                    value="unemployed">
                                <label class="form-check-label" for="unemployed">Unemployed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e_status" id="self_employed"
                                    value="self_employed">
                                <label class="form-check-label" for="self_employed">Self-employed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e_status" id="student"
                                    value="student">
                                <label class="form-check-label" for="student">Student</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="" for="inputGroupFile01">Upload your CV or Resume (only pdf*)</label>
                            <input name="resume" type="file" class="form-control w-50 my-3" id="inputGroupFile01"
                                required>
                            <span class="text-danger">
                                @error('resume')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                </div>
                <hr>
                </hr>
                <div class="row mt-4 g-4">
                    <div class="col-lg-4">
                        <h3>Reference</h3>
                        <p>Did anyone refer you to us.?</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <p>Would you like to add reference?</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="r_status" id="no"
                                    value="no">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="r_status" id="yes"
                                    value="yes">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="referer_name"
                                        placeholder="Enter referer name" name="referer_name"
                                        value="{{ old('referer_name') }}">
                                    <span class="text-danger">
                                        @error('referer_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="referer_email"
                                        placeholder="Enter referer email" name="referer_email"
                                        value="{{ old('referer_email') }}">
                                    <span class="text-danger">
                                        @error('referer_email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload3">
                                        ↻
                                    </button>
                                </div>
                            </div>
                            @error('captcha')
                                <div class="alert alert-danger mt-1 mb-1">Invalid Captcha</div>
                            @enderror
                            <div class="form-group mb-4">
                                <input id="captcha" type="text" class="form-control w-25"
                                    placeholder="Enter Captcha" name="captcha">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end py-3">
                            <button class="btn btn-primary px-3" type="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </section>
    </div>
@endsection
@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#career').on('load', function() {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('page.visit', ['page' => 'career', '_token' => csrf_token()]) }}",
                    success: function(response) {
                        console.log(response);
                    }
                });
            })
            $('#career').trigger('load')
        });
    </script>
    <script type="text/javascript">
        $('#reload3').click(function() {
            $.ajax({
                type: 'GET',
                url: 'https://www.jadanconstructiongroup.com/refresh-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
            $.ajax({
                type: 'GET',
                url: 'https://jadanconstructiongroup.com/refresh-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endpush
