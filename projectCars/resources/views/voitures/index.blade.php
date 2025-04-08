@extends('template')
@section('titre','voitures')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="m-5">
    <h2>Liste Voitures</h2>
    <div style="text-align: end">

      <a href="{{route('voitures.create')}}" class="btn" style="
  background-color: #d76649 !important; color:#fff;">Ajouter Une Voiture</a>  
    </div>
    
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>MARQUE</th>
            <th>MODELE</th>
            <th>PRIX LOCATION</th>
            <th>PHOTO</th>
            <th>DISPONIBILITE</th>
            <th>ACTION</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($voitures as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->marque}}</td>
            <td>{{$v->modele}}</td>
            <td>{{$v->prix_locations}}</td>
            <td><img src="{{ asset('storage/' . $v->photo) }}" class="img img-thumbnail" alt="{{ $v->marque }}"></td>
            <td>{{$v->disponiblite==1?'Dispo':'Non Dispo'}}</td>
            <td>
                <!-- Formulaire de suppression -->
                <form action="{{ route('voitures.destroy', $v->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?');">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>

                <a href="{{route('voitures.edit',$v->id)}}" class="btn btn-success">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>



            </td>
        </tr>
        @empty
        <h1>Collection vide!!!!</h1>
        @endforelse

    </tbody>

</table>
@endsection
