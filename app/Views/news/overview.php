<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
        <main class="container">    
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h2><?= esc($news_item['title']) ?></h2>

        <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">    <?= esc($news_item['body']) ?></h>
        </div>
        <p class="lead my-3"><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
        </div>
    <?php endforeach ?>

<?php else: ?>

    <h3>Pas d'accualités</h3>

    <p>Impossible de trouver des actualités pour vous.</p>

<?php endif ?>
</main>