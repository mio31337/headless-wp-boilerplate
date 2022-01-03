# Headless WP Boilerplate

## Usage

Clone this project into your Wordpress project

```
/wp-content/themes/
```

Rename folder name to fit your needs.

## Config

Go to `Settings -> Headless Mode` in WP Dashboard and configure `wp-config.php` file.

Add the following to your `wp-config.php` file to redirect all traffic to the new front end of the site (change the URL before saving!):

```
define( 'HEADLESS_MODE_CLIENT_URL', 'https://example.com' );
```

> If after saving the wp-config.php file, your site is still not redirecting, make sure you've replaced https://example.com above with your front end web address.

## Custom endpoints

Check `functions.php` with for a example custom endpoint you can build.
