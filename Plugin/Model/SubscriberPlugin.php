<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */
namespace MagePal\NewsletterSignupEmail\Plugin\Model;

class SubscriberPlugin
{

    /** @var \MagePal\NewsletterSignupEmail\Helper\Data */
    protected $helper;

    public function __construct(
        \MagePal\NewsletterSignupEmail\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Newsletter\Model\Subscriber $subject
     * @param callable $proceed
     */
    public function aroundSendUnsubscriptionEmail(\Magento\Newsletter\Model\Subscriber $subject, callable $proceed)
    {
        if($this->helper->isEnabled()){
            $proceed();
        }
    }

    /**
     * @param \Magento\Newsletter\Model\Subscriber $subject
     * @param callable $proceed
     */
    public function aroundSendConfirmationRequestEmail(\Magento\Newsletter\Model\Subscriber $subject, callable $proceed)
    {
        if($this->helper->isEnabled()){
            $proceed();
        }
    }

    /**
     * @param \Magento\Newsletter\Model\Subscriber $subject
     * @param callable $proceed
     */
    public function aroundSendConfirmationSuccessEmail(\Magento\Newsletter\Model\Subscriber $subject, callable $proceed)
    {
        if($this->helper->isEnabled()){
            $proceed();
        }
    }
}