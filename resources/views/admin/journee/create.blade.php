@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Création d'une journée</h6>
                </div>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <form method="POST" action="{{ route('admin.journee.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date</label>
                        <input name="date" type="date" class="form-control" aria-describedby="emailHelp" required>
                        @error('date')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Heure de début</label>
                        <input type="time" name="heureDebut" class="form-control" required />
                        @error('heureDebut')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Heure de fin</label>
                        <input type="time" name="heureFin" class="form-control" required />
                        @error('heureFin')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Type de don</label>
                        <select type="time" name="typeDon" class="form-control" required>
                            <option value="1">Sang</option>
                            <option value="0">Mouelle osseuse</option>
                        </select>
                        @error('heureFin')
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
