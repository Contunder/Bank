@extends('layouts.app')
@section('title')
S'enregistrer
@endsection

@section('content')
<section class="d-flex justify-content-center align-items-center">
    <div>
        @if(count($errors)>0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card p-5">
            <form action="{{route('register')}}" method="POST">
                @csrf
                @method('POST')
                <h1 class="h-3 mb-3 w-bold">S'enregistrer</h1>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" />
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="nom" class="form-control" />
                <label for="prenom">Prenom</label>
                <input id="prenom" type="text" name="prenom" class="form-control" />
                <label for="tel">Téléphone</label>
                <input id="tel" type="tel" name="tel" class="form-control" />
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" class="form-control" /><br>
                <button type="submit">S'enregistrer</button>
            </form>
        </div>
    </div>
</section>
@endsection
