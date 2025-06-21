<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;

class Turn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'document_number',
        'date',
        'status',
    ];

     //DashBoard
    public function patient()
    {
        return $this->hasMany(Patient::class, 'document_number', 'document_number');
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
        
        ];
    }
}
