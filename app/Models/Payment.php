<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enrollment_id', 'paid_date', 'amount'];
    
    use HasFactory;

    // To get all attributes from enrollment class
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
