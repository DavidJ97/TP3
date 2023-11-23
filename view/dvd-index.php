{{ include('header.php', {title: 'Dvd List'}) }}
<body>
    <div class="container">
        <h1>DVD</h1>
        <table>
        <th>Titre</th>
        <th>Année</th>
        <th>Genre</th>
        <th>Réalisateur</th>
        <th>Durée</th>
        <th>Description</th>
        <th>Images</th>
    <?php 
    foreach ($film as $row) {
        ?>
        <tr>
        <td><a href="dvd-show.php?id=<?= $row['id']?>"><?= $row['titre']?></a></td>
        <td><?= $row['annee']?></td>
        <td><?= $row['genre']?></td>
        <td><?= $row['realisateur']?></td>
        <td><?= $row['duree']?> min</td>
        <td><?= $row['description']?></td>
        <td><img src="images/<?= $row['image']?>" alt="<?= $row['titre']?>" style="width: 100px;"></td>

    </tr>
    <?php 
    }
    ?>
    </table>
    </div>
    
</body>
</html>