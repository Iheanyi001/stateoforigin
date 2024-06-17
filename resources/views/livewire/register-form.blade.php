<div class="container-fluid d-flex flex-column align-items-center justify-content-center">

    <div class="header">
        Certificate of Origin System
    </div>
    <div class="col-12 col-md-8 col-lg-6 col-xl-7 pd-4 bg-white" style=" margin-bottom: 10px;">
        <div class="text-center  text-br-primary my-4">
            <h2 class="font-weight-bold">REGISTRATION</h2>
        </div>
        <form wire:submit='save' class="mx-2 mb-2" style="padding: 0 15px">
            <ul class="reg-ul">
                <li class="reg-li">
                    <a class="reg-a {{$this->currentStep == 1 ? 'current':'not-current'}}" wire:click.prevent="">
                        <span class="reg-num {{$this->currentStep == 1 ? 'current':'not-current'}}">1</span>
                        <span class="title {{$this->currentStep == 1 ? 'current':'not-current'}}">Personal Information</span>
                    </a>
                </li>
                <li class="reg-li">
                    <a class="reg-a {{$this->currentStep == 2 ? 'current':'not-current'}}" wire:click.prevent="">
                    <span class="reg-num {{$this->currentStep == 2 ? 'current':'not-current'}}">2</span> <span class="title {{$this->currentStep == 2 ? 'current':'not-current'}}">Others</span></a>
                </li>
            </ul>
            @csrf
                @if($this->currentStep == 1)
                    <section>
                        <input type="hidden" name="_token" value="F3kNqP7GM39ko1NUWWalLgQMYCOzWUHQAyPaTF31" autocomplete="off">
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Lastname</b></span></label>
                                    <input type="text" id="last_name" wire:model="last_name" value="" class="form-control" placeholder="Enter last name" required>
                                    @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Firstname</b></span></label>
                                    <input type="text" id="first_name" wire:model="first_name" value="" class="form-control" placeholder="Enter first name" required>
                                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Middlename</b></span></label>
                                    <input type="text" id="middle_name" wire:model="middle_name" value="" class="form-control" placeholder="Enter middle name">
                                    @error('middle_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Sex</b></span></label>
                                    <select wire:model="sex" id="sex" class="form-control" value="">
                                        <option value="" selected disabled>Select sex</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('sex') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div><div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Date of birth</b></span></label>
                                    <input type="date" id="dob" wire:model="dob" value="" class="form-control" required>
                                    @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Phone</b></span></label>
                                    <input type="text" id="phone" wire:model="phone" value="" class="form-control" placeholder="Enter phone number" required>
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Email</b></span></label>
                                    <input type="email" id="email" wire:model="email" value="" class="form-control">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Nationality</b></span></label>
                                    <input type="text" wire:model="nationality" class="form-control" id="nationality" value="Nigeria" readonly>
                                    @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Password</b></span></label>
                                    <input type="password" id="password" wire:model="password" value="" class="form-control" placeholder="Enter your password" required>
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Confirm password</b></span></label>
                                    <input type="password" id="password_confirmation" value="" wire:model="password_confirmation" class="form-control" placeholder="Confirm password" data-parsley-trigger="change" data-parsley-equalto="#password" required data-parsley-equalto-message="Passwords do not match.">
                                                                    </div>
                            </div>
                        </div>
                    </section>
                @endif

                @if($this->currentStep == 2)
                    <section>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Identification Type</b></span></label>
                                    <select wire:model="identification_type" id="identification_type" value=""class="form-control">
                                        <option selected disabled>Choose Identification type</option>
                                        <option value="Phone Number">Phone Number</option>
                                        <option value="National ID">National ID</option>
                                        <option value="Drivers License">Drivers License</option>
                                        <option value="International Passport">International Passport</option>
                                        <option value=" Resident Permit"> Resident Permit</option>
                                        <option value=" Bank Verification Number"> Bank Verification Number</option>
                                        <option value="Vehicle Number">Vehicle Number</option>
                                    </select>
                                    @error('identification_type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Identification Number</b></span></label>
                                    <input type="text" id="identification_number" wire:model="identification_number" value="" class="form-control" placeholder="Enter identification number" required>
                                    @error('identification_number') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>State</b></span></label>
                                    <input type="text" id="state" wire:model="state" value="osun" placeholder="Enter your state" class="form-control" required readonly>
                                    @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Lga</b></span></label>
                                    <select wire:model="lga" id="lga" class="form-control" value="">
                                        <option value="" selected>Choose your lga</option>
                                        @foreach($lga_array as $lga)
                                            <option value="{{ $lga}}">{{ $lga }}</option>
                                        @endforeach
                                    </select>
                                    @error('lga') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>City/Town</b></span></label>
                                    <input type="text" id="city" wire:model="city" value="" class="form-control" placeholder="Enter city" required>
                                    @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Address</b></span></label>
                                    <input type="text" id="address" wire:model="address" value="" class="form-control" placeholder="Enter your address" required>
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Employment Status</b></span></label>
                                    <select wire:model.live="employment_status" id="employment_status"  class="form-control">
                                        <option value="" selected>Select employment status</option>
                                        <option value="employed">Employed</option>
                                        <option value="self-employed">Self employed</option>
                                        <option value="unemployed">Unemployed</option>
                                        <option value="student">Student</option>
                                    </select>
                                    @error('employment_status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            @if($employment_status)
                            <div class="col-md-6 occupation">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Occupation</b></span></label>
                                    <input type="text" id="occupation" wire:model="occupation" value="" class="form-control" placeholder="Enter your occupation" required>
                                    @error('occupation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            @endif
                        </div>
                        @if($employment_status)
                        <div class="form-row employer_details">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Employer</b></span></label>
                                    <input type="text" id="employer" wire:model="employer" value="" class="form-control" placeholder="Enter employer" required>
                                    @error('employer') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><span class="text-dark"><b>Employer Sector</b></span></label>
                                    <select wire:model="employer_sector" id="employer_sector"  class="form-control">
                                        <option value="" selected>Select employment sector<option>
                                        <option value="employed">Employed</option>
                                        <option value="self-employed">Self employed</option>
                                        <option value="unemployed">Unemployed</option>
                                        <option value="student">Student</option>
                                    </select>
                                    @error('employer_sector') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>
                        @endif
                    </section>
                @endif

                <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                    <div class="row">
                        @if ($currentStep == 2)
                        <div class="col-md-6">
                            <button wire:click="decreaseStep()" type="button" class="btn w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn current">
                                Previous
                            </button>
                        </div>
                        @endif

                        @if ($currentStep == 1 )
                        <div class="col-md-6" style="max-width: 100%">
                            <button wire:click="increaseStep()" type="button" class="btn w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn current">
                                Next
                                <div wire:loading wire:target="increaseStep" class="loading current">Loading&#8230;</div>
                            </button>
                        </div>
                        @endif

                        @if ($currentStep == 2)
                            <div class="col-md-6">
                                <button type="submit" class="btn w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn current">
                                    Submit
                                    <div wire:loading wire:target="save" class="loading current">Loading&#8230;</div>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
        </form>
    </div>


    <div class="justify-content-center">
        <h6 class="text-white">Already signup? <a href="/login" class="text-info" data-bcup-haslogintext="yes">login</a></h6>
    </div>
</div>
