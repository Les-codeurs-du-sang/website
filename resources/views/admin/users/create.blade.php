@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Créer un utilisateur</h6>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.users.store') }}">
                    @include('admin.include.fields')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        @error('password')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
