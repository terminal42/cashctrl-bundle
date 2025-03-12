<?php

declare(strict_types=1);

namespace Terminal42\CashctrlBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class Terminal42CashctrlBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
