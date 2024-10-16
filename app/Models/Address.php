<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'area',
        'city',
        'zip',
        // Add other address fields as necessary
    ];

    // Define the relationship back to User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'address_id');
    }

    // Optional: Add any additional methods or logic for addresses here
}