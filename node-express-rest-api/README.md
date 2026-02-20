<div align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=34&pause=1000&center=true&vCenter=true&width=700&lines=Node+Express+REST+API" alt="Typing SVG" />
</div>



# 🚀 Node Express REST API
  ![Node.js](https://img.shields.io/badge/Node.js-18+-green)![Express](https://img.shields.io/badge/Express.js-Backend-blue)![REST API](https://img.shields.io/badge/API-REST-orange)![License](https://img.shields.io/badge/License-MIT-yellow)
    
  > A simple RESTful API built with Node.js and Express implementing full CRUD operations.
    
  ---
    
  ## 📌 Project Overview
    
  This project is a backend REST API developed using **Node.js** and **Express.js**.  
    It demonstrates how to build and manage API endpoints using modern backend development practices.
    
  The API manages a list of products and supports:
    
  - Create
  - Read
  - Update
  - Delete (CRUD)
    
---
    
   ## 🛠 Tech Stack
    
    

    
    

       
    

       
    

       
    

    
    

    
  ---
    
## 📂 Project Structure
    
    
```bash
node-express-rest-api/  
├── demo01/
├── demo02/ 
├── test.js 
└── README.md
```
    
    ---
    
  ## ⚙️ Installation & Setup
    
  ### 1️⃣ Clone the Repository
    
  ```bash
  git clone https://github.com/YOUR_USERNAME/node-express-rest-api.git
  cd node-express-rest-api
  ```  

### 2️⃣ Install Dependencies

    npm install
    

### 3️⃣ Run the Server

    nodemon index.js
    

Server will run on:

    http://localhost:5050
    

* * *

🧪 API Endpoints
----------------

### 🔹 GET All Products

    GET / 
    

### 🔹 GET Product by ID

    GET /products/:num
    

Example:

    GET /products/11
    

### 🔹 POST Create Product

    POST /products
    

Body (JSON):

    {
      "designation": "MacBook Pro",
      "prix": 15000,
      "categorie": "Ordinateur"
    }
    

### 🔹 PUT Update Product

    PUT /products/:num
    

### 🔹 DELETE Product

    DELETE /products/:num
    

* * *

🎯 Learning Objectives
----------------------

*   Understand REST API architecture
    
*   Handle HTTP methods (GET, POST, PUT, DELETE)
    
*   Work with JSON data
    
*   Manage routes in Express
    
*   Test APIs using Postman
    

* * *

🚀 Future Improvements
----------------------

*   Integrate MongoDB
    
*   Implement MVC architecture
    
*   Add authentication (JWT)
    
*   Add environment variables (.env)
    
*   Dockerize the application
    

* * *

👨‍💻 Author
------------

**Ayoub Aguezar**  
Backend & Cloud Enthusiast  
Morocco 🇲🇦

* * *

📜 License
----------

