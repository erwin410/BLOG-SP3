<?php

function AllArticles($mysqli)
{
    // Selectionner des données
    $requete_sql = "SELECT * FROM articles WHERE 1";
    $result = $mysqli->query($requete_sql);

    //Stocker les données
    while ($row = $result->fetch_assoc()) {
        $tabPosts[] = [
            'id' => $row['id'],
            'postimage' => $row['postimage'],
            'title' => $row['title'],
            'auteur' => $row['auteur'],
            'date' => $row['date'],
            'contenu' => $row['contenu']
        ];
    }

    //liberer l'espace memo
    $result->free_result();
    return $tabPosts;
}



function showPost($tabPosts)
{
    for ($i = 0; $i < count($tabPosts); $i++) {

?>
        
        <div class="container main">
            <!-- Column1 -->
                <div class="col">
                    <div class="post">
                        <img class="post-img" src="<?php echo $tabPosts[$i]['postimage']; ?>" alt="">
                        <div class="post-info">
                            <h2><?php echo $tabPosts[$i]['title']; ?></h2>
                            <div class="user-info">
                                <span><?php echo $tabPosts[$i]['auteur']; ?></span>
                                <span><?php echo $tabPosts[$i]['date'] ?></span>
                            </div>
                                 <p><?php echo $tabPosts[$i]['contenu']; ?></p>
                        </div>
                    </div>             
                </div>
        </div>
<?php

    }
    return;
}
