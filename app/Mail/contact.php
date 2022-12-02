<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $subject;
    public $massage;
    public $email;
    public $phone;
    public function __construct($name, $subject, $email, $massage, $phone)
    {
        $this->name=$name;
        $this->subject=$subject;
        $this->massage=$massage;
        $this->email=$email;
        $this->phone=$phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('web.layouts.mail.mail',['phone'=>$this->phone,'email'=>$this->email,'massage'=>$this->massage,'subject'=>$this->subject,'name'=>$this->name,]);
    }
}
