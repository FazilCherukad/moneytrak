<?php
/**
 * UndoEmailChangeMail.php
 * Copyright (c) 2019 fazilc.dev@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace FireflyIII\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class UndoEmailChangeMail
 *
 * @codeCoverageIgnore
 */
class UndoEmailChangeMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $newEmail;
    public string $oldEmail;
    public string $url;

    /**
     * UndoEmailChangeMail constructor.
     *
     * @param string $newEmail
     * @param string $oldEmail
     * @param string $url
     */
    public function __construct(string $newEmail, string $oldEmail, string $url)
    {
        $this->newEmail = $newEmail;
        $this->oldEmail = $oldEmail;
        $this->url      = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this
            ->markdown('emails.undo-email-change')
            ->subject((string) trans('email.email_change_subject'));
    }
}
