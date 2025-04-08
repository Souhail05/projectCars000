@extends('template')
@section('titre','Liste Clients')

@section('content')
<div class="row">
    <div class="col-md-12 mt-3 mb-3">
        <form action="{{route('clients.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label><br>
                <input type="text" name="name" placeholder="votre nom" class="form-control"><br>
                <label for="email">Nom</label><br>
                <input type="text" name="email" placeholder="votre email" class="form-control"><br>
                <label for="phone">Tél</label><br>
                <input type="text" name="phone" placeholder="votre num tél" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary ">Ajouter</button>
        </form>
        </form>
    </div>
</div>
@endsection