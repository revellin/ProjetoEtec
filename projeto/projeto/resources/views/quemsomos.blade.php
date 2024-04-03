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
    <div class="container">
        <h1 class="text-center">Nossos cursos</h1>
        <div class="row text-center">
            <div class="col"><button type="button" class="btn btn-primary btn-lg">Administração</button></div>
            <div class="col"><button type="button" class="btn btn-primary btn-lg">Contabilidade</button></div>
            <div class="col"><button type="button" class="btn btn-primary btn-lg">Novotec Desenvolvimento de Sistemas AMS</button></div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col"><button type="button" class="btn btn-primary btn-lg">Logística</button></div>
            <div class="col"><button type="button" class="btn btn-primary btn-lg">Recursos Humanos</button></div>
            <div class="col"><button type="button" class="btn btn-primary btn-lg">Serviços Jurídicos</button></div>
        </div>
        <br>
        <br>
        <h1 class="text-center">
            ETEC Zona Leste
        </h1>
        <br>
        <p>
            Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
        <p>
            Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.
        </p>
        <p>
            Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
        </p>
        <p>
            Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.
        </p>
    </div>
</body>

</html>