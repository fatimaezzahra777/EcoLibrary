# 📚 EcoLibrary API

## 📌 Description
EcoLibrary est une API REST développée avec **Laravel** permettant de gérer une bibliothèque numérique.

Le système permet :

- de gérer les **catégories de livres**
- de gérer les **livres dans chaque catégorie**
- de suivre l'état des livres (livres dégradés)
- de consulter des **statistiques sur la collection**
- d'utiliser une **authentification sécurisée avec Laravel Sanctum**

---

# 🎯 Objectifs du projet

- Gestion des catégories
- Gestion des livres
- Recherche de livres
- Statistiques sur la collection
- Suivi des livres dégradés
- Documentation API

---

# 🛠 Technologies utilisées

- PHP
- Laravel
- MySQL
- Laravel Sanctum
- Postman
- Swagger

---

# ⚙ Installation du projet

## 1️⃣ Cloner le projet

```bash
git clone https://github.com/username/ecolibrary.git
cd ecolibrary
```

## 2️⃣ Installer les dépendances

```bash
composer install
```

## 3️⃣ Configurer l'environnement

Copier le fichier `.env`

```bash
cp .env.example .env
```

Configurer la base de données dans `.env`

```
DB_DATABASE=EcoLibrary
DB_USERNAME=root
DB_PASSWORD=
```

---

## 4️⃣ Générer la clé Laravel

```bash
php artisan key:generate
```

---

## 5️⃣ Lancer les migrations

```bash
php artisan migrate
```

---

## 6️⃣ Lancer le serveur

```bash
php artisan serve
```

Le serveur sera disponible sur :

```
http://127.0.0.1:8000
```

---

# 🔐 Authentification

L'API utilise **Laravel Sanctum**.

## Register

**POST**

```
/api/register
```

### Body JSON

```json
{
"name": "FatimaEzzahra",
"email": "fatima@gmail.com",
"password": "password",
"password_confirmation": "password"
}
```

---

## Login

**POST**

```
/api/login
```

### Body JSON

```json
{
"email": "fatima@gmail.com",
"password": "password"
}
```

### Réponse

```json
{
"user": {...},
"token": "1|xxxxxxxxxxxxx"
}
```

Utiliser ce token dans les requêtes protégées :

```
Authorization: Bearer TOKEN
```

---

## Logout

**POST**

```
/api/logout
```

Header :

```
Authorization: Bearer TOKEN
```

---

# 📂 Gestion des catégories

## Voir toutes les catégories

**GET**

```
/api/categories
```

---

## Ajouter une catégorie

**POST**

```
/api/categories
```

### Body JSON

```json
{
"name": "Informatique",
"description": "Livres de programmation"
}
```

---

## Modifier une catégorie

**PUT**

```
/api/categories/{id}
```

---

## Supprimer une catégorie

**DELETE**

```
/api/categories/{id}
```

---

# 📚 Gestion des livres

## Voir tous les livres

**GET**

```
/api/books
```

---

## Ajouter un livre

**POST**

```
/api/books
```

### Body JSON

```json
{
"title": "Laravel pour débutant",
"author": "John Doe",
"description": "Guide Laravel",
"publication_year": 2023,
"category_id": 1
}
```

---

## Modifier un livre

**PUT**

```
/api/books/{id}
```

---

## Supprimer un livre

**DELETE**

```
/api/books/{id}
```

---

# 📊 Statistiques

## Statistiques globales

**GET**

```
/api/statistics
```

Retourne :

- nombre total de livres
- nombre total de catégories
- nombre total d'utilisateurs

---

## Livres les plus consultés

**GET**

```
/api/statistics/popular-books
```

---


# 🔒 Middleware

Le projet utilise deux middlewares :

- `auth:sanctum` → routes protégées
- `admin` → accès réservé aux administrateurs

---

# 📖 Documentation API

Documentation disponible via :

## Swagger

```
/api/documentation
```

ou via une **collection Postman**.

---

# 👩‍💻 Auteur

Projet réalisé par :

**FatimaEzzahra Belissaoui**

---

# 📜 Licence

Projet éducatif.