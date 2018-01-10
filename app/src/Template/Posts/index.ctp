<?php
$this->assign('title', 'Blog Posts');
?>

<h1>
    Blog Post
    <?= $this->Html->link('Add new', ['action'=>'add'], ['class'=>['pull-right', 'fs12']]); ?>
</h1>

<ul>
    <?php foreach ($posts as $post) : ?>
        <li><?= $this->Html->link($post->title, ['action'=>'view', $post->id]); ?></li>
    <?php endforeach; ?>
</ul>
