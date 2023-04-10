<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js" ></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <title>Stagiaires</title>
</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">  Ajouter un Stagiaire </button>
        </div>
        <table class="table table-bordered border-primary my-2">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Date_Naissance</th>
                <th class="w-auto " >Action</th>
            </tr>
            @foreach ( $Stagiaires as $Stagiaire)

                    <tr>
                        <td>{{ $Stagiaire->id }}</td>
                        <td>{{ $Stagiaire->Nom }}</td>
                        <td>{{ $Stagiaire->Prenom }}</td>
                        <td>{{ $Stagiaire->Email }}</td>
                        <td>
                            @if($Stagiaire->Photo)
                                <img src="../../appstorage/app/public/Photos/1680867335.png" >
                            {{-- <img src="{{ asset('storage/images/'.$user->image) }}" > --}}
                            @else
                            <span>No Photo !</span>
                            @endif
                        </td>
                        <td>{{ $Stagiaire->Date_Naissance }}</td>
                        <td class="d-flex justify-content-center">
                            <form action="{{ route('stagiaire.show',$Stagiaire->id) }}" method="GET"  class="me-2 m-0 p-0"> <input type="submit" class=" btn-sm  btn-info" value=" Show"></form>
                            <form action="{{ route('stagiaire.edit',$Stagiaire->id) }}" method="Get" class="me-2 m-0 p-0"> <input type="submit" class="btn-sm btn-success" value=" Modifier"></form>
                            <form action="{{ route('stagiaire.destroy',$Stagiaire->id) }}" method="post" class="me-2 m-0 p-0">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn-sm btn-danger"   onclick="return confirm('êtes-vous sûr de supprimer ce Stagiaire ?')"   value=" Supprimer">
                            </form>
                        </td>
                    </tr>

            @endforeach
        </table>
          <div class=" text-center d-flex justify-content-center"> <span> {{ $Stagiaires->links() }}</span></div>
    </div>




  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ajoute Stagiaire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('stagiaire.store') }}" method="post" class=" p-1  "  enctype="multipart/form-data" >
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Nom  </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="Nom" value="{{ old('Nom') }}"  placeholder="Nom ">
                  </div>
                  @error('Nom')
                     <div class="text-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Prenom </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="Prenom" value="{{ old('Prenom')  }}" placeholder="Prenom">
                  </div>
                    @error('Prenom')
                     <div class="text-danger">{{ $message }}</div>
                    @enderror
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="Email"  value="{{ old('Email')  }}" placeholder="Email">
                  </div>
                  @error('Email')
                     <div class="text-danger">{{ $message }}</div>
                    @enderror
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="Photo"  value="{{ old('Photo')  }}" placeholder="Photo">
                  </div>
                  @error('Photo')
                     <div class="text-danger">{{ $message }}</div>
                    @enderror
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date NAissance</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="Date_Naissance"  value="{{  old('Date_Naissance') }}" placeholder="">
                  </div>
                  @error('Date_Naissance')
                  <div class="text-danger mb-3">{{ $message }}</div>
                 @enderror
                  <div class="mb-3">

                    <input type="submit" class="btn btn-info w-100" id="exampleFormControlInput1" value="Ajouter" >
                  </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>





</body>
</html>
