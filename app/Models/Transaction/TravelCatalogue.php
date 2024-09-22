<?php

namespace App\Models\Transaction;

use App\Models\Master\Contact;
use App\Models\Master\Destination;
use App\Models\Master\Facility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelCatalogue extends Model
{
    use HasFactory;

    protected $casts = [
        'facilities' => 'array',
        'contact_person' => 'array',
        'packages' => 'array',
        'cover_images' => 'array',
    ];

    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'cover_images',
        'facilities',
        'contact_person',
        'term_condition',
        'packages',
        'is_active',
        'created_by',
        'updated_by'
    ];

    public function facilities() 
    {
        return $this->hasMany(Facility::class);   
    }

    public function destinations() 
    {
        return $this->hasMany(Destination::class);   
    }

    public function contactPerson() 
    {
        return $this->hasMany(Contact::class);   
    }
}
