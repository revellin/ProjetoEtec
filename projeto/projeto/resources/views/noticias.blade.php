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
                <h3>Concurso Público</h3>
                <p>Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.
                </p>
                <p>
                    A previsão é contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Foi autorizado, ainda, o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.]</p>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg">Saiba mais</button>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <h1>Processo Seletivo Simplificado para Auxiliar de Docente</h1>
                <p>Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas</p>
                <p>Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo</p>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg">Inscreva-se</button>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <h3>Programa Aprendiz Paulista</h3>
                <p>sua chance de ingressar no mercado de trabalho! Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo, esta é a sua chance de conquistar uma vaga de aprendizagem em empresas parceiras.
                </P>
                <P>
                    Benefícios incluem salário mínimo por hora, vale transporte, férias remuneradas, FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico. Junte-se a nós e construa o seu futuro!</p>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg">Saiba mais</button>
    </div>
</body>

</html>