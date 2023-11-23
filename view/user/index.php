{{ include('header.php', {title: 'User Create'}) }}
<body>
    <div class="container">
        <form action="index.php?action=add_user" method="post">
    <h1>Ajouter un utilisateur</h1>
        <label>Nom
            <input type="text" name="nom">
        </label>
        <label>Prénom
            <input type="text" name="prenom">
        </label>
        <label>Email
            <input type="email" name="email">
        </label>
        <label>Mot de passe
            <input type="password" name="mot_de_passe">
        </label>
        <label>Est administrateur ?
            <input type="checkbox" name="est_admin">
        </label>
        <input type="submit" value="Enregistrer">
    </form>
    <a href="index.php">retour à l'index </a>
    </div>
</body>
</html>