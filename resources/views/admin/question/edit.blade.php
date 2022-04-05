@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Modifier une question</h6>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.question.update', $question->id) }}">
                    @method('PATCH')
                    @include('admin.include.questions_fields')
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
