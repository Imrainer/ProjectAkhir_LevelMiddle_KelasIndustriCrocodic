<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
            .inputmerah{
                border: 1px solid red;
                outline: none;
            }




            
    </style>

    <title>Document</title>
    <div class="container mt-5">
        <div class="container mt-5 ">
        <button class="btn btn-danger text-light px-4">Button Primary</button>
        <button class="btn btn-primary text-light mx-1 px-4">Button Secondary</button> 
        <button class="btn btn-secondary text-light px-4"Disabled>Button Disabled</button>   
    </div>

    <div class="container mt-3">
        <button class="btn btn-outline-danger  px-4">Button Lite Primary</button>
        <button class="btn btn-outline-primary  mx-1 px-4">Button Lite Secondary</button> 
        <button class="btn btn-outline-secondary  px-4"Disabled>Button Lite Disabled</button>   
    </div>
    <div class="container mt-3">
        <button class="btn btn-danger rounded-5 px-4  "> Primary</button>
        <button class="btn btn-outline-primary rounded-5 px-4  "> Secondary</button>
        <button class="btn btn-outline-secondary rounded-5 px-4"Disabled> Disabled</button>   
        <button class="btn btn-outline-danger rounded-5 px-4  "> Lite Primary</button>
        <button class="btn btn-outline-primary rounded-5 px-4  "> Lite Secondary</button>
        <button class="btn btn-outline-secondary rounded-5 px-4"Disabled> Lite Disabled</button>   
    </div>
    <div class="container mt-3">
        <input class="input col-md-3 "type="text" value="input">
        <input class="inputmerah   col-md-3 " value="input Active">
        <input class="inputmerah  col-md-3  text-danger" value="input Error">
    </div>
    <div class="container mt-3 d-flex">
        <div class="input-group mb-3">
            <button class="btn btn-outline-danger  col-md-3 text-start dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          

       
            <button class="btn btn-outline-secondary ms-3 col-md-3 text-start dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
    </div>
    </div>

    <div class="container d-flex mt-1 mx-3">
        <input type="checkbox"  class="checkbox">
        <input type="checkbox"  class="checkbox">
        <input type="checkbox"  class="checkbox" disabled>
        <input type="checkbox" class="outline-danger"checked >
        <input type="checkbox" class="checkbox" checked>
        <input type="checkbox" class="bg-danger" checked disabled>
        <input type="checkbox" value="" id="flexCheckIndeterminate">
        <input type="checkbox" value="" id="flexCheckIndeterminate">
        <input type="checkbox" value="" id="flexCheckIndeterminate" disable>
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
        checked> 
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"checked>
        </div>
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"></div>
            
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"checked>
    </div>
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"></div>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>