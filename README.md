# The Thread — WooCommerce Store

A custom WordPress theme and WooCommerce online store built for **The Thread**.

## Features

- Custom WordPress theme built with PHP, HTML5 and CSS3.
- Responsive layouts for desktop and mobile devices.
- Homepage displaying three featured products in a centred layout.
- WooCommerce product catalogue with four products.
- Shopping cart and checkout functionality.
- Customer registration and My Account functionality.
- Direct bank transfer (BACS) payment method.
- Custom WooCommerce promotional banner implemented through a plugin hook.
- Git version control and GitHub source-code repository.

## Tech Stack

- WordPress
- PHP 8.0+
- WooCommerce
- HTML5
- CSS3
- Git and GitHub
- LocalWP

## Products

| Product | Price |
|---|---:|
| The Thread T-Shirt | R199.00 |
| The Thread Hoodie | R499.00 |
| The Thread Cap | R149.00 |
| The Thread Beanie | R99.00 |

## Project Structure

- `thethread-theme/` — Custom WordPress theme.
- `thethread-features/` — Custom WooCommerce functionality plugin.
- `.gitignore` — Excludes local and sensitive files from version control.
- `README.md` — Project documentation and installation instructions.

## Installation

1. Install WordPress in a local or hosted environment.
2. Install and activate WooCommerce.
3. Copy the `thethread-theme/` folder into `wp-content/themes/`.
4. Create a `thethread-features/` folder inside `wp-content/plugins/` and copy `thethread-features.php` into it.
5. Activate **The Thread** theme and **The Thread Features** plugin from the WordPress admin dashboard.
6. Configure WooCommerce with South African rand (ZAR) as the store currency.
7. Create the four products listed above and mark the desired homepage products as featured.
8. Configure the Shop, Cart, Checkout and My Account pages in WooCommerce.
9. Enable Direct bank transfer under WooCommerce payment settings for testing.

## Testing

The following functionality has been verified locally:

- Homepage loads successfully and displays three featured products.
- Featured product cards are centred on the homepage.
- Shop page displays all four products.
- Promotional banner displays on the Shop page.
- Promotional banner layout has been checked on mobile.
- The Thread T-Shirt product page displays the correct price of R199.00.
- Adding the T-shirt to the cart produces the expected cart total.
- Checkout loads and offers Direct bank transfer.
- A test order was placed and verified in WooCommerce Orders.

## Notes

- This project was developed locally using LocalWP.
- The test order used Direct bank transfer; no real payment was processed.
- Product images and product content must be configured in the WordPress environment.
- Do not commit production credentials, private configuration files or real customer data.