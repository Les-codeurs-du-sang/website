@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Créer une promotion</h6>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.promotion.store') }}">
                    @include('admin.include.promotion_field')
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
