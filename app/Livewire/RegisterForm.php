<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class RegisterForm extends Component
{
    public $currentStep = 1;


    public $totalSteps = 2;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $sex;
    public $dob;
    public $phone;
    public $email;
    public $nationality = 'Nigeria';
    public $password;
    public $password_confirmation;


    public $identification_type;
    public $identification_number;
    public $state = 'Rivers';
    public $lga;
    public $city;
    public $address;
    public $employment_status;
    public $occupation;
    public $employer;
    public $employer_sector;

    public $lga_array;

    public function mount(){
        $this->lga_array = ['Aba North', 'Aba South', 'Arochukwu', 'Bende',
        'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato',
        'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West',
        'Umuahia North', 'Umuahia South', 'Umu Nneochi'
    ];
    }

    public function validateData(){
        /*return dd(["state_of_origin" => $this->state_of_origin,
        "lga_of_origin" => $this->lga_of_origin]);*/
        if($this->currentStep == 1){
            $this->validate([
                "first_name" => "required",
                "middle_name" => "required",
                "last_name" => "required",
                "dob" => "required",
                "phone" => "required|digits:11|unique:users",
                "email" => "required|email|unique:users",
                "nationality" => "required",
                "sex" => "required",
                "password" => "required",
            ]);
        }
        if($this->currentStep == 2){
            $this->validate([
                 "identification_type"   => "required",
                 "identification_number" => "required",
                 "state" => "required",
                 "lga"  => "required",
                 "city"  => "required",
                 "address"   => "required",
                 "employment_status" => "required",
            ]);
            if($this->employment_status){
                $this->validate([
                "occupation" => "required",
                "employer" => "required",
                "employer_sector" => "required",
                ]);
            }
        }
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function save(){
        $this->resetErrorBag();
        if($this->currentStep == 2){
            $this->validate([
                 "identification_type"   => "required",
                 "identification_number" => "required",
                 "state" => "required",
                 "lga"  => "required",
                 "city"  => "required",
                 "address"   => "required",
                 "employment_status" => "required",
            ]);
            if($this->employment_status){
                $this->validate([
                "occupation" => "required",
                "employer" => "required",
                "employer_sector" => "required",
                ]);
            }
        }

        User::create([
            "first_name" => $this->first_name,
            "middle_name" => $this->middle_name,
            "last_name" => $this->last_name,
            "sex" => $this->sex,
            "dob" => $this->dob,
            "phone" => $this->phone,
            "email" => $this->email,
            "nationality" => $this->nationality,
            "password" => $this->password,
            "identification_type" => $this->identification_type,
            "identification_number" => $this->identification_number,
            "state" => $this->state,
            "lga" => $this->lga,
            "city" => $this->city,
            "address" => $this->address,
            "employment_status" => $this->employment_status,
            "occupation" => $this->occupation,
            "employer" => $this->employer,
            "employer_sector" => $this->employer_sector,
        ]);
        $this->dispatch('alert', ['type' => 'success', 'message' => 'Account created successfully.']);
        return redirect('login');
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
