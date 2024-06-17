<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConvertCertificate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "convert_certificates";

    protected $fillable = [
        "ref",
        "cert_type",
        "old_certificate",
    ];
}
