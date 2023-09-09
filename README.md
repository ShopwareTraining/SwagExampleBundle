# SwagExampleBundle

**Example Symfony bundle to perform tasks within Shopware, without being a Shopware plugin.**

To activate, install this bundle in Shopware and then include the bundle in `config/bundles.php`:

```php
<?php
return [
    ...
    SwagExampleBundle\SwagExampleBundle::class => ['dev' => true],
];
```