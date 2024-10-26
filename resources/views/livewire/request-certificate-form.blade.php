<form wire:submit='save' enctype="multipart/form-data">
    <input type="hidden" wire:model="conversion_id" value="">
      <div class="col-lg-12" data-section="type">
        <div class="form-group">
            <label class="form-control-label">Application Type: <span class="tx-danger">*</span></label>
            <select wire:model="application_type" id="application_type" class="form-control" readonly="">
                        <option value="" default="">Choose application type</option>
                        <option  value="soc">State of Origin Certificate</option>
                <option value="lgco">Local Government of Origin Certificate</option>
            </select>
        </div>
      </div>
      <div class="col-lg-12 d-none" data-section="confirm_lga">
          <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="form-control-label mb-0">Do you have Local Government of Origin Certificate? <span class="tx-danger">*</span></h5>
              <button type="button" class="btn btn-sm btn-outline-secondary btn-back" data-bcup-haslogintext="no"><i class="fa fa-arrow-left"></i> Back</button>
          </div>
          <div class="px-4">
              <div class="form-check">
                  <input class="form-check-input" type="radio" id="inlineRadioYes" value="Yes">
                  <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" id="inlineRadioNo" value="No">
                  <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
          </div>
                      </div>

      <div class="col-lg-12 d-none" data-section="lga_certificate_type">
          <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="form-control-label mb-0">Lga certificate type <span class="tx-danger">*</span></h5>
              <button type="button" class="btn btn-sm btn-outline-secondary btn-back" data-bcup-haslogintext="no"><i class="fa fa-arrow-left"></i> Back</button>
          </div>
          <div class="px-4">
              <div class="form-check">
                  <input class="form-check-input" type="radio" wire:model="lga_cert_type" id="inlineRadio" value="digital">
                  <label class="form-check-label" for="inlineRadio1">Digital certificate</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" wire:model="lga_cert_type" id="inlineRadio" value="manual">
                  <label class="form-check-label" for="inlineRadio2">Old certificate</label>
              </div>
          </div>
                      </div>
      <div class="col-lg-12 d-none" data-section="digital_lga">
          <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="form-control-label mb-0">Enter your certificate number <span class="tx-danger">*</span></h5>
              <button type="button" class="btn btn-sm btn-outline-secondary btn-back" data-bcup-haslogintext="no"><i class="fa fa-arrow-left"></i> Back</button>
          </div>
          <span class="error text-danger"></span>
          <input type="text" wire:model="lga_cert_no" id="lga_cert_no" placeholder="No54070" class="form-control" maxlength="7">
          <div class="py-3">
              <button type="button" class="btn btn-sm btn-outline-info proceed" data-bcup-haslogintext="no">Proceed to fill form</button>
          </div>
      </div>
      <div class="col-lg-12 d-none" data-section="manual_lga">
          <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="form-control-label mb-0">Upload manual ceritficate<span class="tx-danger">*</span></h5>
              <button type="button" class="btn btn-sm btn-outline-secondary btn-back" data-bcup-haslogintext="no"><i class="fa fa-arrow-left"></i> Back</button>
          </div>
          <input type="file" wire:model="lga_cert" accept=".jpeg, .jpg, .png, .pdf" class="form-control">
          <span class="error text-danger"></span>
          <div class="py-3">
              <button type="button" class="btn btn-sm btn-outline-info proceed" data-bcup-haslogintext="no">Proceed to fill form</button>
          </div>
      </div>
      <div class="form-layout form-layout-1 d-none" data-section="form-layout">
          <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="cert_title form-control-label mb-0">Lga certificate type <span class="tx-danger">*</span></h5>
              <button type="button" class="btn btn-sm btn-outline-secondary btn-back" data-bcup-haslogintext="no"><i class="fa fa-arrow-left"></i> Back</button>
          </div>

          <div class="row mg-b-25" style="margin-top:20px;">
            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" wire:model="last_name" value="Parker" placeholder="Enter last name" >
                  @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="first_name" value="Leah" placeholder="Enter first name" >
                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Middlename: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="middle_name" value="Jermaine Hartman" placeholder="Enter middle name" >
                    @error('middle_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Date of birth: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="date" wire:model="dob" value="1984-07-11" placeholder="Enter date of birth" >
                    @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Sex: <span class="tx-danger">*</span></label>
                <select wire:model="sex" id="sex" class="form-control">
                  <option value="male" selected="">Male</option>
                  <option value="female">Female</option>
                </select>
                @error('sex') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
                <input type="text" wire:model="nationality" id="nationality" class="form-control" value="Nigeria">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Lga: <span class="tx-danger">*</span></label>
                  <select wire:model="lga_id" id="lga_id" class="form-control">
                    <option value="" default> --select LGA--</option>
                    <option value="Abua-Odual">Abua-Odual LGA</option>
                    <option value="Ahoada East">Ahoada East LGA</option>
                    <option value="Ahoada West">Ahoada West LGA</option>
                    <option value="Akuku-Toru">Akuku-Toru LGA</option>
                    <option value="Andoni">Andoni LGA</option>
                    <option value="Asari-Toru">Asari-Toru LGA</option>
                    <option value="Bonny">Bonny LGA</option>
                    <option value="Degema">Degema LGA</option>
                    <option value="Eleme">Eleme LGA</option>
                    <option value="Emohua">Emohua LGA</option>
                    <option value="Etche">Etche LGA</option>
                    <option value="Gokana">Gokana LGA</option>
                    <option value="Ikwerre">Ikwerre LGA</option>
                    <option value="Oyigbo">Oyigbo LGA</option>
                    <option value="Khana">Khana LGA</option>
                    <option value="Obio-Akpor">Obio-Akpor LGA</option>
                    <option value="Ogba-Egbema-Ndoni">Ogba-Egbema-Ndoni LGA</option>
                    <option value="Ogu-Bolo">Ogu-Bolo LGA</option>
                    <option value="Okrika">Okrika LGA</option>
                    <option value="Omumma">Omumma LGA</option>
                    <option value="Opobo-Nkoro">Opobo-Nkoro LGA</option>
                    <option value="Port Harcourt">Port Harcourt LGA</option>
                    <option value="Tai">Tai LGA</option>

                                              </select>
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Father's Full Name: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" wire:model="father_name" placeholder="Enter father's name">
                                    </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label">Mother's Full Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" wire:model="mother_name" placeholder="Enter mother's name">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Compound/Hometown in Abia State: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" wire:model="compound" placeholder="Enter compound">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Native place/Community of Applicant: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" wire:model="native_place" placeholder="Enter native place">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                  <label for="">Upload Digital Photo <span class="text-danger">(max size:2mb)</span>: <span class="tx-danger">*</span></label>
                  <input wire:ignore type="file" name="passport"  id="passport" accept=".jpeg, .jpg, .png" class="form-control">
                  <div id="preview_passport" class="mt-3"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Nin: </label>
                  <input class="form-control" type="text" wire:model="nin" placeholder="Enter your nin">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-12" >
              <div class="form-group">
                  <label class="form-control-label">Purpose of application:</label>
                  <textarea class="form-control" wire:model="purpose" id="purpose" cols="30" rows="10"></textarea>
                                      </div>
            </div>

          </div><!-- row -->
          <div class="form-layout-footer">
            <button type="submit" class="btn btn-info" >Submit Form</button>
          </div><!-- form-layout-footer -->
      </div>
  </form>
