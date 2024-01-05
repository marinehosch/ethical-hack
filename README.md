# Projet Laravel

Ce projet Laravel peut être lancé de deux manières différentes : via GitHub Codespaces ou en utilisant Docker en local.

## 1. Lancement avec GitHub Codespaces

Pour lancer le projet avec GitHub Codespaces :

- Accédez à [GitHub](https://github.com/) et ouvrez le repository de votre projet.
- Cliquez sur le bouton "Code" en haut à droite de la page du repository.
- Sélectionnez "Open with Codespaces".
- Cliquez sur "New codespace" pour créer un nouvel espace.

GitHub Codespaces configurera automatiquement l'environnement et lancera le projet.

## 2. Lancement avec Docker en Local

Pour lancer le projet en local avec Docker :

- Clonez le repository de votre projet :

```bash
git clone https://github.com/kuasar-mknd/ethical-hack.git
```

- Naviguez vers le dossier du projet :

```bash
cd ethical-hack
```

- Lancez Docker et ouvrez le projet dans un DevContainer. Vous pouvez utiliser Visual Studio Code avec l'extension Remote - Containers pour faciliter cette étape.

- **Important :** Une fois le conteneur créé, assurez-vous de supprimer toutes les redirections de port du `devcontainer.json`.

## Configuration Commune Post-Lancement

Une fois le conteneur lancé (que ce soit via Codespaces ou Docker local), vous devez exécuter les migrations de base de données avec les seed. Pour ce faire, utilisez la commande suivante à l'intérieur du conteneur :

```bash
php artisan migrate --force --seed
```

Cette commande va initialiser votre base de données avec les structures nécessaires et les données de départ.

---

Après ces étapes, votre projet devrait être opérationnel et prêt à être utilisé sur [localhost](http://localhost).

