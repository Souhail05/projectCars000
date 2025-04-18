@extends('template')
@section('titre','add user')

@section('content')
<div class="row">
    <div class="col-md-12 mt-3 mb-3">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
        
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        
            <div class="form-group">
                <label for="password">Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password">Confirmer Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="password_confirmation" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection