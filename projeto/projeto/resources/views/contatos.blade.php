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
        <h1>Redes Sociais Etec Zona Leste</h1>
        <p>Mantenha-se atualizado com as últimas novidades, eventos e histórias inspiradoras. </p>
        <div class="row">
            <div class="col">
                <p><a href="https://www.instagram.com/eteczonalesteoficial">Instagram</a>
                </p>
            </div>
            <div class="col">
                <p>
                    <a href="https://www.youtube.com/@etecdazonaleste2949">Youtube</a>
                </p>
            </div>
            <div class="col">
                <P><a href="https://www.facebook.com/Eteczonalesteoficial">Fecebook</a></P>
            </div>
        </div>



    </div>
</body>

</html>