# SnappyMail pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/snappymail.svg)](https://dash.yunohost.org/appci/app/snappymail) ![](https://ci-apps.yunohost.org/ci/badges/snappymail.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/snappymail.maintain.svg)  
[![Installer SnappyMail avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=snappymail)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer SnappyMail rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Simple, modern, lightweight & fast web-based email client. The drastically upgraded & secured fork of RainLoop Webmail Community edition.


**Version incluse :** 2.15.1~ynh1

**Démo :** https://snappymail.eu/demo/

## Avertissements / informations importantes

Open the admin UI `https://example.com/?admin` to configure your mail server settings. Login with user "admin" and password from the file `/var/www/webmail/data/_data_/_default_/admin_password.txt`.

## Documentations et ressources

* Site officiel de l'app : https://snappymail.eu/
* Documentation officielle de l'admin : https://github.com/the-djmaze/snappymail/wiki
* Dépôt de code officiel de l'app : https://github.com/the-djmaze/snappymail
* Documentation YunoHost pour cette app : https://yunohost.org/app_snappymail
* Signaler un bug : https://github.com/YunoHost-Apps/snappymail_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/snappymail_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/snappymail_ynh/tree/testing --debug
ou
sudo yunohost app upgrade snappymail -u https://github.com/YunoHost-Apps/snappymail_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps