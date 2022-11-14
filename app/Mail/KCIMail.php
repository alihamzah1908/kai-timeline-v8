<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KCIMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->type == 'timeline') {
            $types = 'Timeline';
        } else if ($this->type == 'npp') {
            $types = 'SPR';
        } else if ($this->type == 'pbj') {
            $types = 'PBJ';
        }else if ($this->type == 'contract') {
            $types = 'PBJ';
        }
        return $this->from('no-reply@krl.co.id')
            ->view('auth.email')
            ->with(
                [
                    'name' => 'C-LOG EMAIL NOTIFICATION',
                    'description' => 'You have new task for ' . $types,
                ]
            );
    }
}
