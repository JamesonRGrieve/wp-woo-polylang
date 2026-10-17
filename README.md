# wp-woo-polylang

Makes WooCommerce multilingual on Polylang: translated catalog, synced stock and prices, and a translated cart and checkout.

A companion to [wp-woo-idempotent-importer](https://github.com/JamesonRGrieve/wp-woo-idempotent-importer):
the importer mirrors stores from Shopify, BigCommerce, Squarespace, Wix, Magento, Lightspeed, Ecwid, Etsy and
Square into WooCommerce, and must enforce everything the source store enforced. Where WooCommerce can't hold
a concern natively, a companion plugin like this one holds it, one plugin per concern.

## Scope

- Translated products, variations, attributes and categories linked through Polylang.
- Stock and prices synced across translations.
- Cart, checkout and emails in the visitor's language.
- Prices per currency, with orders in the customer's currency.

## Contract

- A stable data model and a PHP API the importer writes into idempotently: an unchanged source causes zero
  writes.
- Usable on its own as a WooCommerce plugin, with an admin UI to view and edit its records.
- Requires WooCommerce and Polylang; it does nothing until they are active.

## Status

Scaffold: the plugin boots, checks its required plugins and runs the full quality gate. The features above
are tracked on its Deck card (http://192.168.1.12/index.php/apps/deck/board/3/card/398).

## Development

```
composer install   # also wires the pre-commit hook
composer check     # lint, format, PHPStan max, unit tests, audit, validate
```

## License

AGPL-3.0-or-later.
