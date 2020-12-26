<?php

        require_once('db.php');
        $link = db_connect();
        if (isset($_POST['email']) and isset($_POST['password'])) {
          $email = trim($_POST['email']);
          $password = $_POST['password'];


          $query = "SELECT user.id, user.name, user.surname, user_data.email, user_data.phone, user_data.password FROM `user` INNER JOIN `user_data` ON `id_data`=user_data.id WHERE user_data.email='$email' AND user_data.password='$password'";
          

          $result = mysqli_query($link, $query) or die(mysqli_error($link));

          $count = mysqli_num_rows($result);
          $user = mysqli_fetch_assoc($result);

          if($count == 1) {
              $_SESSION['logged_user'] = $user;
          }
          else {
              echo "<div class='alert alert-danger' role='alert'>User is not found</div>";
          }
        }

        if(isset($_SESSION["logged_user"])) {
            include("user_info.php");
        }
        else { ?>
          <form method="POST">
            <h3 align="center">Sign In</h3>
            <div class="form-group">
              <label for="emailfield">Email</label>
              <input type="email" name="email" class="form-control" id="emailfield" required placeholder="example@mail.com">
            </div>
            <div class="form-group">
              <label for="passwordfield">Password</label>
              <input autocomplete="off" type="password" name="password" class="form-control" required placeholder="password" id="passwordfield">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            <a href="account.php?page=signup" class="btn-info btn" style="margin-left: 25px;">Sign Up</a>
          </form>
        <? } ?>