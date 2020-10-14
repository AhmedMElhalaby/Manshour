<?php


namespace App\Helpers;


class Constant
{
    const NOTIFICATION_TYPE = [
        'General'=>1,
        'Ticket'=>3,
        'Chat'=>4,
    ];
    const VERIFICATION_TYPE = [
        'Email'=>1,
        'Mobile'=>2
    ];
    const VERIFICATION_TYPE_RULES = '1,2';
    const TICKETS_STATUS = [
        'Open'=>1,
        'Closed'=>2
    ];
    const SENDER_TYPE = [
        'User'=>1,
        'Admin'=>2,
    ];
    const MEDIA_TYPES = [
        'Ad'=>1,
    ];
}
