<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',        
        'vat_id',
        'street_name',
        'street_number',
        'zip_code',
        'locality',
        'email',
        'company_type'
    ];

    protected $primaryKey = 'id';

}
