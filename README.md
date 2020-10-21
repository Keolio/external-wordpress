# External - Wordpress

## Setup

Cloner ce repository comme un sous-module de l'instance Wordpress en lieu et place du dossier `wp-content` d'origine.

Puis, activer le plugin `ACF PRO`, ainsi que le thème `keolio`.

Ensuite, synchroniser les groupes de champs ACF existant dans le back office de Wordpress.

Pour finir, créer une page `gui` avec le template `gui`.

Let's go ! 🚀

## Webpack

Pour lancer la compilation des JS & SCSS :

`cd app/wp-content/themes/keolio`

Puis :

`npm install` ou `yarn install`

Pour finir :

`npm run dev` ou `yarn dev`

Pour build en mode prod :

`npm run build` ou `yarn build`

## Composants
