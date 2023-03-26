<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ui Kit</title>

</head>
<body>
    <style>

.inputmerah{
    border: 1px solid red;
    outline: none;
}

.checkmerah{
    border: 1px solid red;
    outline: none;
}

    </style>

<div class="container mt-5">
<button class="btn btn-danger px-3"> Button Primary</button>
<button class="btn btn-primary px-3"> Button Secondary</button>
<button class="btn btn-secondary px-3"disabled> Button Disabled</button>
</div>

<div class="container mt-3">
<button class="btn btn-outline-danger px-3"> Button Lite Primary</button>
<button class="btn btn-outline-primary px-3"> Button Secondary</button>
<button class="btn btn-outline-secondary px-3"disabled> Button Disabled</button>
</div>
<div class="container mt-3">

    <button class="btn btn-danger px-3 rounded-4">  Primary</button>
    <button class="btn btn-outline-primary px-3 rounded-4">  Secondary</button>
    <button class="btn btn-outline-secondary px-3 rounded-4" disabled>  Disabled</button>
    <button class="btn btn-outline-danger px-3 rounded-4"> Lite Primary</button>
    <button class="btn btn-outline-primary px-3 rounded-4"> Lite Secondary</button>
    <button class="btn btn-outline-secondary px-3 rounded-4" disabled> Lite Disabled</button>
</div>

<div class="container mt-3">
    <input class="input" value="input" type="text">
    <input class="inputmerah" value="Input Active" type="text">
    <input class="inputmerah text-danger" value="Input Error" type="text">
</div>

<div class="container mt-3">

<button class="btn btn-outline-danger  col-md-2 text-start dropdown-toggle" type="button" >Dropdown</button>

<button class="btn btn-outline-secondary  col-md-2 text-start dropdown-toggle" type="button"  >Dropdown</button>



</div>

<div class="container d-flex ">
    <input class="checkmerah" type="checkbox">
    <input class="checkmerah" type="checkbox">
    <input class="checkmerah" type="checkbox" disabled>
    <input class="checkmerah" type="checkbox"checked>
    <input class="checkmerah" type="checkbox"checked>
    <input class="checkmerah" type="checkbox"checked disabled>

    <input type="checkbox" value="" id="flexCheckIndeterminate">
    <input type="checkbox" value="" id="flexCheckIndeterminate">
    <input type="checkbox" value="" id="flexCheckIndeterminate" disable>

    <input type="radio" checked>
    <input type="radio" >
    <input type="radio" checked>
    <input type="radio">

    <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="FlexSwitchCheckDefault" checked>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="FlexSwitchCheckDefault">
</div>

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="FlexSwitchCheckDefault" checked>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="FlexSwitchCheckDefault">
</div>
<div class="form-switch">
    <input class="form-check-input" type="checkbox">
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>