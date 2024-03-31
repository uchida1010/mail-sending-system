<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class MailSend extends Mailable
{
    use Queueable, SerializesModels;

    public $send_user; 
    public $send_user_mail;
    public $content;
    public $company;
    public $name;
    public $tel;
    public $email;

    /**
     * Create a new message instance.
     */
    public function __construct($send_user,$send_user_mail, $content, $company, $name, $tel, $email)
    {
        $this->send_user = $send_user;  
        $this->send_user_mail = $send_user_mail; 
        $this->content = $content;
        $this->company = $company;
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('test@exmple.com'),
            subject: 'お問い合わせがありました。',
            to: $this->send_user_mail,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.index',
            with: [
                'user' => $this->send_user,
                'company' => $this->company,
                'name' => $this->name,
                'tel' => $this->tel,
                'email' => $this->email,
                'content' => $this->content,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
