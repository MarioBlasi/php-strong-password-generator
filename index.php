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
<body class="bg-secondary">
  <header>
    <div class="container pt-5">
     <div class="row ">
       <div class="col d-flex justify-content-center  p-2 text-dark">
         <div class="h1">Stong Password Generator</div>
       </div>
     </div>
     <div class="row">
       <div class="col d-flex justify-content-center text-light p-2">
         <div class="h2">Genera password sicura</div>
       </div>
     </div>
     <div class="row">
       <div class="col d-flex bg-info justify-content-center shadow p-2">
         <div class="p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, cumque.</div>
       </div>
     </div>
   </div>
  </header>
  <!-- HEADER -->
  <main class="rounded-2">
    <div class="container ">
      <div class="row shadow rounded-bottom-3">
        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
          <div class="mb-5">
            <p>consenti ripetizioni di uno o piú caratteri:</p>
          </div>
        </div>
        <!-- SECTION LEFT col-6 -->

        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
        <form method="GET" action="">
          <div class="mb-3">
            <label for="password" class="p-2">Lunghezza password:</label>
            <input type="text" name="password" id="password" class="form-control w-50" placeholder="" value="<?php echo $password; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Genera password</button>
          <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
          <!-- password -->
          <div class="form-check mt-2">
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
          <!--radio-  -->
          <div class="bg-info d-flex flex-column">
            <div class="form-check mt-2">
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
        </div> <!-- SECTION RIGHTcol-6 -->
      </div>
    </div>   
  </main>
  
</body>
</html>