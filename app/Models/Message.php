<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    public function title(): string
    {
        return $this->title;
    }

    public function currentCount(): string
    {
        return $this->currentCount;
    }

    public function type(): string
    {
        return $this->type;
    }
}
