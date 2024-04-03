<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <ul>
                <li>
                    <a class="navbar-brand" href="{{ url('/home') }}">Etec Zona Leste</a>
                    <a href="{{ url('/quemsomos') }}">Quem Somos</a>
                    <a href="{{ url('/noticias') }}">Notícias</a>
                    <a href="{{ url('/contatos') }}">Contatos</a>
                    <a href="{{ route('login') }}">Log in</a>
                    <a href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Descubra um futuro brilhante na ETEC Zona Leste</h3>
                <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
            </div>
            <div class="col">
                <img src="{{ asset('img/patio.webp') }}" class="img-thumbnail" alt="...">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <<img src="{{ asset('img/auditorio.webp') }}" class="img-thumbnail" alt="...">
            </div>
            <div class="col">
                <h1>Aprendizados para além da sala de aula</h1>
                <p>Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <h3>Infraestrutura Moderna</h3>
                <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
            </div>
            <div class="col">
                <img src="{{ asset('img/labotatorio.webp') }}" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
</body>

</html>