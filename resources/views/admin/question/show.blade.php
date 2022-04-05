@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>{{ $question->question }}</h6>
                </div>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <p>{{ $question->reponse }}</p>
                <a class="btn btn-primary" href="{{ route('admin.question.edit', $question->id) }}">Modifier une question</a>
            </div>
        </div>
    </div>
@endsection
