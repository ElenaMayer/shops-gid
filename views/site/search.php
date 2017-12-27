<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->params['title'].' - '.$_GET['s'];
?>
<div class="row">
    <div class="col-md-8">
        <div class="archive-title">Результаты по запросу <span class="archive-name"><?= $_GET['s'] ?></span></div>
        <?= $this->render('_post_list', [
            'snippets' => $snippets,
        ]); ?>
    </div>
    <?= $this->render('_sidebar', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]); ?>
</div>