<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima Tempo</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- fontes google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container m-6">
        <!-- logo -->
   <div class="row">
       <div class="col-8"> 
            <div>
                <p class="h2 p-3 ">Clima tempo</p>
            </div>
            
       </div>
       <!-- barra de pesquisa -->
       <div class="col-4 py-4"> 
            <input class="form-control " type="text" placeholder="Digite sua cidade">
       </div>
   </div>
   <!-- card principal -->
   <div class="row d-flex">
        <div class="card py-4"> 
            <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="a" d="M49.5 25C35.5 25 24 36.4 24 50.5 24 64.5 35.4 76 49.5 76 63.5 76 75 64.6 75 50.5 75 36.5 63.6 25 49.5 25z"/></defs><g fill="none" fill-rule="evenodd"><use fill="#FFAD00" fill-opacity=".1" xlink:href="#a"/><path stroke="#FFAC00" stroke-width="4" d="M49.5 27C36.5 27 26 37.5 26 50.5S36.5 74 49.5 74 73 63.5 73 50.5 62.5 27 49.5 27z"/><path stroke="#FFAC00" stroke-width="4" d="M50.5 18V9M82 50.5h9M9 51h9M20 80l7-7M72 28l7-7M28 28l-8-8M80 80l-8-8M50.5 91v-9" stroke-linecap="round"/></g></svg>
            </div>
            <div class="col-3">
                <p class="h2">Guarapuava - Paraná - Brasil</p>
            </div>
            
   </div>
           
   <!-- cards -->
   <div class="row d-flex justify-content-between mt-3">
        <div class="col-2">
            <div class="card">
                <div class=" text-center">
                    <h5 class="card-title">Segunda</h5>
                    <p class="card-text">XDASDASDAS</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Terça</h5>
                    <p class="card-text">XDASDASDAS</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Quarta</h5>
                    <p class="card-text">XDASDASDAS</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Quinta</h5>
                    <p class="card-text">XDASDASDAS</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Sexta</h5>
                    <p class="card-text">XDASDASDAS</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
       </div>
   </div>
</body>
</html>