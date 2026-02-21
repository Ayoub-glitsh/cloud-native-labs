
<div align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=28&pause=1000&color=00C2FF&center=true&vCenter=true&width=800&lines=Docker+Multi-Service+Web+Stack" alt="Typing SVG" />
</div>



<div align="center">

<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="50" alt="Docker"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" width="50" alt="Node.js"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" width="50" alt="Express"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="50" alt="Python"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flask/flask-original.svg" width="50" alt="Flask"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="50" alt="MySQL"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original.svg" width="50" alt="Apache"/>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="50" alt="PHP"/>

</div>


<div align="center">
  <img src="assets/mul_02.png" width="800" alt="Project Architecture"/>
</div>





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

## 🌐 Access the Applications

| Service | Description | URL |
|----------|-------------|------|
| 🖥️ Apache + PHP | Main web interface | http://localhost |
| 🗄️ phpMyAdmin | Database management | http://localhost:8080 |
| ⚡ Express API | Node.js backend API | http://localhost:3000 |
| 🐍 Flask App | Python backend service | http://localhost:5000 |


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
<div align="center">

<table>
  <tr>
    <th>Category</th>
    <th>Technology</th>
    <th>Icon</th>
  </tr>

  <tr>
    <td align="center">Containerization</td>
    <td align="center">Docker</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Orchestration</td>
    <td align="center">Docker Compose</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Backend</td>
    <td align="center">Node.js</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Backend Framework</td>
    <td align="center">Express.js</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Backend</td>
    <td align="center">Python</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Backend Framework</td>
    <td align="center">Flask</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flask/flask-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Database</td>
    <td align="center">MySQL</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Web Server</td>
    <td align="center">Apache</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original.svg" width="40"/>
    </td>
  </tr>

  <tr>
    <td align="center">Database Admin</td>
    <td align="center">phpMyAdmin</td>
    <td align="center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40"/>
    </td>
  </tr>

</table>

</div>
    

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
