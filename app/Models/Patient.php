<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Turn;


class Patient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'birthdate'
    ];

    //DashBoard
    public function turns()
    {
        return $this->hasMany(Turn::class, 'document_number', 'document_number');
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
