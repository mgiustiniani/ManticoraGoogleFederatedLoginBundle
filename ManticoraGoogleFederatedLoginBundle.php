<?php

namespace Manticora\GoogleFederatedLoginBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ManticoraGoogleFederatedLoginBundle extends Bundle
{

    public function getParent()
    {
        return 'FpOpenIdBundle';
    }
}
