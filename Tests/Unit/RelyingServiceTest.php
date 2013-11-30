<?php

namespace Manticora\GoogleFederatedLoginBundle\Tests\Unit;
/**
 * User: Mario Giustiniani
 * Date: 30/11/13
 * Time: 20.53
 */
use Manticora\GoogleFederatedLoginBundle\Security\RelyingParty\RelyingParty;

class RelyingServiceTest extends \PHPUnit_Framework_TestCase

{
    /**
     * @test
     */
    public function couldImplementSerialazibleInterface()
    {
        $rc = new \ReflectionClass('Manticora\GoogleFederatedLoginBundle\Security\RelyingParty\RelyingParty');

        $this->assertTrue($rc->implementsInterface('Fp\OpenIdBundle\RelyingParty\RelyingPartyInterface'));
    }
}