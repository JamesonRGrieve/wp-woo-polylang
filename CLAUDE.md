# wp-woo-polylang — Agent Operating Guide

AGPL-3.0-or-later WordPress plugin (requires WooCommerce): makes WooCommerce multilingual on Polylang: translated catalog, synced stock and prices, and a translated cart and checkout.
README.md is the contract. PHP rules: SOP *Stack Standards → PHP*.

## Layout

- `src/` (outside `Wp/`) — pure, WordPress-free logic. Everything here is unit-tested.
- `src/Wp/` — the WordPress and WooCommerce side; `Plugin` boots only when the required plugins are active.

## Rules

- Enforce the concern exactly as the source stores do; never document a behaviour as unsupported without the
  operator's permission.
- The data model and PHP API are a public contract with wp-woo-idempotent-importer; change them only
  compatibly. Writes through the API are idempotent.
- Version stays 0.0.1 until a public release.
