<?php
include __DIR__ . '/functions.php';
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
  <header>
    <div class="container pt-5">
     <div class="row ">
       <div class="col d-flex justify-content-center  p-2 text-dark">
         <div class="h1"> <em>Stong Password Generator</em> </div>
       </div>
     </div>
     <div class="row">
       <div class="col d-flex justify-content-center text-secondary p-2">
         <div class="h2">Genera password sicura</div>
       </div>
     </div>
     <div class="row">
       <div class="col d-flex bg-info justify-content-center shadow p-2">
        <br>
       </div>
     </div>
   </div>
  </header>
  <!-- HEADER -->
  <main >
    <div class="container">
      <div class="row shadow">
        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
          <div class="mb-5 pt-3 text-center">
            <p> <em>consenti ripetizioni di uno o piú caratteri:</em> </p>
          </div>
        </div>
        <!-- SECTION LEFT col-6 -->

        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
          <form method="GET">
            <label for="password-length"><h5 class="pt-2">Inserisci la lunghezza della password: </h5> </label>
            <input class="btn btn-primary btn-lg "  type="number" type="password" name="password" id="password-length" required min="1" max="100">
            <div class="w-50 rounded" >
              <button class="btn btn-secondary mt-2" type="submit">Genera password</button>
            </div>
          </form>
          <p><h5> La tua password casuale è: </h5><b> <h4> <?php echo $password; ?></h4></b></p>
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
  
</body>
</html>