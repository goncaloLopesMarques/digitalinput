<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;


class OrcamentoSite extends Mailable
{
    use Queueable, SerializesModels;

    public $orcamentoSite;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->orcamentoSite  = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@digitalinput.pt')
                    ->markdown('mail.emailOrcamentoSite');
    }
}