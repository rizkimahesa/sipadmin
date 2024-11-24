<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id', 'quantity', 'customer_name'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}