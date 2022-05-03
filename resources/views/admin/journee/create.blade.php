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
                    @include('admin.include.journee_fields')
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
