<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQUID</title>
  <style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }
  
  header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
  }
  
  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  nav ul li {
    display: inline;
    margin-right: 20px;
  }
  
  nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  
  nav ul li a:hover {
    color: #ffd700;
  }
  
  h1 {
    font-size: 36px;
    margin-top: 20px;
  }
  
  p {
    font-size: 18px;
    color: #ddd;
  }
  
  main {
    padding: 20px;
  }
  
  .events {
    margin-top: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }
  
  .event-card {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }
  
  .event-card:hover {
    transform: translateY(-5px);
  }
  
  .admin-login {
    margin-top: 50px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .admin-login h2 {
    margin-bottom: 20px;
    font-size: 1.5em;
  }
  
  .admin-login form {
    display: flex;
    flex-direction: column;
  }
  
  .admin-login .form-group {
    margin-bottom: 15px;
  }
  
  .admin-login label {
    font-weight: bold;
  }
  
  .admin-login input[type="text"],
  .admin-login input[type="password"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  .admin-login button[type="submit"] {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .admin-login button[type="submit"]:hover {
    background-color: #555;
  }
  
  </style>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">list des les regle</a></li>
        <li><a href="#">ajouter des regles</a></li>
        
      </ul>
    </nav>
    <h1>squid</h1>
    <p>information sur les connexions </p>
  </header>
  
  <main>
    <section class="admin-login">
        
    <h1>Modifier la configuration</h1>
    <form action="http://www.devoir.com/index.php/Traitement/getDonner/" method="post">
        Numero de port d'écoute : 
        <select name="port">
            <option value="3128" >3128</option>
            <option value="8080" >8080</option>
        </select><br>
        Type de stockage de cache : 
        <select id="sens" name="contact">
            <option value="1" >Système de fichier</option>
            <option value="2" >Memoire</option>
        </select><br>
        <!-- <input type="radio" id="stckChoice1" name="contact" value="1" />
        <label for="cstckChoice1">Système de fichier</label>
        <input type="radio" id="stckChoice2" name="contact" value="2" />
        <label for="stckChoice2">Memoire</label><br> -->
        <div class="option"></div>
        taille du telechargement maximum autorisé <input type="number" min="0" name="body_size"> <br>
        Taille maximale de mis en cache (en MB): <input type="number" min="0" name="taille" id="" placeholder="4 MB"><br>
        Temps minimum de mis en cache : <input type="number" min="0" name="min_time" id="" placeholder="15 hours"><br>
        Temps maximum de mis en cache : <input type="number" min="0" name="max_time" id="" placeholder="24 hours"><br>
        Ajouter une liste d'URL que Squid ne doit jamais mettre en cache : <input type="text" name="url_never" id="" placeholder="*.mp3 *.avi"><br>
        Ajouter une liste d'URL à télécharger directement : <input type="text" name="url_download" id="" placeholder="*.exe *.zip"><br>
        Format des fichiers journaux : 
        <select id="sens" name="log">
            <option value="common" >common</option>
            <option value="squid" >squid</option>
        </select><br>
        Nom d'hôte que Squid affiche aux clients : <input type="text" name="hote" id="" placeholder="www.example.com"><br>
        <br>
        <br>
        <input type="submit" value="Configure">
    </form>  
    </section>
  </main>

  <footer>
  </footer>
</body>
</html>
