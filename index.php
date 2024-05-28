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
        <div class="row ">
            <div class="col-lg-8"> 
                <div>
                    <p class="h2 p-3 ">Clima tempo</p>
                </div>
            
            </div>
            <!-- barra de pesquisa -->
            <div class="col-lg-4 py-4"> 
                <input class="form-control " type="text" placeholder="Digite sua cidade">
            </div>
        </div>
   <!-- card principal -->
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-lg-5 text-center">
                    <img class="img-fluid w-50" src=".//src/climas/clear_day.svg">
                </div>

                <div class="col-lg-5 align-self-center">
                    <p class="h2 text-center">Guarapuava - Paraná - Brasil</p>

                     <div class="row ">
                        <div class="col-lg h1 text-center  align-self-center">
                            <p>26º</p>
                        </div>
                        <div class="col-lg text-center  align-self-center">
                            <p>Ensolarado <p>
                         </div>
                    <div class="col-lg">
                        <div class="row text-end">
                            <p>Amanhacer:</p>
                        </div>
                        <div class="row text-end">
                            <p>Entardecer:</p> 
                        </div>
                    </div>
                    <div class="col-lg h4">
                        <p>19:00</p>
                        <div class="row">
                            <p>19:00</p>
                            </div>
                    </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
        
   <!-- cards -->
   <div class="row d-flex justify-content-between mt-5">
        <div class="col-lg-2">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Segunda</h5>
                    <img class="img-fluid" src="./src/climas/rain.svg">
                    <p class="card-text">Chuvoso</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Terça</h5>
                    <img class="img-fluid" src="./src/climas/rain.svg">
                    <p class="card-text">Chuvoso</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Quarta</h5>
                    <img class="img-fluid" src="./src/climas/rain.svg">
                    <p class="card-text">Chuvoso</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card" >
                <div class="card-body text-center">
                    <h5 class="card-title">Quinta</h5>
                    <img class="img-fluid" src="./src/climas/rain.svg">
                    <p class="card-text">Chuvoso</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Sexta</h5>
                    <img class="img-fluid" src="./src/climas/rain.svg">
                    <p class="card-text">Chuvoso</p>
                    <p class="card-text">26º</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card p-3">
                <div class="card-body d-flex ">
                    <div class="col">
                        <p class="text-center">Probabilidade de Chuva</p>
                        <div class="row">
                            <div class="col text-end h2">
                                <p>16</p>
                            </div>
                            <div class="col align-self-center ">
                                <p>%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">Volume de chuva (ultima hora)</p>
                        <div class="row">
                            <div class="col text-end h2">
                                <p>2</p>
                            </div>
                            <div class="col align-self-center">
                                <p>mm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <div class="card-body d-flex ">
                    <div class="col">
                        <p class="text-center">Umidade</p>
                        <div class="row">
                            <div class="col text-end h2">
                                <p>5</p>
                            </div>
                            <div class="col align-self-center">
                                <p>%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">Nebulosidade</p>
                        <div class="row align-self-center">
                            <div class="col text-end h2">
                                <p>16</p>
                            </div>
                            <div class="col align-self-center">
                                <p>%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  
</div>
   </div>
</body>
</html>