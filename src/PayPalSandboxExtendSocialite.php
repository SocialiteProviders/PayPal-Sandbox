<?php
namespace SocialiteProviders\PayPalSandbox;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PayPalSandboxExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('paypal_sandbox', __NAMESPACE__.'\Provider');
    }
}
