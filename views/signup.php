<?php
        require_once('db.php');
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
<form method="POST">
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
              <input autocomplete="off" type="phone" name="phone" class="form-control" placeholder="Phone" id="phonefield">
            </div>
            <div class="form-group">
              <label for="emailfield">Email</label>
              <input type="email" name="email" class="form-control" id="emailfield" required placeholder="example@mail.com">
            </div>
            <div class="form-group">
              <label for="passwordfield">Password</label>
              <input autocomplete="off" type="password" name="password" class="form-control" required placeholder="password" id="passwordfield">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="account.php?page=login" class="btn-info btn" style="margin-left: 25px;">Sign In</a>
</form>