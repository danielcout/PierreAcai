<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açaí: O Super Alimento da Amazônia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        
        <h1>Açaí: O Super Alimento da Amazônia</h1>
        
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

    <div class="container-fluid px-0">
     
        <img src="img/acainatigela.jpg" class="rounded mx-auto d-block" alt="...">
    </div>

    <main class="container mt-4">
        <section id="beneficios" class="mb-4">
            <h2 class="text-success">Benefícios</h2>
            <p>O açaí é conhecido por seus inúmeros benefícios à saúde, incluindo melhoria da energia, fortalecimento do sistema imunológico e propriedades antioxidantes.</p>
        </section>

        <section id="nutrientes" class="mb-4">
            <h2 class="text-success">Nutrientes</h2>
            <p>O açaí é rico em vitaminas, minerais e ácidos graxos essenciais. Ele contém vitamina A, vitamina C, cálcio, ferro e ácidos graxos ômega-3, ômega-6 e ômega-9.</p>
        </section>

        <section id="receitas" class="mb-4">
            <h2 class="text-success">Receitas</h2>
            <p>Experimente uma deliciosa tigela de açaí com banana, morango e granola. Também pode ser utilizado em smoothies, sorvetes e sobremesas variadas.</p>
        </section>

        <section id="origem" class="mb-4">
            <h2 class="text-success">Origem</h2>
            <p>O açaí é um fruto originário da região amazônica, especialmente no Brasil. É colhido das palmeiras de açaí, que crescem principalmente em áreas alagadas.</p>
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
