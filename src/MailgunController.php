<?php

namespace tricciardi\MailgunTracking;

use Illuminate\Http\Request;
use tricciardi\MailgunTracking\EmailTracking;
use App\Http\Controllers\Controller;

class MailgunController extends Controller
{
  public function mailgunEvent(Request $request,$action) {

    $log = EmailTracking::where('uid',$request->input('my_message_id'))->first();
    if(!$log)
      abort(406);
    $log->{ $action } = $log->{ $action } +1 ;
    $log->save();
    if($action == 'clicked' && $log->opened == 0) {
      $log->opened = 1;
      $log->save();
    }
    return ['status'=>'ok'];
  }
}
