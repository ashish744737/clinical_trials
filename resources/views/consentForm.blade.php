@extends('layouts.index')
@section('title') {{'Consent Form'}} @endsection
@section('content')
    
    <section class="mb-4">
        <!--Section headings-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Case studies of migraine</h2>
        <h4 class="h1-responsive font-weight-bold text-center my-4">Consent Form (Age above 18)</h4>
        <hr>

        <div class="container">

            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">

                    <form action="{{route('save')}}" method="POST">
                        @csrf
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                <label for="first_name" class="">First name</label><span class="error-text">*</span>
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{old('first_name')}}">
                                    @error('first_name')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <label for="last_name" class="">Last name</label><span class="error-text">*</span>
                                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{old('last_name')}}">
                                    @error('last_name')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <label for="email" class="">Email</label><span class="error-text">*</span>
                                    <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}">
                                    @error('email')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!--Grid column-->

                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                <label for="date_of_birth" class="">Date of birth</label><span class="error-text">*</span>
                                <div class='input-group date' id='picker'>
                                    <input type='text' class="form-control" name="date_of_birth" id="datepicker" value="{{old('date_of_birth')}}" placeholder="YYYY-MM-DD"/>
                                
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>	                 
                                    </span>
                                    
                                </div>
                                    @error('date_of_birth')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <label for="sex" class="">Sex</label><span class="error-text">*</span>
                                    <select class="form-control form-control-lg mb-3" name="sex" id="sex">
                                        <option value="" selected>Select sex</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('sex')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <label for="email" class="">Frequency of migraine headache</label><span class="error-text">*</span>
                                    <select class="form-control form-control-lg mb-3" name="frequency" id="frequency">
                                        <option value="" selected>Select frequency</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Daily">Daily</option>
                                    </select>
                                    @error('frequency')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <!--Grid column-->
                            <div class="col-md-6 daily_frequency">
                                    <div class="md-form mb-0">
                                        <label for="daily_frequency" class="">Daily Frequency</label>
                                        <select class="form-control form-control-lg mb-3" name="daily_frequency" id="daily_frequency">
                                            <option value="1-2">1-2</option>
                                            <option value="3-4">3-4</option>
                                            <option value="5+">5+</option>
                                        </select>
                                        @error('daily_frequency')
                                            <span class="error-text">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        <!--Grid row-->
                        </div>
                        <hr>
                        <div class="text-center text-md-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
                <!--Grid column-->
            </div>
    
        </div>

        <hr>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-md-0 mb-0">
                <div class="container">
                    <b>Note : </b>
                    <ul class="list-group">
                        <li class="list-group-item">If the applicant is under 18 years of age they are <b>ineligible</b></li>
                        <li class="list-group-item">If the applicant is over 18 years of age and experiences monthly or weekly migraine headaches they are eligible and are assigned to <b>Cohort A</b></li>
                        <li class="list-group-item">If the applicant is over 18 years of age and experiences daily migraine headaches they are eligible and are assigned to <b>Cohort B</b></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
  
    </section>
@endsection