<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_register',
        'description',
        'mount_debit',
        'mount_credit',
        'balance',
        'mayor',
    ];

    protected $casts = [
        'date_register' => 'date',
        'mount_debit' => 'decimal:4',
        'mount_credit' => 'decimal:4',
        'balance' => 'decimal:4',
    ];

    protected $attributes = [
        'mayor' => 'N', // Default value
    ];

    /**
     * Relación uno a muchos con DailyRegistersLine
     * Un DailyRegister puede tener muchas líneas de registro.
     */
    public function lines()
    {
        return $this->hasMany(DailyRegistersLine::class);
    }
}
