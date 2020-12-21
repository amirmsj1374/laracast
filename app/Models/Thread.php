<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    public function user() {
      return $this->belogsTo(User::class);
    }
    public function channel() {
      return $this->belogsTo(Channel::class);
    }
    public function threads() {
      return $this->hasMany(Answer::class);
    }
}
