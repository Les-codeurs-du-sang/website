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
                <form method="post" action="{{ route('admin.users.index') }}">
                    @include('admin.include.fields')
                </form>
            </div>
        </div>
    </div>
@endsection
