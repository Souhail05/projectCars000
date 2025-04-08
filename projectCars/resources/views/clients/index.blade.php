@extends('template')
@section('titre','Liste Clients')

@section('content')

<div class="m-5">
    <h2>Liste Clients</h2>
    <div style="text-align: end">
      <a href="{{route('clients.create')}}" class="btn" style="
  background-color: #d76649 !important; color:#fff;">Ajouter Un Client</a>  
    </div>
</div>

<div class="row m-5">
    <div class="col-md-12">
        <table class="table table-striped w-auto" >
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            @forelse($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        
                        <form method="post" action="{{route('clients.destroy',$client->id)}}" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce client?')" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
    
                        <a href="{{route('clients.edit',$client->id)}}" class="btn btn-success">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td> 

                </tr>
            @empty
            <tr>
                <td colspan="4" class="h5">Pas de clients enregistrées.</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>


@endsection
