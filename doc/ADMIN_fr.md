Le fichier de mot de passe est créé après la première ouverture de l'interface utilisateur d'administration !

Assurez-vous de changer immédiatement le mot de passe par défaut !

Ouvrez l'interface d'administration de Snappy `https://__DOMAIN____PATH__/app/?admin` pour configurer les paramètres de votre serveur de messagerie. Connectez-vous avec l'utilisateur "admin" et le mot de passe du fichier `__INSTALL_DIR__/app/data/_data_/_default_/admin_password.txt`.

En particulier, pour pouvoir envoyer des mails, il vous faut aller dans l'interface d'administration de Snappy dans l’onglet Domaines.
Cliquez sur « + Ajouter un domaine », ajoutez votre nom de domaine __DOMAIN__ , cliquez sur « autoconfig », allez dans l’onglet « SMTP », cochez « Utiliser l’authentification ».

## Migration depuis RainLoop

### Contacts

Dans le cas où vous n’utilisez pas de service de synchronisation de vos contacts et souhaitez retrouver vos contacts RainLoop dans SnappyMail, suivez la procédure suivante.
Dans RainLoop, exportez vos contacts au format csv ou vCard. Puis, importez-les dans SnappyMail.

### Filtres, Sieve

Si vous utilisiez les filtres (Sieve) avec RainLoop et souhaitez retrouver cette fonctionnalité, allez dans l’interface d’administration, onglet « Domaines ».
Cliquez sur __DOMAIN__, onglet « SIEVE », cochez « autoriser les scripts sieve ».
L’onglet « Filtres » apparaitra dans la configuration de l’interface utilisateur. Pour afficher vos filtres c’est subtil, cliquez sur « Simple » :)

- [FAQ: Enable filters](https://github.com/the-djmaze/snappymail/wiki/FAQ#enable-filters)

---

- [Migration/Upgrade from RainLoop](https://github.com/the-djmaze/snappymail/wiki/Installation-instructions#migrationupgrade-from-rainloop)
