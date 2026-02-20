

    # ☁️ Cloud Native Labs
    
    ![Node.js](https://img.shields.io/badge/Node.js-18+-green)
    ![Express](https://img.shields.io/badge/Express.js-Backend-blue)
    ![Status](https://img.shields.io/badge/Status-Active-success)
    ![License](https://img.shields.io/badge/License-MIT-yellow)
    
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
    
    | Technology | Purpose |
    |------------|----------|
    | Node.js | Backend Runtime |
    | Express.js | Web Framework |
    | Postman | API Testing |
    | Git | Version Control |
    | Docker (Upcoming) | Containerization |
    | Kubernetes (Upcoming) | Orchestration |
    
    ---
    
    ## ⚙️ Installation & Run
    
    ### 1️⃣ Clone Repository
    
    ```bash
    git clone https://github.com/YOUR_USERNAME/cloud-native-labs.git
    cd cloud-native-labs/tp-node-express-api
    

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
Morocco 🇲🇦

* * *

📜 License
----------

This project is licensed under the MIT License.

    
