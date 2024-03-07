@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title fw-semibold mb-4">Projets</h5>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('projects.create') }}"><i class="fa-duotone fa-plus"></i> Ajouter Projet</a>
                </div>
            </div>
            <div class="view-table-box">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Client</th>
                            <th scope="col">Date Création</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td class="limit-string">{{ $project->name }}</td>
                                <td>{{ $project->client }}</td>
                                <td>{{ $project->created_at }}</td>
                                <td class="text-end" style="min-width: 115px;">
                                    <form action="{{ route('projects.destroy', $project->id) }}"
                                        id="delete-form-{{ $project->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" data-id="{{ $project->id }}" class="btn btn-danger btn-delete"><i
                                            class="fa-regular fa-trash-xmark"></i></a>
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-success"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
