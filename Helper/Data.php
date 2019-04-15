<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\NewsletterSignupEmail\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package MagePal\NewsletterSignupEmail\Helper
 */
class Data extends AbstractHelper
{
    const XML_PATH_ACTIVE = 'newsletter_signup_email/general/active';

    /**
     * If enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return !$this->scopeConfig->isSetFlag(
            self::XML_PATH_ACTIVE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
