@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Importer des utilisateurs</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.saveCsv') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Fichier CSV</label>
                        <input id="file" name="file" type="file" class="form-control" required />
                        @error('file')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Importer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
