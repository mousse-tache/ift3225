# Jeu de taquin #
## IFT3225 ##
### Félix Bélanger-Robillard et William Neveu ###

#### Choix de représentations ####

Nous avons adopté le format global montré en exemple. Par contre, nous avons redéfini le style des boutons et des labels. Nous avons profité de HTML5 pour les types variés de input qui ont permis de restreindre facilement les valeurs url et celles des nombres.

Afin d'éviter que l'utilisateur ne déplace la fenêtre à chaque étape en utilisant les touches, nous avons désactivé leur comportement ordinaire.

Nous avons laissé un miniature de l'image d'origine afin d'aider le joueur. Il peut également afficher les nombres des cases s'il le désire, tel que demandé.

Dépendemment de la taille de l'écran de l'usager, le nombre de colonnes et de rangées affichable a des limites. Surtout pour les colonnes, qui risquent de s'afficher sur la ligne suivante. 

Quand la partie est commencée et que le joueur appuie sur 'Brasser les tuiles', on lui demandera de confirmer, car cela implique une réinitilisation du jeu. 

#### Apprentissages ####

Nous avons principalement fait des apprentissages par rapport à Jquery. Le cours Programmation 1 de l'Université de Montréal étant entièrement sur Javascript, ce n'est pas sur ce point que les apprentissages ont été fait. Quant à CSS et HTML, nous étions déjà à l'aise de les manipuler pour arriver à nos desseins. 

Par contre, nous avons approfondi notre connaissance de DOM, entre autre par l'utilisation de fonctions telles que appendChild() et replaceChild(). Notre connaissance des sélecteurs CSS a grandement facilité l'utilisation de JQuery. 

#### Liens et autres ####

Le repository est accessible ici, incluant l'ensemble du code source. CSS et Javascript sont dans le dossier public. 

Le jeu est également accessible en version jouable [ici](https://msieurmoustache.github.io/ift3225/tp2/). C'est une copie de qui se retrouve dans le repository, mais sur la branche gh-pages.