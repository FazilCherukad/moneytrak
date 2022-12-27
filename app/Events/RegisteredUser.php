<?php

/**
 * RegisteredUser.php
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

namespace FireflyIII\Events;

use FireflyIII\User;
use Illuminate\Queue\SerializesModels;

/**
 * Class RegisteredUser.
 *
 * @codeCoverageIgnore
 */
class RegisteredUser extends Event
{
    use SerializesModels;

    public User $user;

    /**
     * Create a new event instance. This event is triggered when a new user registers.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
