<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Test MySQL + PHP + Docker</title> 
    <style> 
        body { font-family: Arial; margin: 40px; line-height: 1.6; } 
        .success { color: green; background: #e8f5e8; padding: 10px; border-radius: 5px; } 
        .error { color: red; background: #ffe8e8; padding: 10px; border-radius: 5px; } 
        h1 { color: #2c3e50; } 
        .info { background: #f0f0f0; padding: 10px; border-radius: 5px; } 
    </style> 
</head> 
<body> 
    <h1>Test de connexion MySQL depuis Apache/PHP</h1> 
     
    <?php 
    $host = 'mysql'; // Nom du service dans docker-compose 
    $user = 'mon_user'; 
    $password = 'mon_password'; 
    $database = 'ma_base'; 
     
    echo "<div class='info'>"; 
    echo "<h3>📡 Informations de connexion :</h3>"; 
    echo "Hôte: $host<br>"; 
    echo "Base de données: $database<br>"; 
    echo "Utilisateur: $user<br>"; 
    echo "</div>"; 
     
    try { 
        // Connexion à MySQL 
        $mysqli = new mysqli($host, $user, $password, $database); 
         
        if ($mysqli->connect_error) { 
            throw new Exception("Erreur de connexion: " . $mysqli->connect_error); 
        } 
         
        echo "<div class='success'> Connexion à MySQL réussie !</div>"; 
         
        // Création d'une table de test si elle n'existe pas 
        $mysqli->query("CREATE TABLE IF NOT EXISTS test ( 
            id INT AUTO_INCREMENT PRIMARY KEY, 
            message VARCHAR(255), 
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        )"); 
         
        // Insertion d'un message de test 
        $mysqli->query("INSERT INTO test (message) VALUES ('Test depuis Apache/PHP')"); 
         
        // Récupération des derniers messages 
        $result = $mysqli->query("SELECT * FROM test ORDER BY date DESC LIMIT 5"); 
         
        if ($result->num_rows > 0) { 
            echo "<h3>📝 Derniers messages dans la base :</h3>"; 
            echo "<ul>"; 
            while ($row = $result->fetch_assoc()) { 
                echo "<li>[" . $row['date'] . "] " . $row['message'] . "</li>"; 
            } 
            echo "</ul>"; 
        } 
         
        $mysqli->close(); 
         
    } catch (Exception $e) { 
        echo "<div class='error'> Erreur : " . $e->getMessage() . "</div>"; 
    } 
    ?> 
     
    <hr> 
    <p> 
        🔗 Accéder à phpMyAdmin : <a href="http://localhost:8080" 
target="_blank">http://localhost:8080</a><br> 
         Identifiants phpMyAdmin : root / rootpassword 
    </p> 
</body> 
</html> 