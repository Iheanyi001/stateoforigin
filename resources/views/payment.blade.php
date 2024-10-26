@extends('layouts.testapp')

@section('content')
<div class="br-mainpanel" style="position: relative;">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix"></script>
  <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/user/home" data-bcup-haslogintext="no">Dashboard</a>
          <a class="breadcrumb-item active" href="#" data-bcup-haslogintext="no">Payment</a>
      </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Make Payment</h4><p></p>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
       <h3 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Certificate Amount</h3>
       <h4 class="mg-b-25 mg-lg-b-50">₦3500</h4>
       <div class="row mg-b-20">
          <div class="col-md-6 mb-2">
             <div class="card  border-info">
                <div class="card-body">
                   <p class="card-text">
                      Payment can be made using the provided IPN. Please proceed to any of our designated tax stations or authorized banks to complete the transaction. Alternatively, our tax officers are also available to assist you with the payment process using your IPN.
                   </p>
                   <b>IPN: 135748998986</b>
                </div>
             </div>
             <!-- card -->
          </div>
          <div class="col-md-6">
             <div class="card  border-info">
                <div class="card-body">
                   <div class="text-center"><b>Pay Online</b></div>
                   <p class="card-text">Make an instant payment by clicking the button below to swiftly confirm your transaction.</p>
                   <a href="https://paystack.com/pay/gzdu76qgds" class="btn d-block text-white" style="background-color:#00b297">Pay</a>
                </div>
             </div>
             <!-- card -->
          </div>
          <!-- col -->
       </div>
       <!-- row -->
    </div>
 </div>

    <footer class="br-footer">
  <div class="footer-left">
    <div class="mg-b-2">Copyright © 2024. Rivers State Government. All Rights Reserved.</div>
  </div>

</footer>
  <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
@endsection
