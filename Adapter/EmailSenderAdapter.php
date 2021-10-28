<?php


namespace patterns\Adapter;


use PHPMailer\PHPMailer\PHPMailer;

class EmailSenderAdapter implements \patterns\Adapter\SendEmailInterface
{
    protected $phpMailer;

    public function __construct(PHPMailer $phpMailer)
    {
        $this->phpMailer = $phpMailer;
    }

    public function sendEmail($to, $message)
    {
        $this->phpMailer->addAddress($to);
        $this->phpMailer->Body = $message;

        try {
            $this->phpMailer->send();
        } catch (\Throwable $exception) {
            //echo $exception->getMessage();
        }

        echo 'Adapter is working' . PHP_EOL;

    }
}