<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <form action={{ route('ana.store') }} method="POST">
        @csrf
        <label for=""> Nom </label>
        <input type="text" name="nom" id=""> <br>
        <label for=""> Prenom </label>
        <input type="text" name="prenom" id=""> <br>
        <label for=""> Email </label>
        <input type="email" name="email" id=""> <br>
        <label for=""> Date Naissance </label>
        <input type="date" name="date_naissance" id=""> <br>
        <label for=""> Photo </label>
        <input type="file" name="photo" id=""> <br>
        <input type="submit" value="Ajouter">
    </form>

</body>
</html>
