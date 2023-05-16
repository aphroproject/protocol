<?php

declare(strict_types=1);

/*
 * This file is part of Aphro Project.
 * Copyright (C) 2023 Aphro Project<aphroproject@proton.me>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace Aphro\Protocol\ClientMessage;

readonly class Login implements ClientMessageInterface
{
    public function __construct(public string $username, public string $password)
    {
    }
}
