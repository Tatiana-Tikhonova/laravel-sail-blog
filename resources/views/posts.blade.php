<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container ">
        <h1>Новые статьи</h1>
        <?php foreach ($posts as $post) : ?>
            <article>
                <h1><a href="/posts/<?= $post->slug; ?>"><?= $post->title; ?></a></h1>
                <p><?= $post->excerpt; ?></p>
            </article>

        <?php endforeach ?>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>