@extends('template')
@section('titre','Ajouter Voiture')

@section('content')
<div class="m-5">
<!-- Formulaire d'ajout -->
<form action="{{ route('voitures.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="marque">Marque</label>
        <input type="text" class="form-control" id="marque" name="marque" placeholder="Marque de la voiture" required>
    </div>

    <div class="form-group">
        <label for="modele">Modele</label>
        <input type="text" class="form-control" id="modele" name="modele" placeholder="Modele de la voiture" required>
    </div>

    <div class="form-group">
        <label for="prix_location">Prix de location</label>
        <input type="number" class="form-control" id="prix" name="prix_locations" placeholder="Prix de la voiture" required>
    </div>

    <div class="form-group">
        <label class="form-label" for="customFile">Photo</label>
        <input type="file" name="photo" class="form-control" id="customFile" />
    </div>

    <div class="form-check">
       <label>Disponible</label>
       <input type="radio" name="disponibilite" id="disponibilte" value="1" checked>
       <label>Non disponible</label>
       <input type="radio" name="disponibilite" id="disponibilte" value="0">
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
    <a href="{{ route('voitures.index') }}" class="btn btn-secondary">Annuler</a>
</form>
</div>
@endsection
