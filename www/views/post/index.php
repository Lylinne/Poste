<?php
/**
 * fichier qui génère la vue pour l'url /article/[i:id]
 * 
 */
$id = $params['id'];
$slug = $params['slug'];
$title = "article " . $slug;

$pdo = new PDO(
    "mysql:host=" . getenv('MYSQL_HOST') . ";dbname=" . getenv('MYSQL_DATABASE'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD')
);
$post = $pdo->query("SELECT * FROM `post` WHERE `id` LIKE ".$id)->fetch(\PDO::FETCH_OBJ);
?>

<h1><?= $post->name ?></h1>

<p><?= $post->content ?></p>

<p>article avec l'id <?= $id . " et le slug " . $post->slug ?></p>

<a href="/"><button>Retour</button></a>


<p>article avec l'id <big><?= $id . '</big> et le slug <big>' . $slug ?></big></p>




