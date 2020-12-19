<?php session_start() ?>
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
        <div id="content-wrapper" class="content-wrapper">
          <?php
          if (isset($_GET['lang'])) {
            switch ($_GET['lang']) {
              case 'rus':
                echo '<h3 style="font-weight: 300; font-family: Cuprum, sans-serif;">ДОБРО ПОЖАЛОВАТЬ</h3>
                <p>Металл - это музыкальный жанр,
                разновидность рока, начал формироваться в 70-х годах
                прошлого века.</p>
                <button type="button" @click="showInfo" class="btn btn-secondary">{{status}}</button>
                <div id="info-wrapper">
                <transition name="fade">
                <p v-if="show" id="metal-description">Характерной чертой этого жанра является мощность и тяжесть звучания
                электрогитары, что
                отличало его от предшественников. И хотя точку перехода от года до металла невозможно определить так же,
                как
                и переход из оранжевого цвета до красного, некоторые тенденции этого жанра сильно отличаются.
                <br>
                </transition>
                <br>
                <a target="blank" href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D1%82%D0%B0%D0%BB">Читать
                на Википедии</a></p>
                </div>';
                break;

              case 'eng':
                echo '<h3 style="font-weight: 300; font-family: Cuprum, sans-serif;">WELCOME</h3>
                <p>Metal is a musical genre,
                a subgenre of rock that began to take shape in the 70`s
                of the last century.</p>
                <button type="button" @click="showInfo" class="btn btn-secondary">{{status}}</button>
                <div id="info-wrapper">
                <transition name="fade">
                <p v-if="show" id="metal-description">A characteristic feature of this genre is the power and difficulty of
                electric guitar sound that
                distinguished it from its predecessors. And although the transition point from year to metal cannot be determined in the same way,
                as
                the transition from orange to red, some trends of this genre are very different.
                <br>
                </transition>
                <br>
                <a target="blank" href="https://en.wikipedia.org/wiki/Heavy_metal_music">Visit Wiki</a></p>
                </div>';
                break;

              case 'ukr':
                echo '<h3 style="font-weight: 300; font-family: Cuprum, sans-serif;">Ласкаво просимо</h3>
                <p>Метал – це музичний жанр,
                різновид року, що почав формуватися у 70-х роках
                минулого століття.</p>
                <button type="button" @click="showInfo" class="btn btn-secondary">{{status}}</button>
                <div id="info-wrapper">
                <transition name="fade">
                <p v-if="show" id="metal-description">Характерною рисою цього жанру є потужність та тяжкість звучання
                електрогітари, що
                відрізняло його від попередників. І хоч точку переходу від року до металу неможливо визначити так само,
                як
                і перехід з помаранчевого кольору до червоного, деякі тенденції цього жанру сильно вирізняються.
                <br>
                </transition>
                <br>
                <a target="blank" href="https://uk.wikipedia.org/wiki/%D0%92%D0%B0%D0%B6%D0%BA%D0%B8%D0%B9_%D0%BC%D0%B5%D1%82%D0%B0%D0%BB_(%D0%BC%D1%83%D0%B7%D0%B8%D0%BA%D0%B0)">Читати
                на Вікіпедії</a></p>
                </div>';
                break;
            }
          } else {
            echo '<h3 style="font-weight: 300; font-family: Cuprum, sans-serif;">Ласкаво просимо</h3>
                <p>Метал – це музичний жанр,
                різновид року, що почав формуватися у 70-х роках
                минулого століття.</p>
                <button type="button" @click="showInfo" class="btn btn-secondary">{{status}}</button>
                <div id="info-wrapper">
                <transition name="fade">
                <p v-if="show" id="metal-description">Характерною рисою цього жанру є потужність та тяжкість звучання
                електрогітари, що
                відрізняло його від попередників. І хоч точку переходу від року до металу неможливо визначити так само,
                як
                і перехід з помаранчевого кольору до червоного, деякі тенденції цього жанру сильно вирізняються.
                <br>
                </transition>
                <br>
                <a target="blank" href="https://uk.wikipedia.org/wiki/%D0%92%D0%B0%D0%B6%D0%BA%D0%B8%D0%B9_%D0%BC%D0%B5%D1%82%D0%B0%D0%BB_(%D0%BC%D1%83%D0%B7%D0%B8%D0%BA%D0%B0)">Читати
                на Вікіпедії</a></p>
                </div>';
          }
          ?>
        </div>
        <?php
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