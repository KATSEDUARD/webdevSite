<?php
        require('db.php');
        $link = db_connect();
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])
        && isset($_POST['password'])) {
          $name = trim($_POST['name']);
          $surname = trim($_POST['surname']);
          $email = trim($_POST['email']);
          $phone = trim($_POST['phone']);
          $password = trim($_POST['password']);

          $query = "INSERT INTO user_data (phone, email, password) VALUES ('$phone', '$email', '$password');";
          
          $query .= "INSERT INTO `user` (`name`, `surname`, `id_data`) VALUES ('$name', '$surname', LAST_INSERT_ID());";

          $result = mysqli_multi_query($link, $query);

          if($result) {
            $smsg = "Registration complete";
          }
          else {
            $fsmsg = "Error occurred";
          }
        }
?>
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
    <div class="row">
      <img id="left-block" src="images/common/logos.jpg" class="col-lg-6 col-sm-12">
      <div id="right-block" class="col-lg-6 col-sm-12">
        <div class="menu" id="menu">
          <div class="row">
            <div class="link-item col-lg-3 text-center">
              <a class="item-a" href="index.php">HOME</a>
            </div>
            <div class="link-item col-lg-3 text-center">
              <div class="dropdown">
                <a onclick='window.location.href = "bands.php"' class="dropdown-toggle item-a" id="dropdownMenuButton" data-toggle="dropdown" onmouseover='mouseover_button(event)' onmouseout='mouseout_button(event)'>BANDS</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseover='mouseover_menu(event)' onmouseout='mouseout_menu(event)'>
                  <a class="dropdown-item" href="maiden.php">IRON MAIDEN</a>
                  <a style="font-size: 25px !important; padding-bottom: 0 !important; padding-top: 0 !important;" class="dropdown-item" href="metallica.php">Metallic<span class='flip_H'>A</span></a>
                  <a class="dropdown-item" href="megadeth.php">MEGADETH</a>
                  <a class="dropdown-item" href="rammstein.php">RAMMSTEIN</a>
                </div>
              </div>
            </div>
            <div class="link-item col-lg-3 text-center">
              <a class="item-a" href="news.php">NEWS</a>
            </div>
            <div class="link-item col-lg-3 text-center">
              <a class="item-a" href="account.php">ACCOUNT</a>
            </div>
          </div>
        </div>
        <div id="content-wrapper" style="margin-top: 70px !important;" class="content-wrapper">
          <form action="account.php" method="POST">
            <h3 align="center">Sign Up</h3>
            <?php
              if(isset($smsg)) { ?> <div class="alert alert-success" role="alert"><?= $smsg ?></div>
                <?
              }
              ?>
              <?php
              if(isset($fsmsg)) { ?> <div class="alert alert-danger" role="alert"><?= $fsmsg ?></div>
                <?
              }
              ?>
            <div class="form-group">
              <label for="namefield">Name</label>
              <input autocomplete="off" type="text" name="name" class="form-control" required placeholder="Name" id="namefield">
            </div>
            <div class="form-group">
              <label for="surnamefield">Surname</label>
              <input autocomplete="off" type="text" name="surname" class="form-control" required placeholder="Surname" id="surnamefield">
            </div>
            <div class="form-group">
              <label for="phonefield">Phone (not required)</label>
              <input autocomplete="off" type="phone" name="phone" class="form-control" placeholder="Phone" id="surnamefield">
            </div>
            <div class="form-group">
              <label for="emailfield">Email</label>
              <input type="email" name="email" class="form-control" id="emailfield" required placeholder="example@mail.com">
            </div>
            <div class="form-group">
              <label for="passwordfield">Password</label>
              <input autocomplete="off" type="password" name="password" class="form-control" required placeholder="password" id="passwordfield">
            </div>
            <!-- <div class="form-group form-check">
                <label class="form-check-label" for="datefield">Оберіть свою дату народження</label>
                <br>
                <input type="date" name="birthday" class="form-check-input" id="datefield">
                <br>
                <br>
              </div> -->
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <div class="btn-info btn" style="margin-left: 25px;">Sign In</div>
          </form>
        </div>
        <?php
        }
        include('views/language.php');
        ?>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="js/description.js"></script>
  <script src="js/initbt.js"></script>
  <script src="js/fonts.js"></script>

</body>

</html>