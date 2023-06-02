<?php
namespace App;

require_once 'vendor/autoload.php';

$notificationService = new NotificationService();
$emailNotificator = new EmailNotificator();
$smsNotificator = new SmsNotificator();
$webPushNotificator = new WebPushNotificator();



$notificationService->notify($emailNotificator, 'hello');
$notificationService->notify($smsNotificator, 'sms');
$notificationService->notify($webPushNotificator, 'webPush');



