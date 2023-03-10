<?php

declare(strict_types=1);

namespace UbereatsModels\Login;

use CastModels\Model;

class Login extends Model
{
    public int $last_authenticated;
    public int $expires_in;
    public string $access_token;
    public string $token_type;
    public string $scope;
    public string $refresh_token;
}
