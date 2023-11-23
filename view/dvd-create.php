{{ include('header.php', {title: 'DVD Create'}) }}
<body>
    <div class="container">
        

        <form action="dvd-store.php" method="post">  
         <h1 class="btn">Ajouter un dvd</h1>
        <label>Titre
            <input type="text" name="titre">
        </label>
        <label>Année
            <input type="text" name="annee">
        </label>
        <label>genre
            <input type="text" name="genre">
        <label>Réalisateur
            <input type="text" name="realisateur">
        </label>
        <label>Description
            <input type="text" name="description">
        </label>
        <label>Durée
            <input type="text" name="duree">
        </label>
        <input type="submit" value="save">
    </form>
    <a href="index.php">retour à l'index </a>
    </div>
</body>
</html>