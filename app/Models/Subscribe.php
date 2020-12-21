<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    public function user() {
      return $this->belogsTo(User::class);
    }

    public function thread() {
      return $this->belogsTo(Thread::class);
    }
}
