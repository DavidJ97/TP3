{{ include('header.php', {title: 'Client Show'}) }}
<body>
    <div class="container">
        <h1>Film Details</h1>
    <table>
        <tr>
            <td><strong>Titre:</strong></td>
            <td>{{ titre }}</td>
        </tr>
        <tr>
            <td><strong>Année:</strong></td>
            <td>{{ annee }}</td>
        </tr>
        <tr>
            <td><strong>Genre:</strong></td>
            <td>{{ genre }}</td>
        </tr>
        <tr>
            <td><strong>Réalisateur:</strong></td>
            <td>{{ realisateur }}</td>
        </tr>
        <tr>
            <td><strong>Durée:</strong></td>
            <td>{{ duree }} min</td>
        </tr>
        <tr>
            <td><strong>Description:</strong></td>
            <td>{{ description }}</td>
        </tr>
    </table>
        <a href="index.php?action=edit_dvd&id={{ id }}">Modifier</a>
    <form action="index.php?action=delete_dvd&id={{ id }}" method="post">
    <input type="submit" value="Delete DVD">
</form>
    </div>
</body>
</html>