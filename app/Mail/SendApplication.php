<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendApplication extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    private $request;

    /**
     * @var string
     */
    private $fileName;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @param string $fileName
     */
    public function __construct(array $data, string $fileName)
    {
        $this->request = $data;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.send-application', ['request' => $this->request, 'fileName' => $this->fileName]);
    }
}
