@extends('template')
@section('titre','modifier Voiture')

@section('content')

<div class="m-5">
    <h1>La page de mise à jour</h1><br>
    <form action="{{route('voitures.update', $car->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque"  name="marque" value="{{$car->marque}}" required>
        </div>
    
        <div class="form-group">
            <label for="modele">Modele</label>
            <input type="text" class="form-control" id="modele" name="modele" value="{{$car->modele}}" required>
        </div>
    
        <div class="form-group">
            <label for="prix_location">Prix de location</label>
            <input type="number" class="form-control" id="prix" name="prix_locations" value="{{$car->prix_locations}}" required>
        </div>
        <div class="form-group">
            <label for="prix_location">Photo</label>
            <img src="{{ asset('storage/' . $car->photo) }}" alt="">
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
    
        <div class="form-check">
           <label>Disponible</label>
           <input type="radio" name="disponiblite" id="disponibilte" value="1" >
           <label>Non disponible</label>
           <input type="radio" name="disponiblite" id="disponibilte" value="0">
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('voitures.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>

@endsection
