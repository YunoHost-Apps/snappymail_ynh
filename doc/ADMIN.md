The password-file is created after first opening the admin UI!

Be sure to immediately change the default password!

Open Snappy's admin UI `https://__DOMAIN____PATH__/app/?admin` to configure your mail server settings. Login with user "admin" and password from the file `__INSTALL_DIR__/app/data/_data_/_default_/admin_password.txt`.

In particular, to be able to send emails, you need to go to Snappy's admin UI, in "Domains" tab.
Click on "+ Add Domain", add your domain name __DOMAIN__, click on "autoconfig", go in "SMTP" tab, check "Use authentication".

## Migration from RainLoop

### Contacts

In the case you are not using a contact synchronization service and wish to regain your RainLoop contacts in SnappyMail, follow following procedure.
In RainLoop, export your contacts in csv or vCard format. Then, import them in SnappyMail.

### Filters, Sieve

If you used to use filters (Sieve) with RainLoop and wish to regain this feature, go into the admin UI, in "Domains" tab.
Click on __DOMAIN__, "SIEVE" tab, check "Allow sieve scripts".
"Filters" tab should appear in the configuration of the user interface. To display your filters it is subtle, click on "Simple" :)

- [FAQ: Enable filters](https://github.com/the-djmaze/snappymail/wiki/FAQ#enable-filters)

---

- [Migration/Upgrade from RainLoop](https://github.com/the-djmaze/snappymail/wiki/Installation-instructions#migrationupgrade-from-rainloop)
