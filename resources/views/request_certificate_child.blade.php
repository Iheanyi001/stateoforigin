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
          <a class="breadcrumb-item active" href="#" data-bcup-haslogintext="no">certificate request</a>
      </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Apply for your child</h4><p></p>
</div>
<div class="br-pagebody">
  <div class="br-section-wrapper">
    @livewire('RequestCertificateForm')
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->
<script>
  $(function () {
      $('#passport').on('change', function() {
          // Get the selected file
          var fileInput = $(this);
          var file = fileInput[0].files[0];

          // Check if a file is selected
          if (file) {
              // Read the file as a data URL
              var reader = new FileReader();
              reader.onload = function(e) {
                  // Update the preview image
                  $('#preview_passport').html('<img src="' + e.target.result + '" alt="Passport Preview" style="max-width: 100%;">');
              };
              reader.readAsDataURL(file);
          } else {
              // If no file is selected, clear the preview
              $('#preview_passport').html('');
          }
      });

      $('#application_type').on('change', function() {
          const application_type = $(this, 'option:selected').val()
          if (application_type === 'soc') {
              $('[data-section="type"]').addClass('d-none')
              $('[data-section="confirm_lga"]').removeClass('d-none')
              $('.cert_title').html('State of Origin Certificate')
          } else {
              $('[data-section="type"]').addClass('d-none')
              $('[data-section="form-layout"]').removeClass('d-none')
              $('.cert_title').html('Local Government of Origin Certificate')
          }
      })

      $('#inlineRadioYes, #inlineRadioNo').on('change', function(){
          var selectedOption = $(this).val();
          if (selectedOption === 'Yes') {
              $('[data-section="confirm_lga"]').addClass('d-none')
              $('[data-section="lga_certificate_type"]').removeClass('d-none')
          }
          if (selectedOption === 'No') {
              $('[data-section="confirm_lga"]').addClass('d-none')
              $('[data-section="form-layout"]').removeClass('d-none')
              $('.cert_title').html('State of Origin Certificate')
          }
      });

      $('input[name="lga_cert_type"]').on('change',function(){
          var selectedOption = $(this).val();
          if (selectedOption === 'digital') {
              $('[data-section="lga_certificate_type"]').addClass('d-none')
              $('[data-section="digital_lga"]').removeClass('d-none')
          }
          if (selectedOption === 'manual') {
              $('[data-section="lga_certificate_type"]').addClass('d-none')
              $('[data-section="manual_lga"]').removeClass('d-none')
          }
      });

      $('.btn-back').on('click', function() {
          // Get the parent section's data attribute
          var currentSection = $(this).closest('[data-section]').attr('data-section');

          // Determine the target section based on the current section
          var targetSection;
          switch(currentSection) {
              case 'confirm_lga':
                  targetSection = 'type';
                  break;
              case 'lga_certificate_type':
                  targetSection = 'confirm_lga';
                  break;
              case 'digital_lga':
              case 'manual_lga':
                  targetSection = 'lga_certificate_type';
                  break;
              default:
                  targetSection = 'type';
          }

          // Hide current section and show the target section
          $('[data-section="' + currentSection + '"]').addClass('d-none');
          $('[data-section="' + targetSection + '"]').removeClass('d-none');
      });

      $('.proceed').on('click', function() {
          var parentSection = $(this).closest('[data-section]');
          var currentSection = parentSection.data('section');
          var targetSection;

          switch(currentSection) {
              case 'digital_lga':
              case 'manual_lga':
                  // Check if the input is not empty
                  if ($('input[name="lga_cert_no"]').val().trim() !== '' || $('input[name="lga_cert"]').val().trim() !== '') {
                      targetSection = 'form-layout';
                  } else {
                      $('.error').html(`fill in required field`);
                      return;
                  }
                  break;
              default:
                  targetSection = 'type';
          }

          // Hide current section and show the target section
          parentSection.addClass('d-none');
          $('[data-section="' + targetSection + '"]').removeClass('d-none');
      });

  })
</script>
    <footer class="br-footer">
  <div class="footer-left">
    <div class="mg-b-2">Copyright © 2024. Rivers State Government. All Rights Reserved.</div>
  </div>

</footer>
  <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
@endsection
