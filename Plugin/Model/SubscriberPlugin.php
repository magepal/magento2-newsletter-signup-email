<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\NewsletterSignupEmail\Plugin\Model;

use Magento\Newsletter\Model\Subscriber;
use MagePal\NewsletterSignupEmail\Helper\Data;

class SubscriberPlugin
{

    /** @var Data */
    protected $helper;

    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param Subscriber $subject
     * @param callable $proceed
     */
    public function aroundSendUnsubscriptionEmail(Subscriber $subject, callable $proceed)
    {
        if ($this->helper->isEnabled()) {
            $proceed();
        }
    }

    /**
     * @param Subscriber $subject
     * @param callable $proceed
     */
    public function aroundSendConfirmationRequestEmail(Subscriber $subject, callable $proceed)
    {
        if ($this->helper->isEnabled()) {
            $proceed();
        }
    }

    /**
     * @param Subscriber $subject
     * @param callable $proceed
     */
    public function aroundSendConfirmationSuccessEmail(Subscriber $subject, callable $proceed)
    {
        if ($this->helper->isEnabled()) {
            $proceed();
        }
    }
}
