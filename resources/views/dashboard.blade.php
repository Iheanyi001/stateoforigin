@extends('layouts.testapp')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page">
            <div class="card shadow-base bd-0 rounded-0 widget-4">
        <div class="card-header ht-75">
        <div class="hidden-xs-down">
            <a href="#" class="mg-r-10" data-bcup-haslogintext="no"><span class="tx-medium"></span></a>
            <a href="#" data-bcup-haslogintext="no"><span class="tx-medium"></span></a>
        </div>
        </div><!-- card-header -->
        <div class="card-body">
        <div class="card-profile-img">
            <img src="{{asset('assets/profile_placeholder.png')}}" alt="">
        </div><!-- card-profile-img -->
        <h4 class="tx-normal tx-roboto tx-white">{{$user->first_name}} {{$user->last_name}}</h4>
        <p class="mg-b-25">

        </p>
        </div><!-- card-body -->
        </div><!-- card -->
        <div class="tab-content br-profile-body">
            <div class="tab-pane fade active show" id="posts">
                <div class="row justify-content-center">
                    <div class="col-lg-9 mg-t-30 mg-lg-t-0">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Contact Information</h6>
                                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Phone Number</label>
                                    <p class="tx-info mg-b-25">{{$user->phone}}</p>

                                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email Address</label>
                                    <p class="tx-inverse mg-b-25">{{$user->email}}</p>
                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Nationality</label>
                                        <p class="tx-inverse mg-b-25">
                                            Nigeria
                                        </p>
                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Home Address</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->address}}
                                        </p>
                                                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">State</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->state}}
                                        </p>
                                                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">City</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->city}}
                                        </p>
                                                                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Lga</label>
                                    <p class="tx-inverse mg-b-25">
                                        {{$user->lga}}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Other Information</h6>

                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Pid</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{44983087 + 1}}
                                        </p>

                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Identification Type</label>
                                        <p class="tx-inverse mg-b-25">
                                            Phone Number
                                        </p>
                                                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Identification number</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->identification_number}}
                                        </p>
                                                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Employment status</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->employment_status}}
                                        </p>
                                                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Employer</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->employer}}
                                        </p>
                                                                                                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Employer sector</label>
                                        <p class="tx-inverse mg-b-25">
                                            Educational Institute
                                        </p>
                                                                                                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Occupation</label>
                                        <p class="tx-inverse mg-b-25">
                                            {{$user->occupation}}
                                        </p>
                                                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col-lg-4 -->
                </div><!-- row -->
            </div><!-- tab-pane -->
        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
            <div class="mg-b-2">Copyright © 2024. Rivers State Government. All Rights Reserved.</div>
            </div>

        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection

