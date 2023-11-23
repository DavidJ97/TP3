{{ include('header.php', {title: 'Client Edit'}) }}
<body>
    <div class="container">
        <h1>Modifier un film</h1>
    <form action="dvd-update.php" method="post">
        <input type="hidden" name="id" value="{{ id }}">
        <label>Titre
            <input type="text" name="titre" value="{{ titre }}">
        </label>
        <label>Année
            <input type="text" name="annee" value="{{ annee }}">
        </label>
        <label>Genre
            <input type="text" name="genre" value="{{ genre }}">
        </label>
        <label>Réalisateur
            <input type="text" name="realisateur" value="{{ realisateur }}">
        </label>
        <label>Description
            <input type="text" name="description" value="{{ description }}">
        </label>
        <label>Durée
            <input type="text" name="duree" value="{{ duree }}">
        </label>
        <input type="hidden" name="image" value="{{ image }}">
        <input type="submit" value="Save Changes">
    </form>
    </div>
</body>
</html>