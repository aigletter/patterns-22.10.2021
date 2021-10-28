<?php


namespace patterns\Adapter;


interface SendEmailInterface
{
    public function sendEmail($to, $message);
}