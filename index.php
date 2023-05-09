<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--Script Bootstrap bundle-->
</head>
<body class="bg-muted ">

  <?php include __DIR__ . '/header.php';?>
  <main >
    <div class="container">
      <div class="row shadow">
        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
          <div class="mb-5 pt-3 text-center">
            <p> <em>Enjoy</em> </p>
            <img class="w-75" src="https://media.threatpost.com/wp-content/uploads/sites/103/2019/11/20084407/password.png" alt="">
          </div>
        </div>
        <!-- SECTION LEFT col-6 -->

        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
            <?php include __DIR__ . '/functions.php';?>
            <?php include __DIR__ . '/generate.php';?>
            <!-- password -->
            <hr>
            <div class=" d-flex flex-column  mb-2">
              <div class="form-check">
                <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault"checked>
                <label class="form-check-label" for="flexCheckDefault">
                  Lettere
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Numeri
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                Simboli
                </label>
              </div><!-- checkbox -->
            </div>
            <hr>
            <div class="mb-3">
              <div class="form-check ">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
                  <label class="form-check-label " for="flexRadioDefault1">
                    Si
                  </label>
              </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                  <label class="form-check-label" for="flexRadioDefault2">
                    No
                  </label>
                </div>
              </div>

            </div>
          <!--radio-  -->
        </div> <!-- SECTION RIGHTcol-6 -->
      </div>
    </div>   
  </main>
  <?php include __DIR__ . '/footer.php';?>
</body>
</html>