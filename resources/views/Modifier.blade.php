<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="./js/bbootstrap.bundle.min.js">
    <title>Edite Stagiaire</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-2">Modifier Stagiaire</h1>
        <form action="{{ route('stagiaire.update',$Stagiaire->id) }}" method="post" class=" m-auto my-3 w-50 border border-dark p-3">
            @csrf
            @method('put')
            <input type="hidden" name="Stagiaire_id" value="{{ $Stagiaire->id  }}" id="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nom  </label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="Nom" value="{{ $Stagiaire->Nom }}"  placeholder="Nom ">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prenom </label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="Prenom" value="{{ $Stagiaire->Prenom }}" placeholder="Prenom">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="Email"  value="{{ $Stagiaire->Email }}" placeholder="Email">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Photo</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="Photo"  value="{{ $Stagiaire->Photo }}" placeholder="Photo">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date NAissance</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="Date_Naissance"  value="{{ $Stagiaire->Date_Naissance }}" placeholder="">
              </div>
              <div class="mb-3">

                <input type="submit" class="btn btn-info w-100" id="exampleFormControlInput1" value="Modifier" >
              </div>

        </form>
    </div>

</body>
</html>
