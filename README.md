## Onionimbus Hub (PHP project)

Central control for an Onionimbus cluster

### What This Repository Contains

This contains both the website and the central infrastructure point.
This code has N purposes:

1. Allow users to sign up
2. Allow users to quickly set up a dedicated tor2web proxy for their domain name
3. Allow admins to add/remove nodes to the cluster

### Requirements

* Latest nginx (1.6.2 / 1.7.5 as of this writing)
* Latest PostgreSQL (9.3.5 as of this writing)
* Latest PHP (5.6.3 as of this writing)
  * `php5-fpm` for nginx
  * `php5-pgsql` for postgresql
  * `php5-cli` for most of the actual functionality
  * `php5-mcrypt`
  * `php5-json` or `php5-common` depending on your distro
* Latest OpenSSL (if you don't update this, my heart won't bleed for you)

See also: [https://github.com/darkitecht/onionimbus_node](Nodes)