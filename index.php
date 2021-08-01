<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Be safe</title>
    <?php include 'css/style.php' ?>
    <?php include 'link/link.php' ?>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <script src="index.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg nav_body p-3">
        <a class="navbar-brand ps-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Preventions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main_header ">
        <div class="row w-100 h-100 ">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/together.png" alt="This is together" width="300" height="300">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1> Lets be Safe and Fight together Against <br> Cor <span class="coroimg"><img src="images/corona.jpg" alt="corona" width="50" height="50"></span> na Virus </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="coro_updates container-fluid">
        <div class="text-center mb-3 mt-4">
            <h2> COVID-19 World Map</h2>
        </div>
        <div id='map' class="container rounded mb-5" style='width: 80vw; height: 60vh;'>
        </div>

    </section>

    <section class="container-fluid sub_section pt-4 pb-5" id="aboutid">
        <div class="section_header text-center mt-3 mb-4">
            <h1>ABOUT COVID-19</h1>
        </div>
        <div class="row pt-2">
            <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center ">
                <img src="images/coviddetail.jpg" alt="Icon" class="img-fluid ps-3 pb-1">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2> What is Covid-19(Coronavirus)</h2>
                <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and
                    recover without requiring special treatment. Older people, and those with underlying medical
                    problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more
                    likely to develop serious illness.</p>
                <p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus,
                    the disease it causes and how it spreads. Protect yourself and others from infection by washing your
                    hands or using an alcohol based rub frequently and not touching your face. </p>
            </div>
        </div>
    </section>

    <section class="container-fluid pt-4 pb-5" id="sympid">
        <div class="section_header text-center mt-3 mb-4">
            <h1>COVID Symptoms</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                    <img src="https://img.icons8.com/plasticine/90/000000/coughing.png" />
                    <figcaption>Cough</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                    <img src="https://img.icons8.com/color/96/000000/runny-nose--v1.png" />
                    <figcaption>Running-nose</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                    <img src="https://img.icons8.com/doodle/96/000000/fever.png" />
                    <figcaption>Fever</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                    <img src="https://img.icons8.com/emoji/96/000000/yawning-face.png" />
                    <figcaption>Tiredness</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                    <img src="https://img.icons8.com/color/96/000000/cold.png" />
                    <figcaption>Cold</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                    <img src="https://img.icons8.com/color/96/000000/breath.png" />
                    <figcaption>Uneasyness in Breath</figcaption>
                </figure>
            </div>
        </div>
        </div>
    </section>

    <section class="container-fluid sub_section pt-4 pb-5" id="preventid">
        <div class="section_header text-center mt-3 mb-4">
            <h1>4 Steps Prevention Against CoronaVirus</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-md-5 col-12 mt-3 ms-2">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="https://img.icons8.com/office/90/000000/protection-mask.png" />
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 d-flex align-items-center ">
                        <p> Make sure it covers both your nose, mouth and chin. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 mt-3 ms-2">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="https://img.icons8.com/bubbles/90/000000/sanitizer.png" />
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 d-flex align-items-center ">
                        <p>Handwashing reduces the amounts of all types of germs, pesticides, and metals on hands. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 mt-3 ms-2">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="https://img.icons8.com/dusk/90/000000/insulin-pen.png" />
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 d-flex align-items-center ">
                        <p>Treatment with a vaccine to produce immunity against a disease; inoculation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 mt-3 ms-2">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <figure class="text-center">
                            <img src="https://img.icons8.com/color/90/000000/child-safe-zone--v1.png" />
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 d-flex align-items-center ">
                        <p>Maintain at least 1 meter distance between yourself and other people, sneezing and have a
                            fever.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid pt-4 pb-5" id="contactid">
        <div class="section_header text-center mt-3 mb-4">
            <h1>Contact Us ASAP</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact No</label>
                            <input type="number" class="form-control" id="contact" aria-describedby="emailHelp" name="contact" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <div>Select Symptoms</div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="coronasym[]" value="fever">
                                <label class="form-check-label" for="inlineCheckbox1">Fever</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="cold">
                                <label class="form-check-label" for="inlineCheckbox2">Cold</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="illness">
                                <label class="form-check-label" for="inlineCheckbox2">Illness</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="cough">
                                <label class="form-check-label" for="inlineCheckbox2">Cough</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="text" style="height: 100px" autocomplete="off" required></textarea>
                            <label for="floatingTextarea2">Enter how are u feeling</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container scrolltop float-end pe-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>

    <footer class="d-flex justify-content-center mt-5">
        <div class="footer_style text-white text-center ">
            <p> Copyrights by Chetan Sunil Khairnar</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        mybutton = document.getElementById("myBtn");

        window.onscroll = function() {
            myscroller()
        };

        function myscroller() {
            if (document.documentElement.scrollTop > 100 ||
                document.body.scrollTop > 100) { //checks if screen scroll more 100
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        //property to scroll to top
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

</body>




<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiY2hldGFuMjAwMSIsImEiOiJja3JzcG8xaTgwNnJ3Mm9xdWxuYXNuemd5In0.X8GFQbvnq4WxkDH3uB5zHQ';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    zoom: 1,
    // center: [0, 400]
  });
</script>

</html>

<?php

include 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $symp = $_POST['coronasym'];
    $text = $_POST['text'];

    $chk = "";

    foreach ($symp as $chkl) {
        $chk .= $chkl . ","; // save the symptoms with ,
    }

    $insertvalue = "INSERT INTO coronatable(`username`,`email`,`contact`,`symp`,`message`) VALUES('$name','$email','$contact','$chk','$text')";
    $query = mysqli_query($con, $insertvalue);

    if ($query) {
?>
        <script>
            alert("data send");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("no data send");
        </script>

<?php
    }
}

?>