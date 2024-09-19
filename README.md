<a href="https://www.magepal.com" title="Top Magento 2 Extension Provider" ><img src="https://image.ibb.co/dHBkYH/Magepal_logo.png" width="100" align="right" alt="Magento Extension Provider" /></a>

## Enable/Disable Newsletter Signup Email by MagePal


Quickly disable unwanted newsletter signup and unsubscribe emails.


#### Step 1
##### Using Composer (recommended)
```
composer require magepal/magento2-newsletter-signup-email
```

##### Manually  (not recommended)
 * Download the extension
 * Unzip the file
 * Create a folder {Magento 2 root}/app/code/MagePal/NewsletterSignupEmail
 * Copy the content from the unzip folder


#### Step 2 - Enable extension ("cd" to {Magento root} folder)
```
  php -f bin/magento module:enable --clear-static-content MagePal_NewsletterSignupEmail
  php -f bin/magento setup:upgrade
```


Contribution
---
Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Support
---
If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magepal/magento2-newsletter-signup-email/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.

Magento 2 Plugins
---
[Custom SMTP](https://www.magepal.com/magento2/extensions/custom-smtp.html) | [Google Tag Manager](https://www.magepal.com/magento2/extensions/google-tag-manager.html) | [Enhanced E-commerce](https://www.magepal.com/magento2/extensions/enhanced-ecommerce-for-google-tag-manager.html) | [Reindex](https://www.magepal.com/magento2/extensions/reindex.html) | [Custom Shipping Method](https://www.magepal.com/magento2/extensions/custom-shipping-rates-for-magento-2.html) | [Preview Order Confirmation](https://www.magepal.com/magento2/extensions/preview-order-confirmation-page-for-magento-2.html) | [Guest to Customer](https://www.magepal.com/magento2/extensions/guest-to-customer.html) | [Admin Form Fields Manager](https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html) | [Customer Dashboard Links Manager](https://www.magepal.com/magento2/extensions/customer-dashboard-links-manager-for-magento-2.html) | [Lazy Loader](https://www.magepal.com/magento2/extensions/lazy-load.html) | [Order Confirmation Page Miscellaneous Scripts](https://www.magepal.com/magento2/extensions/order-confirmation-miscellaneous-scripts-for-magento-2.html)

© MagePal LLC. | [www.magepal.com](https://www.magepal.com)
