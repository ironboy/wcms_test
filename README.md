wcms_test
=========

Some WCMS:s to test

Drupal
======
username: admin, password: admin, login at: drupal/user
======
IMPORTANT:

When importing the database in the drupal_db folder please name it vanilladrupal.

The Drupal settings file in sites/default.settings.php is
configured to connect to a database named vanilladrupal
with username root and password mysql (default in AMPPS)



======
username: admin, password: admin, login at: wordpress/wp-admin
======
IMPORTANT:

When importing the database in the wordpress_db folder please name it wordpress.

The Wordpress settings file wp-config.php is
configured to connect to a database named Wordpress
with username root and password mysql (default in AMPPS)

REALLY IMPORTANT: Wordpress uses a lot of absolute links that refer to the original url paths when first installed. Since I installed wordpress into localhost/cmser you will need to move/copy the wordpress folder into a folder called cmser in your site root.
(Meaning the www folder if you are running AMPPS.)




