<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
      return $this->belogsTo(Question::class);
    }

    public function user()
    {
      return $this->belogsTo(User::class);
    }

    public function getBodyHtmlAttribute()
    {
      return \Parsedown::instance()->text($this->body);
    }
}
