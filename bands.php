<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bands</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/diagram.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="icon" href="images/common/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid" style="background-color: white !important;">
        <div class="menu" id="menu">
            <div class="row">
                <div class="link-item col-lg-3 text-center">
                    <a class="item-a" href="index.php">HOME</a>
                </div>
                <div class="link-item col-lg-3 text-center">
                    <div class="dropdown">
                        <a onclick='window.location.href = "bands.php"' class="dropdown-toggle item-a"
                            id="dropdownMenuButton" data-toggle="dropdown" onmouseover='mouseover_button(event)'
                            onmouseout='mouseout_button(event)'>BANDS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                            onmouseover='mouseover_menu(event)' onmouseout='mouseout_menu(event)'>
                            <a class="dropdown-item" href="maiden.php">IRON MAIDEN</a>
                            <a style="font-size: 25px !important; padding-bottom: 0 !important; padding-top: 0 !important;"
                                class="dropdown-item" href="metallica.php">Metallic<span class='flip_H'>A</span></a>
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
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <a href="maiden.php">
                    <div class="card">
                        <img class="card-img-top" src="images/iron_maiden/covers/the_number_of_the_beast.jpg">
                        <div class="card-body">
                            <p class="card-text">Iron Maiden</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-lg-3">
                <a href="metallica.php">
                    <div class="card">
                        <img class="card-img-top" src="images/metallica/covers/master_of_puppets.jpg">
                        <div class="card-body">
                            <p class="card-text">Metallica</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-lg-3">
                <a href="megadeth.php">
                    <div class="card">
                        <img class="card-img-top" src="images/megadeth/covers/rust_in_peace.jpg">
                        <div class="card-body">
                            <p class="card-text">Megadeth</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-lg-3">
                <a href="rammstein.php">
                    <div class="card">
                        <img class="card-img-top" src="images/rammstein/covers/sehnsucht.jpg">
                        <div class="card-body">
                            <p class="card-text">Rammstein</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <canvas class="col-sm-12 col-lg-6" id="myChart"></canvas>
            <div id="app-calendar" class="col-sm-12 col-lg-6">
                <div id="calendar">
                    <div id="year-panel" class="row">
                        <div class="col-sm-4 col-lg-4">
                            <button @click="prevYear" class="prev btn btn-primary text-left"><i
                                    class="fas fa-arrow-left"></i></button>
                        </div>
                        <span class="col-sm-4 col-lg-4 text-center">{{ currentYear }}</span>
                        <div class="col-sm-4 col-lg-4 text-right">
                            <button @click="nextYear" class="next btn btn-primary"><i
                                    class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div id="month-panel" style="padding-left: 15px !important; padding-right: 15px !important;"
                        class="row">

                        <select v-model="currentMonth" class="col-sm-12 col-lg-6 custom-select" @change="getDaysAmount">
                            <option v-for="month in months" :value="month.name">
                                {{ month.name }}
                            </option>
                        </select>
                        <div class="col-sm-12 col-lg-6" style="padding-right: 0 !important;"><input disabled type="text"
                                class="form-control" :value="date" id="out" aria-label="Date"></div>
                    </div>
                    <div id="days" class="row">
                        <div v-for="day in getDaysAmount()" :id="day" @click="setCurrentDay"
                            style="margin-top: 25px; padding: 10px;" class="col-sm-1 day">
                            {{ day }}
                        </div>
                    </div>
                    <div class="row"
                        style="padding-left: 15px !important; padding-right: 15px !important; margin-top: 25px;">
                        <button class="col-sm-12 btn btn-success" style="margin-bottom: 15px;" @click="setDate">Set A
                            Date</button>
                        <button class="col-sm-12 btn btn-primary" style="margin-bottom: 15px;"
                            @click="today">Today</button>
                        <button class="col-sm-12 btn btn-danger" @click="cancelDate">Cancel A
                            Date</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://kit.fontawesome.com/5c78eed0ca.js" crossorigin="anonymous"></script>
    <script src="js/initbt.js"></script>
    <script src="js/fonts.js"></script>
    <script src="js/diagram.js"></script>
    <script src="js/calendar.js"></script>
</body>

</html>