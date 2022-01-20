

<h1><?= $params['post']->title ?></h1>
<div>
    <?php foreach($params['post']->getTags() as $tag): ?>
        <span class="badge badge-info p-1"><?= $tag->name ?></span>
    <?php endforeach ?>
</div>
<p><?= $params['post']->content?></p>
<a class="btn btn-secondary" href="/myApp/posts">Retour en arrière</a>
