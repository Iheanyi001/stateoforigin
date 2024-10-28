<?php

namespace App\Livewire;

use App\Mail\ApproveRequestMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class RequestView extends Component
{
    public $data;

    public $first_name;
    public $address;
    public $last_name;
    public $middle_name;
    public $dob;
    public $native_place;
    public $compound;
    public $application_type;
    public $city;
    public $status;
    public $payment_status;
    public $ref;
    public $sex;
    public $lga;
    public $nationality;
    public $father_name;
    public $mother_name;
    public $nin;
    public $purpose;
    public $email;
    public $phone;
    public $passport;
    public $update_data;

    public $update_label;

    public $show_modal;

    public function mount(){
        $this->fill($this->data->toArray());
    }

    public function update_application(){
        $this->show_modal = 'show';
        $this->update_label = 'Update Application Status';
    }

    public function update_payment(){
        $this->show_modal = 'show';
        $this->update_label = 'Update Payment Status';
    }
    public function updateStatus(){

        if($this->update_label == 'Update Application Status' ){
            if($this->data->payment_status != 'success'){
                $this->dispatch('alert', ['type' => 'danger', 'message' => 'Payment status is still pending']);
                return;
            }
            $this->status = $this->update_data;
            $this->data->update([
                'status' => $this->update_data
            ]);
        }

        if($this->update_label == 'Update Payment Status'){
            $this->payment_status = $this->update_data;
            $this->data->update([
                'payment_status' => $this->update_data
            ]);
            $this->show_modal = '';

            $certificateUrl = route('certificate.download', ['id' => $this->data->id]); // Generate the download URL

            Mail::to($this->data->email)->send(new ApproveRequestMail($this->data, $certificateUrl));
        }

        $this->dispatch('alert', ['type' => 'success', 'message' => 'Application status changed successfully.']);

        $this->show_modal = '';
        return ;
        //return dd('sloele');
    }

    public function close(){
        $this->show_modal = '';
    }
    public function render()
    {
        return view('livewire.request-view');
    }
}
