<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - Açaí Lovers</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Quem Somos</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pierre Açaí</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('/home') }}">Principal</a>
                <li class="nav-item active"><a class="nav-link" href="{{ url('/quemsomos') }}">Quem somos</a>
                <li class="nav-item active"><a class="nav-link" href="{{ url('/contato') }}">Contato</a>
            </ul>
        </div>
    </nav>

    <main class="container mt-4">
        <section class="mb-4">
            <h2 class="text-success">Nossa História</h2>
            <p>Fundado em janeiro, o Pierre Açaí nasceu com o objetivo de promover o açaí e seus benefícios. Somos apaixonados por este super alimento amazônico e trabalhamos para compartilhar essa paixão com o mundo.</p>
        </section>

        <section class="mb-4">
            <h2 class="text-success">Nossa Missão</h2>
            <p>Nossa missão é oferecer produtos de açaí de alta qualidade e educar nossos clientes sobre os incríveis benefícios dessa fruta. Buscamos incentivar uma alimentação saudável e sustentável.</p>
        </section>

        <section class="mb-4">
            <h2 class="text-success">Nossa Equipe</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">

                    <img src={{ asset('img/eu.jpeg') }}>
                    
                        <div class="card-body">
                            <h5 class="card-title">Daniel Paixão</h5>
                            <p class="card-text">Fundador e CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/nutricionista.jpg" class="card-img-top" alt="Nutricionista">
                        <div class="card-body">
                            <h5 class="card-title">Maria Oliveira</h5>
                            <p class="card-text">Nutricionista</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/ChefdeCozinha.webp" class="card-img-top" alt="Chef">
                        <div class="card-body">
                            <h5 class="card-title">Carlos Santos</h5>
                            <p class="card-text">Chef de Cozinha</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Pierre Açaí. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
