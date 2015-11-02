<?php

namespace MMITVBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MMITVUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}