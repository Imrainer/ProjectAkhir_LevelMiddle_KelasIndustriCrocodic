<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
<style>

.main{
    background: rgb(37, 37, 37);
    color: white;
    display: grid;
    width: 250px;
    height: 400px;
    place-items: center
}

#box{
    border-radius: 50px;
    text-align: center;
    outline: none;
}

input[type = "range"] {
    -webkit-appearance: none;
    height: 10px;
    width: 80%;
    outline: none;
    border-radius: 50px;
}
input[type = "range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 25px;
    height: 25px;
    border-radius:50px;
    background: white;
    cursor: pointer; 
}

.main #red {
    background: linear-gradient(90deg,#000,red);
}
.main #green {
    background: linear-gradient(90deg,#000,green);
}
.main #blue {
    background: linear-gradient(90deg,#000,blue);
}
</style>

<body>
  <div class="main container">
    Result <input type="text" value="rgb(255,255,255)" id="box">
    Red: <input type="range" value="255" min="0" max="255" id="red"> 
    Green: <input type="range" value="255" min="0" max="255" id="green"> 
    Blue: <input type="range" value="255" min="0" max="255" id="blue"> 
  </div>

  <script>
    function myColor(){
        var red = document.getElementById('red').value;
        var green = document.getElementById('green').value;
        var blue = document.getElementById('blue').value;
        var color = 'rgb('+ red +','+ green +','+ blue +')';
        document.body.style.backgroundColor=color;
        document.getElementById('box').value=color;
    }

    document.getElementById('red').addEventListener('input',myColor);
    document.getElementById('green').addEventListener('input',myColor);
    document.getElementById('blue').addEventListener('input',myColor);
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>