#Système d'authentification

####Fonctionnalités et fichiers correspondants
- Inscription : register.php
- Connexion : login.php et login_handler.php
- Déconnexion : logout.php
- Oubli du mot passe : forgot_password.php et forgot_password_2.php
- Page protégée : profile.php

####Dépendances et autres obligations
- composer
- ircmaxell/password-compat (si PHP version < 5.5)
- ircmaxell/random-lib (génération du token)
- phpmailer/phpmailer
- Compte gmail (pour envoi par SMTP)