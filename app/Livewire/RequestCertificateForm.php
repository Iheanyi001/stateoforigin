<?php

namespace App\Livewire;

use App\Models\RequestModel;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Attributes\Url;
class RequestCertificateForm extends Component
{
    use WithFileUploads;
    public $type;
    public $conversion_id;
    public $lga_cert_type;
    public $lga_cert_no;
    public $lga_cert;
    #[Validate('required')]
    public $last_name;
    #[Validate('required')]
    public $first_name;
    #[Validate('required')]
    public $middle_name;
    #[Validate('required')]
    public $dob;
    #[Validate('required')]
    public $sex;
    #[Validate('required')]
    public $lga;
    #[Validate('required')]
    public $nationality;
    #[Validate('required')]
    public $father_name;
    #[Validate('required')]
    public $mother_name;
    public $compound;
    public $native_place;

    public $passport;
    #[Validate('required')]
    public $nin;
    #[Validate('required')]
    public $purpose;
    public $application_type;
    public $have_lgco;
    public $lga_id;
    public $form_show;

    public function save(){
        $validated = $this->validate();

       $validated['ref'] = rand(100, 100000).''.time();
       $validated['application_type'] = $this->application_type;
        RequestModel::create($validated);

        $this->dispatch('alert', ['type' => 'success', 'message' => 'Request submitted successfully.']);

        return $this->redirect(route('payment'));
    }

    public function set_form_show(){
        if($this->application_type == 'lgco'){
            $this->form_show = "show";
        }
        else{
            $this->form_show == "";
        }

    }
    public function render()
    {
        return view('livewire.request-certificate-form');
    }
}
