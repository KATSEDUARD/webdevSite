<h3>Account Information</h3>
<br>
<p>Name: <?= $_SESSION["logged_user"]["name"] ?></p>
<p>Surname: <?= $_SESSION["logged_user"]["surname"] ?></p>
<p>Phone: <?= $_SESSION["logged_user"]["phone"] ?></p>
<p>Email: <?= $_SESSION["logged_user"]["email"] ?></p>
<br>
<a href='views/logout.php' class='btn btn-primary'>Log Out</a>