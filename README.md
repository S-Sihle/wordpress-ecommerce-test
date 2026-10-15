# The Thread — WooCommerce Store

A custom WordPress theme and WooCommerce store built for The Thread Online Store

## Features

- Custom WordPress theme built with PHP, HTML and CSS
- Responsive layouts for desktop and mobile
- WooCommerce product catalogue, cart and checkout
- Customer registration and My Account functionality
- Direct bank transfer (BACS) payment method
- Custom WooCommerce promotional banner implemented through a plugin hook

## Tech Stack

- WordPress
- PHP 8.0+
- WooCommerce
- HTML5
- CSS3
- Git and GitHub

## Products

| Product | Price |
|---|---:|
| The Thread T-Shirt | R199.00 |
| The Thread Hoodie | R499.00 |
| The Thread Cap | R149.00 |
| The Thread Beanie | R99.00 |

## Project Structure

- `thethread-theme/` — Custom WordPress theme
- `thethread-features/` — Custom functionality plugin
- `.gitignore` — Excludes local and sensitive files from version control

## Installation

1. Install WordPress on a local or hosted environment.
2. Install and activate WooCommerce.
3. Copy `thethread-theme/` into `wp-content/themes/`.
4. Copy `thethread-features/thethread-features.php` into `wp-content/plugins/thethread-features/`.
5. Activate **The Thread** theme and **THE THREAD Features** plugin.
6. Configure WooCommerce with South African rand (ZAR) as the store currency.
7. Create the products listed above and configure the required payment method.
8. Assign the WooCommerce Shop, Cart, Checkout and My Account pages under WooCommerce settings.

## Testing

The following have been verified locally:

- Shop page displays all four products.
- T-shirt can be added to the cart at R199.00.
- Checkout loads and offers Direct bank transfer.
- A test order can be placed and appears in WooCommerce Orders.

## Notes

This project was developed locally using LocalWP. Do not commit production credentials, private configuration files or real customer data.