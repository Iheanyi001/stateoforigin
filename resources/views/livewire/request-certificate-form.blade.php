<form wire:submit='save' enctype="multipart/form-data">
    <input type="hidden" wire:model="conversion_id" value="">
      <div class="col-lg-12" data-section="type">
        <div class="form-group">
            <label class="form-control-label">Application Type: <span class="tx-danger">*</span></label>
            <select wire:model="application_type" id="application_type" class="form-control" readonly="">
                                            <option value="" selected="" disabled="">Choose application type</option>
                                        <option value="soc">State of Origin Certificate</option>
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
                  <input class="form-control" type="text" wire:model="last_name" value="Parker" placeholder="Enter last name" readonly="">
                  @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="first_name" value="Leah" placeholder="Enter first name" readonly="">
                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Middlename: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="middle_name" value="Jermaine Hartman" placeholder="Enter middle name" readonly="">
                    @error('middle_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Date of birth: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="date" wire:model="dob" value="1984-07-11" placeholder="Enter date of birth" readonly="">
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
                <input type="text" wire:model="nationality" id="nationality" class="form-control" value="Nigeria" readonly="">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Lga: <span class="tx-danger">*</span></label>
                  <select wire:model="lga_id" id="lga_id" class="form-control">
                                                      <option value="1">Atakumosa West</option>
                                                      <option value="2">Atakumosa East</option>
                                                      <option value="3">Aiyedade</option>
                                                      <option value="4">Ayedire</option>
                                                      <option value="5">Boluwaduro</option>
                                                      <option value="6">Boripe</option>
                                                      <option value="7" selected="">Ede South</option>
                                                      <option value="8">Ede North</option>
                                                      <option value="9">Egbedore</option>
                                                      <option value="10">Ejigbo</option>
                                                      <option value="11">Ifedayo</option>
                                                      <option value="12">Ife North</option>
                                                      <option value="13">Ife South</option>
                                                      <option value="14">Ife-Central</option>
                                                      <option value="15">Ife-East</option>
                                                      <option value="16">Ifelodun</option>
                                                      <option value="17">Ila</option>
                                                      <option value="18">Ilesa-East</option>
                                                      <option value="19">Ilesa-West</option>
                                                      <option value="22">Irepodun</option>
                                                      <option value="23">Irewole</option>
                                                      <option value="24">Isokan</option>
                                                      <option value="25">Iwo</option>
                                                      <option value="26">Obokun</option>
                                                      <option value="27">Odo-Otin</option>
                                                      <option value="28">Ola Oluwa</option>
                                                      <option value="29">Olorunda</option>
                                                      <option value="30">Ori-Ade</option>
                                                      <option value="31">Orolu</option>
                                                      <option value="32">Osogbo</option>
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
                  <input type="file" wire:model="passport" id="passport" accept=".jpeg, .jpg, .png" class="form-control">
                  <div id="preview_passport" class="mt-3"></div>
                                      </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Nin: </label>
                  <input class="form-control" type="text" wire:model="nin" placeholder="Enter your nin">
                                      </div>
            </div><!-- col-4 -->
            <div class="col-lg-12">
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
