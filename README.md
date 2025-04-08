🚗 projectCars000 – Gestion de Location de Véhicules
Une application Laravel conteneurisée avec Docker pour gérer les réservations et la disponibilité de véhicules.

🧩 Fonctionnalités
Gestion des clients, utilisateurs et véhicules

Réservation de véhicules

Interface web complète (front + back)

Base de données MySQL

Interface phpMyAdmin

🛠️ Stack Technique
Laravel (PHP) – Backend + Frontend

MySQL – Base de données

phpMyAdmin – Interface BDD

Docker & Docker Compose – Conteneurisation

🐳 Docker Hub
📦 Image disponible ici :
👉 idlahsen/projectcars000

⚙️ Lancer le projet en local
1. Cloner le projet
bash
Copy
Edit
git clone https://github.com/Souhail05/projectCars000.git
cd projectCars000
2. Lancer avec Docker Compose
bash
Copy
Edit
docker-compose up -d
Cela lance :

L’application Laravel

La base de données MySQL

phpMyAdmin (accès via http://localhost:8080)

3. Migrer la base de données
bash
Copy
Edit
docker-compose exec app php artisan migrate
🧪 Accès
Application web : http://localhost:8000

phpMyAdmin : http://localhost:8080

Utilisateur : root

Mot de passe : root

📤 Publication
Code source sur GitHub

Image Docker disponible sur Docker Hub (idlahsen/projectcars000:v1.0)

