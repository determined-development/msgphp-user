<?php

declare(strict_types=1);

namespace MsgPhp\User\Command;

use MsgPhp\User\UserId;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class RequestUserPassword
{
    public $userId;
    public $token;

    public function __construct(UserId|string|int $userId, ?string $token = null)
    {
        $this->userId = (string) $userId;
        $this->token = $token;
    }
}
