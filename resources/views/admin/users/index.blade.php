@extends('admin.layouts.app')

@section('content')
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Utilisateurs</h6>
                    <div>
                        <a class="btn btn-primary" href="{{ route('admin.users.import') }}">Importer via CSV</a>
                        <a class="btn btn-primary" href="{{ route('admin.users.create') }}">Ajouter un utilisateur</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom / Prénom</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Promotions</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de dernier don</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $user->promotion->titre }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $user->dateDernierDon }}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="p-4 pb-0">
                    <nav aria-label="...">
                        <ul class="pagination pagination-lg">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
