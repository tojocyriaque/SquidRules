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
  .admin-login {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            text-align: left;
        }

        select,
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

  
  </style>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="http://www.devoir.com/index.php/LogProxy/list">lister les logs du proxy</a></li>
        <li><a href="#">ajouter des regles Acl</a></li>
        <li><a href="http://www.devoir.com/index.php/acceuille">mse en cache</a></li>
        
      </ul>
    </nav>
    <h1>squid</h1>
    <p>serveur proxy</p>
  </header>
  
  <main>
    <section class="admin-login">
        <h1>Modifier la configuration de Mise en Cache</h1>
          <form action="http://www.devoir.com/index.php/Traitement/getDonner/" method="post">
                  <label for="port">Numero de port d'écoute :</label>
                  <select name="port" id="port">
                      <option value="3128">3128</option>
                      <option value="8080">8080</option>
                  </select>
                  <br>
                  <label for="stockage">Type de stockage de cache :</label>
                  <select name="stockage" id="stockage">
                      <option value="1">Système de fichier</option>
                      <option value="2">Memoire</option>
                  </select>
                  <br>
                  <label for="body_size">Taille du téléchargement maximum autorisé :</label>
                  <input type="number" min="0" name="body_size" id="body_size">
                  <br>
                  <label for="taille">Taille maximale de mis en cache (en MB):</label>
                  <input type="number" min="0" name="taille" id="taille" placeholder="4 MB">
                  <br>
                  <label for="min_time">Temps minimum de mis en cache :</label>
                  <input type="number" min="0" name="min_time" id="min_time" placeholder="15 hours">
                  <br>
                  <label for="max_time">Temps maximum de mis en cache :</label>
                  <input type="number" min="0" name="max_time" id="max_time" placeholder="24 hours">
                  <br>
                  <label for="url_never">Ajouter une liste d'URL que Squid ne doit jamais mettre en cache :</label>
                  <input type="text" name="url_never" id="url_never" placeholder="*.mp3 *.avi">
                  <br>
                  <label for="url_download">Ajouter une liste d'URL à télécharger directement :</label>
                  <input type="text" name="url_download" id="url_download" placeholder="*.exe *.zip">
                  <br>
                  <label for="log">Format des fichiers journaux :</label>
                  <select name="log" id="log">
                      <option value="common">common</option>
                      <option value="squid">squid</option>
                  </select>
                  <br>
                  <label for="hote">Nom d'hôte que Squid affiche aux clients :</label>
                  <input type="text" name="hote" id="hote" placeholder="www.example.com">
                  <br><br>
                  <input type="submit" value="Configurer">
              </form>
    </section>  
</main>

  <footer>
  </footer>
</body>
</html>
