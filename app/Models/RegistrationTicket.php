<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationTicket extends Model
{
    protected $table = 'registration_ticket';
    
    protected $fillable = [
        'ticket',
        'user_id',
        'used_by'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function usedBy() {
        return $this->belongsTo(User::class, 'used_by', 'id');
    }
}
