<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <section id="Booking">
        <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" style="margin-left: auto; margin-right:auto;">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="booking.php">Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mybooking.php">My Booking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section id="form">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px;">
                <p
                    style="text-align: center; background-color:rgb(0, 0, 0); color:white; height:40px; vertical-align: middle; line-height: 40px;">
                    Rent your Car now!</p>
            </div>
            <div class="container" style="border: 1px solid rgb(228,228,228); max-width : 78%; border-radius : 5px">
                <div class="row">
                    <div class="col">
                        <?php
                         if(isset($_GET['mobil'])){
                            if($_GET['mobil']=='alphard'){
                            echo '<img width="350" height="250" src=mobil alphard.jpg></img>';
                            }
                            elseif($_GET['mobil']=='camry'){
                                echo '<img width="350" height="250" src=mobil camry.jpeg></img>';
                            }
                            elseif($_GET['mobil']=='jazz'){
                              echo '<img width="350" height="250" src=mobil jazz.jpg></img>';
                            }
                         }
                            else{
                            echo '<img width="350" height="250" src=mobil alphard.jpg></img>';
                            }
                        ?>
                    </div>

                 <div class="col">
                    <form action="prosesbookingindividual.php" method="post">
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" name="name" type="text" value="Adhisty_1202204087"
                                aria-label="readonly input example" readonly>
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="date" class="form-label">Book Date</label>
                            <input type="date" id="date" name="date" class="form-control" placeholder="mm / dd / yyyy">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="start" class="form-label">Start Time</label>
                            <input type="time" name ="time" id="time" class="form-control" placeholder="-- : -- --">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Duration (Days)</label>
                            <input type="number" name="duration" id="duration" class="form-control" min="1" max="12">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="type" class="form-label">Car Type</label>
                            <select id="packages" name="car_type" class="form-select" onchange="priceFunction()"aria-label="Default select example">
                                <option value="Rush">mobil alphard</option>
                                <option value="Jazz">mobil camry</option>
                                <option value="Yaris">mobil jazz</option>
                            </select>
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Phone Number</label>
                            <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="service"> Add Service(s):</label>
                            <div class="form-check">

                                <input class="form-check-input" name="service[]" type="checkbox" value="Healt Protocol" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Healt Protocol/Rp.25.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="service[]" type="checkbox" value="Driver" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Driver/Rp.100.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="service[]" type="checkbox" value="Full filled" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Full filled/Rp.250.000
                                </label>
                            </div>
                            <div class="d-grid gap-2" style="margin-top : 30px;">
                                <input class="btn btn-primary" type="submit" value="Book" name="Book">                      
                            </div>
                        </div>
                    </form>
                 </div>
        </section>
        
        <script type="text/javascript">
            function jsFunction() {
            // set text box value here
            var conceptName = $('#packages').find(":selected").text();
            var txt =  document.getElementById('price');
            txt.value = conceptName;
            }
        </script>
        <footer>
            <center>Created By Adhisty_1202204087</center>
        </footer>
</body>
</html>