<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Confirmation Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.send-email',
            with: [
            'data' => $this->data,   // <-- MUST HAVE
            ]
        );
    }

    public function attachments(): array
    {
        if (isset($this->data['invoice_path']) && file_exists($this->data['invoice_path'])) {
            return [
                Attachment::fromPath($this->data['invoice_path'])
                    ->as($this->data['invoice_number'] . '.pdf')
                    ->withMime('application/pdf'),
            ];
        }

        return [];
    }
}
