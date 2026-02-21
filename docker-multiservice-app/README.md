

🐳 Docker Multi-Service Web Stack
=================================
![Docker](https://img.shields.io/badge/Docker-Containerized-blue)![Node.js](https://img.shields.io/badge/Node.js-18-green)![Flask](https://img.shields.io/badge/Flask-2.3-black)![MySQL](https://img.shields.io/badge/MySQL-8.0-orange)![License](https://img.shields.io/badge/License-MIT-lightgrey)

📌 Overview
-----------

**docker-multiservice-app** is a full-stack containerized web environment built to demonstrate modern DevOps fundamentals using Docker and Docker Compose.

This project showcases:

*   Containerization of multiple applications
*   Service orchestration with Docker Compose
*   Persistent database volumes
*   Inter-container networking
*   Multi-language web stack integration
    
* * *

🏗 System Architecture
----------------------

The application runs multiple services inside isolated containers:

*   🟢 Node.js (HTTP server)
*   🟢 Express.js API
*   🟢 Python Flask application
*   🟢 MySQL 8 database
*   🟢 Apache + PHP 
*   🟢 phpMyAdmin interface
*   🟢 Docker bridge network
*   🟢 Persistent storage (Docker volume)
    

* * *

🧠 Architecture Diagram (Mermaid)
---------------------------------


```mermaid
flowchart TB
    Client[User Browser]

    subgraph Application Layer
        Apache[Apache + PHP]
        Express[Node.js Express API]
        Flask[Python Flask App]
    end

    subgraph Database Layer
        MySQL[(MySQL 8 Database)]
    end

    subgraph Admin Layer
        phpMyAdmin[phpMyAdmin]
    end

    Client --> Apache
    Client --> Express
    Client --> Flask

    Apache --> MySQL
    Express --> MySQL
    Flask --> MySQL

    phpMyAdmin --> MySQL
```

* * *

📂 Project Structure
--------------------

    docker-multiservice-app/
    │
    ├── mon-app-node/          # Basic Node.js HTTP server
    ├── mon-app/               # Express.js application
    ├── flask-app/             # Python Flask app
    │
    ├── apache/
    │   └── public_html/
    │       └── index.php
    │
    ├── mysql/
    │   └── init/
    │       └── init.sql
    │
    └── docker-compose.yml
    

* * *

🚀 Getting Started
------------------

### 1️⃣ Clone the repository

    git clone https://github.com/your-username/docker-multiservice-app.git
    cd docker-multiservice-app
    

* * *

### 2️⃣ Start all services

    docker compose up -d
    

* * *

### 3️⃣ Access the applications

Service

URL

Apache + PHP

[http://localhost](http://localhost/)

phpMyAdmin

[http://localhost:8080](http://localhost:8080/)

Express API

[http://localhost:3000](http://localhost:3000/)

Flask App

[http://localhost:5000](http://localhost:5000/)

* * *

🔐 Database Configuration
-------------------------

    Host: mysql
    Database: ma_base
    User: mon_user
    Password: mon_password
    
    Root:
    User: root
    Password: rootpassword
    

* * *

📦 DevOps Concepts Demonstrated
-------------------------------

*   Docker image building
    
*   Multi-container orchestration
    
*   Service dependency management
    
*   Volume persistence
    
*   Network isolation
    
*   Environment variables configuration
    
*   Database initialization scripts
    

* * *

🛠 Tech Stack
-------------

*   Docker
    
*   Docker Compose
    
*   Node.js 18
    
*   Express 4
    
*   Python 3.11
    
*   Flask 2.3
    
*   MySQL 8
    
*   Apache + PHP 8.2
    
*   phpMyAdmin
    

* * *

📈 Why This Project Matters
---------------------------

This project demonstrates practical understanding of:

*   Full-stack deployment
    
*   Container networking
    
*   Production-ready service orchestration
    
*   Backend integration across multiple technologies
    
*   Real-world DevOps workflow
    

* * *

👨‍💻 Author
------------

**Ayoub Aguezar**  
Full-Stack Developer | DevOps Enthusiast  
Morocco 🇲🇦

* * *

* * *

🔥 BONUS – Badges (pour rendre ton README encore plus pro)
==========================================================

Ajoute en haut :

    ![Docker](https://img.shields.io/badge/Docker-Containerized-blue)
    ![Node.js](https://img.shields.io/badge/Node.js-18-green)
    ![Flask](https://img.shields.io/badge/Flask-2.3-black)
    ![MySQL](https://img.shields.io/badge/MySQL-8.0-orange)
    ![License](https://img.shields.io/badge/License-MIT-lightgrey)
    

* * *

Si tu veux maintenant :

*   💎 Une version encore plus “impression recruteur US”
    
*   🎯 Une version optimisée pour ATS / CV tech
    
*   📊 Un diagramme plus avancé style microservices
    
*   🚀 Une section “Future Improvements” pour montrer vision ingénieur
    

Dis-moi 👌
