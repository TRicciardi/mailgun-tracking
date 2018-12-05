<?php

namespace tricciardi\MailgunTracking;

use Illuminate\Database\Eloquent\Model;

class EmailTracking extends Model
{
  protected $table = 'email_tracking';

  protected $fillable = ['uid'];

}
