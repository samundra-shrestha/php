<?php
// logged user out
use Core\Authenticator;
(new Authenticator())->logout();
redirect('/');