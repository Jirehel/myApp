<h1>Administration des articles</h1>

<?php if(isset($_GET['success'])): ?>
    <div class="alert alert-success">Vous êtes connecté...</div>
<?php endif ?>
<a href="/myApp/admin/posts/create" class="btn btn-primary">Créer un nouvel article</a>


<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Publié le</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($params['posts'] as $post) : ?>
        <tr>
            <th scope="row"><?= $post->id ?></th>
            <td><?= $post->title ?></td>
            <td><?= $post->getCreatedAt() ?></td>
            <td>
                <a href="/myApp/admin/posts/edit/<?= $post->id ?>" class="btn btn-warning">Modifier</a>
                <form action="/myApp/admin/posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>