<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Heavy Metal</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/common/favicon.png" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <h1>Панель Адміністратора</h1>
    <br>
    <a href="index.php?action=add" style="margin-bottom: 15px;" class="btn btn-primary">Додати нову статтю</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TITLE</th>
          <th scope="col">CONTENT</th>
          <th scope="col">IMAGE</th>
          <th scope="col">DATE</th>
          <th scope="col">AUTHOR</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($articles as $article) : ?>
          <tr>
            <th scope="row"><?= $article["id"] ?></th>
            <td><?= $article["title"] ?></td>
            <td><textarea name="content" cols="30" disabled rows="2"><?= $article["content"] ?></textarea></td>
            <td><?= $article["image"] ?></td>
            <td><?= $article["date"] ?></td>
            <td><?= $article["id_author"] ?></td>
            <td><a href="index.php?action=edit&id=<?= $article["id"] ?>">Редагувати</a></td>
            <td><a href="index.php?action=delete&id=<?= $article["id"] ?>">Видалити</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- <script src="js/description.js"></script> -->
  <script src="js/initbt.js"></script>
  <!-- <script src="js/fonts.js"></script> -->

</body>

</html>