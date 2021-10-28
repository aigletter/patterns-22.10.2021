<?php

namespace patterns\Adapter;


class EmailSender implements SendEmailInterface
{
    public function sendEmail($to, $message)
    {
        echo 'Email to ' . $to . ' with message ' . $message . ' was sent successfully' . PHP_EOL;
    }
}