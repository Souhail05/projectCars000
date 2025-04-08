🚗 projectCars000
Application web de gestion de réservations de véhicules, construite avec Laravel, conteneurisée avec Docker, et utilisant MySQL pour la base de données.

📦 Fonctionnalités principales
Création et gestion des réservations de véhicules

Gestion des utilisateurs et des clients

Interface utilisateur simple via Laravel Blade

Interface d’administration

⚙️ Stack Technique
Laravel (PHP) – Back-end & Front-end

MySQL – Base de données

Nginx – Serveur web

Docker & Docker Compose – Conteneurisation

phpMyAdmin (facultatif) – Interface de gestion de base de données

🐳 Docker Setup
1. Cloner le projet
bash
Copy
Edit
git clone https://github.com/Souhail05/projectCars000.git
cd projectCars000
2. Construire et lancer les conteneurs
bash
Copy
Edit
docker compose up --build -d
3. Migrer la base de données
bash
Copy
Edit
docker compose exec app php artisan migrate
4. Accéder à l'application
Frontend : http://localhost:8080

phpMyAdmin : http://localhost:8081 (si ajouté)

API Laravel : via http://localhost:9000

🧱 Architecture des services (docker-compose.yml)
app : Laravel (PHP 8.2), exposé sur le port 9000

mysql : Base de données MySQL (port 3306)

nginx : Serveur web (port 8080)

Volumes partagés pour persistance et synchro du code

Publication de l’image sur Docker Hub :

bash
Copy
Edit
docker tag laravel-app idlahsen/projectcars000:v1.0
docker push idlahsen/projectcars000:v1.0
✅ Commandes utiles
bash
Copy
Edit
# Voir les logs
docker compose logs -f

# Entrer dans le conteneur Laravel
docker compose exec app bash

# Arrêter les conteneurs
docker compose down
🛠 Difficultés rencontrées
Problème d’initialisation Git résolu avec --allow-unrelated-histories

Configuration des volumes et des ports Docker

Permissions Laravel dans le conteneur

📤 Liens
Docker Hub : idlahsen/projectcars000

GitHub : Souhail05/projectCars000

