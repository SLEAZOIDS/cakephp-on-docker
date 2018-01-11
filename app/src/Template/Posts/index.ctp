<?php
$this->assign('title', 'Blog Posts');
?>

<h1>
    Blog Post
    <?= $this->Html->link('Add new', ['action'=>'add'], ['class'=>['pull-right', 'fs12']]); ?>
</h1>

<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
            <?= $this->Html->link($post->title, ['action'=>'view', $post->id]); ?>
            <?= $this->Html->link('[EDIT]', ['action'=>'edit', $post->id], ['class'=>'fs12']); ?>
            <?=
                $this->Form->postLink(
                    '[x]',
                    ['action'=>'delete', $post->id],
                    ['confirm'=>'Are you sure?', 'class'=>'fs12']

                );
            ?>
        </li>
    <?php endforeach; ?>
</ul>
