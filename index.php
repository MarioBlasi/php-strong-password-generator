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
<body class="bg-dark">
  <header>
    <div class="container pt-5">
     <div class="row ">
       <div class="col d-flex justify-content-center  p-2 text-secondary">
         <div class="h1">Storn Password Generator</div>
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

  <main>
    <div class="container pt-5">
      <div class="row shadow">
        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light  ">
          <div class="mb-5">
            <p>Lunghezza password:</p>
            <p>consenti ripetizioni di uno o piú caratteri:</p>

          </div>
          <div class=" mt-5">
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset"class="btn btn-secondary">Annulla</button>
          </div>
        </div>

        <div class="col-6 d-flex justify-content-start flex-column p-2 text-secondary bg-light ">
            <div class="mb-3">
              <label for="password"> </label>
              <input type="text" name="password" id="password" class="form-control" placeholder="inserisci password" >
            </div>
          <div>
          <!-- password -->
          <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Si
              </label>
          </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>
          <!--radio-  -->
          <div class="form-check mt-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
          </div>
          <!-- checkbox -->
        </div>
      </div>
    </div>   
  </main>
  
</body>
</html>