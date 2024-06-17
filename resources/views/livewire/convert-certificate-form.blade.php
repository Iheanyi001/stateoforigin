<form wire:submit='save'>
    <div class="form-layout form-layout-1">
        <div class="row mg-b-25" style="margin-top:20px;">
          <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Certificate Type: <span class="tx-danger">*</span></label>
                <select wire:model="cert_type" id="application_type" class="form-control">
                    <option value="" selected="" disabled="">Choose application type</option>
                    <option value="soc">State of Origin Certificate</option>
                    <option value="lgco">Local Government of Origin Certificate</option>
                </select>
                @error('cert_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">Upload old certificate(pdf)<span class="tx-danger">*</span></label>
                    <input type="file" accept=".pdf" wire:model.live="old_certificate" class="form-control">
                    @error('old_certificate') <span class="text-danger">{{ $message }}</span> @enderror
                    <div wire:loading wire:target="old_certificate">Uploading...</div>
                </div>
            </div>
        </div><!-- row -->
        <div class="form-layout-footer">
          <button type="submit" class="btn btn-info" data-bcup-haslogintext="no">Submit Form</button>
        </div><!-- form-layout-footer -->
    </div><!-- form-layout -->
</form>
