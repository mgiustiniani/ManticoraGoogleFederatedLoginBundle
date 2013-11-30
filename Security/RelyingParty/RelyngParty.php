<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mgiustiniani
 * Date: 19/11/13
 * Time: 11.38
 * To change this template use File | Settings | File Templates.
 */

namespace Manticora\GoogleFederatedLoginBundle\Security\RelyingParty;


use Fp\OpenIdBundle\Bridge\RelyingParty\LightOpenIdRelyingParty;
use Symfony\Component\HttpFoundation\Request;

class RelyingParty  extends LightOpenIdRelyingParty {

    private  $domain;

    public function __construct($domain) {
        $this->domain = $domain;


    }
    protected function guessIdentifier(Request $request)
    {

        return 'https://www.google.com/accounts/o8/site-xrds?hd='.$this->domain;
    }
}