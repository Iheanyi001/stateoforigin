<?php

namespace App\Livewire;

use App\Models\RequestModel;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

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
    public $lga_id;
    public function save(){
        //$this->dispatch('alert', ['type' => 'success', 'message' => 'Request submitted successfully.']);
        //return dd(RequestModel::all());
        //$this->validate();
        RequestModel::create([
            "ref" => rand(100,100000).''.time(),
            $this->only([
                "type",
                "conversion_id",
                "lga_cert_type",
                "lga_cert_type",
                "lga_cert_no",
                "lga_cert",
                "last_name",
                "first_name",
                "middle_name",
                "dob",
                "sex",
                "lga",
                "lga_id",
                "application_type",
                "nationality",
                "father_name",
                "mother_name",
                "compound",
                "native_place",
                "passport",
                "nin",
                "purpose",])
                ]
        );

        $this->dispatch('alert', ['type' => 'success', 'message' => 'Request submitted successfully.']);

        return $this->redirect(route('request.certificate'));
    }
    public function render()
    {
        return view('livewire.request-certificate-form');
    }
}
