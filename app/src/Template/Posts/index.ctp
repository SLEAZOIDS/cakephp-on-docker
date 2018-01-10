<?php
$this->assign('title', 'Blog Posts');
?>

<h1>Blog Post</h1>

<ul>
    <?php foreach ($posts as $post) : ?>
        <li><?= h($post->title); ?></li>
    <?php endforeach; ?>
</ul>
