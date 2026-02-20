<div align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=45&pause=1000&center=true&vCenter=true&width=600&lines=cloud-native-labs" alt="Typing SVG" />
</div>
<br/>

<div align="center">

<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" width="60" alt="Node.js"/>
&nbsp;&nbsp;&nbsp;
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" width="60" alt="Express"/>
&nbsp;&nbsp;&nbsp;
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg" width="60" alt="Postman"/>
&nbsp;&nbsp;&nbsp;
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" width="60" alt="Git"/>
&nbsp;&nbsp;&nbsp;
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="60" alt="Docker"/>
&nbsp;&nbsp;&nbsp;
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg" width="60" alt="Kubernetes"/>

</div>

# ☁️ Cloud Native Labs
    
![Node.js](https://img.shields.io/badge/Node.js-18+-green)![Express](https://img.shields.io/badge/Express.js-Backend-blue)![Status](https://img.shields.io/badge/Status-Active-success)![License](https://img.shields.io/badge/License-MIT-yellow)
    
> A collection of hands-on projects focused on Cloud Native development, backend engineering, and DevOps practices.
    
---
    
## 📌 Overview
    
**Cloud Native Labs** documents my practical learning journey in:
    
- Backend API Development
- RESTful Services
- Containerization with Docker
- Kubernetes Orchestration
- DevOps & CI/CD Fundamentals
- Cloud Deployment Architecture
    
The objective is to build production-ready backend systems using modern cloud-native technologies.
    
---
    
## 📂 Repository Structure
    
    

cloud-native-labs/  
│  
├── tp-node-express-api/  
│ ├── index.js  
│ ├── package.json  
│ └── README.md  
│  
├── tp-docker/  
├── tp-kubernetes/  
└── README.md

    
---
    
## 🚀 Current Project
    
### 🔹 TP Node Express API
    
A REST API built with **Node.js & Express** implementing full CRUD operations.
    
### Features
    
- GET all products
- GET product by ID
- POST new product
- PUT update product
- DELETE product
- JSON request handling
- Status code management
    
---
    
## 🛠 Tech Stack
    
## 🛠 Tech Stack

| Technology | Purpose |
|------------|----------|
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" width="20"/> **Node.js** | Backend Runtime |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" width="20"/> **Express.js** | Web Framework |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg" width="20"/> **Postman** | API Testing |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" width="20"/> **Git** | Version Control |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="20"/> **Docker (Upcoming)** | Containerization |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg" width="20"/> **Kubernetes (Upcoming)** | Orchestration |
    
---
    
## ⚙️ Installation & Run
    
### 1️⃣ Clone Repository
    
```bash
    git clone https://github.com/YOUR_USERNAME/cloud-native-labs.git
    cd cloud-native-labs/tp-node-express-api
```    

### 2️⃣ Install Dependencies

    npm install
    

### 3️⃣ Run Server

    nodemon index.js
    

Server will start at:

    http://localhost:5050
    

* * *

🧪 API Testing (Postman)
------------------------

### GET All Products

    GET http://localhost:5050/
    

### GET Product By ID

    GET http://localhost:5050/products/11
    

### POST New Product

    POST http://localhost:5050/products
    

Body (JSON):

    {
      "designation": "MacBook Pro",
      "prix": 15000,
      "categorie": "Ordinateur"
    }
    

* * *

📈 Roadmap
----------

*    Integrate MongoDB database
*    Implement MVC architecture
*    Add Authentication (JWT)
*    Dockerize the API
*    Deploy with Kubernetes
*    Add CI/CD Pipeline
*    Deploy to Cloud (AWS / Azure / GCP)
  
* * *

🎯 Learning Goals
-----------------

*   Build scalable backend systems
*   Understand containerized architectures
*   Master cloud-native deployment workflows
*   Apply DevOps best practices
    
* * *

👨‍💻 Author
------------

**Ayoub Aguezar**  
Backend & Cloud Engineering Enthusiast  
Morocco

* * *

📜 License
----------

This project is licensed under the MIT License.

    
