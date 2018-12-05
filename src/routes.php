<?php

Route::get('mailgun/{action}','tricciardi\MailgunTracking\MailgunController@mailgunEvent');
Route::post('mailgun/{action}','tricciardi\MailgunTracking\MailgunController@mailgunEvent');
