@extends('layouts.index')
@section('title') {{'Admin dashboard'}} @endsection
@section('content')
    
    <section class="mb-4">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Case studies of migraine</h2>
        <h4 class="h1-responsive font-weight-bold text-center my-4">Reports</h4>
        <!--Section description-->
        <hr>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
                        <div class="card-header">Cohort A</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $records['cohortA_percentage'] }}%</b> participants are under Cohort A</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3" style="max-width: 40rem;">
                        <div class="card-header">Cohort B</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $records['cohortB_percentage'] }}%</b> participants are under Cohort B</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3" style="max-width: 40rem;">
                        <div class="card-header">Sex</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Male : {{$records['male']}}, Female : {{$records['female']}}, Other : {{$records['other']}}</b></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>

        <div class="container">
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-md-0 mb-5">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Frequency of migraine</th>
                                <th scope="col">Daily frequency</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($contacts))
                                    @foreach($contacts as $key => $value)
                                    <tr>
                                        <th scope="row">{{++$key}}</th>
                                        <td>{{ ucfirst($value->first_name)." ".ucfirst($value->last_name)}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->date_of_birth}}</td>
                                        <td>{{$value->frequency}}</td>
                                        <td>@if(!empty($value->daily_frequency))
                                                {{$value->daily_frequency}}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{$value->status}}</td>
                                    </tr>

                                    @endforeach
                                        
                                @endif

                            </tbody>
                        </table>
                        {{ $contacts->links() }}
                    </div>
                    <!--Grid column-->
                </div>
        </div>

    </section>
@endsection