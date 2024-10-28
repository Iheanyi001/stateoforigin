@extends('layouts.testapp')

@section('content')
<div class="br-mainpanel" style="position: relative;">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix"></script>
  <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/user/home" data-bcup-haslogintext="no">Dashboard</a>
          <a class="breadcrumb-item active" href="#" data-bcup-haslogintext="no">conversion</a>
      </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Convert to Digital Certifcate</h4><p></p>
</div>
<div class="br-pagebody">
  <div class="br-section-wrapper">
      @livewire('ConvertCertificateForm')
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->

    <footer class="br-footer">
  <div class="footer-left">
    <div class="mg-b-2">Copyright © 2024. Rivers State Government. All Rights Reserved.</div>
  </div>

</footer>
  <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
@endsection
