<?php

namespace tricciardi\MailgunTracking\Mail;

use Illuminate\Mail\Mailable;
use tricciardi\MailgunTracking\EmailTracking;

trait MailgunTrackingTrait
{

    protected $message_id;
    /**
     * Build the message.
     *
     * @return $this
     */
    public function addMessageId()
    {
      // parent::build();

      // $sub = Subactivity::where('id',$this->registration->subactivity_id)->first();
      // if($sub) {
        $this->message_id = uniqid();
        $this->withSwiftMessage(function ($message) {
          $headers = $message->getHeaders();
          $headers->addTextHeader('X-Mailgun-Variables', '{"my_message_id": "'.$this->message_id.'"}');
        });
        $tracking = EmailTracking::create(['uid'=>$this->message_id]);
        return $this;
    }
}
