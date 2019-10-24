<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Agência NicoSite</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="./img/NicoSite-logo-black.png">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
          
                </ul>
            </div>
        </nav> 
    </header>
    
    <section id="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/NicoSite-logo-black.png" class="d-block w-100" alt="primeiro slide">
                </div>
                <div class="carousel-item">
                    <img src="./img/NicoSite-logo-white.png" class="d-block w-100" alt="segundo slide">
                </div>
                <div class="carousel-item">
                    <img src="./img/NicoSite-logo.png" class="d-block w-100" alt="terceiro slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </section>

    <section id="servicos">
        <div class="container">
            <div class="row">
                <h2 class="mb-5">Serviços:</h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card"">
                        <img src="./img/NicoSite-logo-black.png" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <p class="card-text text-center">Consultoria Marketing Digital</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"">
                        <img src="./img/NicoSite-logo-black.png" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <p class="card-text text-center">Consultoria Marketing Digital</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"">
                        <img src="./img/NicoSite-logo-black.png" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <p class="card-text text-center">Consultoria Marketing Digital</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section id="Sobre:">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="./img/NicoSite-logo-black.png" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h2>Sobre</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo harum a autem reiciendis ab eveniet et qui minus? Dolorum tempore vel aliquam tenetur cum consequuntur nulla libero optio eligendi saepe!</p>
                </div>
            </div>
        </div>

    </section>

    <section id="contato">
        <div class="container">
            <h2>Entre em Contato:</h2>
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="E-mail">E-mail</label>
                            <input type="text" class="form-control" id="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea type="mensagem" class="form-control" id="mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>     
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.051366938134!2d-46.67744548591885!3d-23.60249066899551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569681994557!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>                  
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
