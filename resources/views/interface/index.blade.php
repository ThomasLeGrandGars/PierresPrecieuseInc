<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
    <title>Liste des cristaux</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('interface.header')
    <nav>
        <ul id="ariane">
            <li>Accueil</li>
        </ul>
    </nav>
	@section('contenu')
    @show
    @include('interface.footer')
</body>

</html>
