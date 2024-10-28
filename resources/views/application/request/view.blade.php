@extends('layouts.testapp')

@section('content')

<div class="br-mainpanel" style="position: relative;">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/user/home" data-bcup-haslogintext="no">Dashboard</a>
          <a class="breadcrumb-item active" href="#" data-bcup-haslogintext="no">All application</a>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">All Application</h4><p></p>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
        <h5 class="mb-3">Application Type: Local Government Of Origin Certificate</h5>
        <div class="row">
            <div class="col-lg-8 mg-t-30 mg-lg-t-0">
                <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                    <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="{{asset('storage/'.$passport)}}" alt="" style="height:120px; width:120px">
                    </div>
                    <div class="col-lg-6">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-15">Applicant Information</h6>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Full Name</label>
                        <p class="tx-info mg-b-15">{{$data->first_name}} {{$data->last_name}} {{$data->middle_name}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email</label>
                        <p class="tx-info mg-b-15">{{$data->email}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Phone</label>
                        <p class="tx-info mg-b-15">{{$data->phone}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Dob</label>
                        <p class="tx-info mg-b-15">{{$data->dob}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Gender</label>
                        <p class="tx-info mg-b-15">{{$data->sex}}</p>
                        <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-15">Parental Information</h6>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Father's name</label>
                        <p class="tx-info mg-b-15">{{$data->father_name}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Mother's name</label>
                        <p class="tx-info mg-b-15">{{$data->father_name}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-15">Place of Origin</h6>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Compound/Hometown in Rivers State</label>
                        <p class="tx-info mg-b-15">{{$data->compound}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Native Place/Community of the Applicant</label>
                        <p class="tx-info mg-b-15">{{$data->native}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Lga</label>
                        <p class="tx-info mg-b-15">{{$data->lga}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Nationality</label>
                        <p class="tx-info mg-b-15">{{$data->nationality}}</p>
                        <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-15">Other Information</h6>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Purpose</label>
                        <p class="tx-info mg-b-15">{{$data->purpose}}</p>
                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Ipn</label>
                        <p class="tx-info mg-b-15">{{$data->ref}}</p>
                    </div>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- col-lg-8 -->
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
                <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                    <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-15">Application Information</h6>
                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Payment Status</label>
                    <span class="badge badge-danger mg-b-15 my-2">{{$data->payment_status}}</span>
                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Application Status</label>
                    <span class="badge badge-danger mg-b-15 my-2">{{$data->status}}</span>
                    <a href="{{route('payment')}}" class="btn btn-info">Make Payment</a>
                    <a href="#" class="btn btn-primary text-white d-block mx-1 my-3">Check Payment Status</a>
                    <p class="text-danger">
                    Have you made payment already and showing pending ? Click on Check payment status to resolve the issue
                    </p>
                </div>
                <!-- card -->
            </div>
            <!-- col-lg-4 -->
        </div>
        <!-- row -->
        </div>
        <!-- br-section-wrapper -->
    </div>
</div>
@endsection


