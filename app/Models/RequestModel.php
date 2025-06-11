<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "request_models";
    protected $fillable = [
        "ref",
        "application_type",
        "type",
        "conversion_id",
        "lga_cert_type",
        "lga_cert_no",
        "lga_cert",
        "last_name",
        "first_name",
        "middle_name",
        "dob",
        "sex",
        "lga",
        "nationality",
        "father_name",
        "mother_name",
        "compound",
        "native_place",
        "passport",
        "nin",
        "purpose",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
