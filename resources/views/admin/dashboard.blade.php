@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row p-lg-5">
            <div class="col-md-4">
                <div class="box-stats mb-2 border-bottom pb-3">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa-solid fa-box" style="font-size: 45px;"></i>
                        </div>
                        <div class="col-8">
                            <h5>Admins</h5>
                            <h6>{{ $count_admins }}<div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-stats mb-2 border-bottom pb-3">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa-solid fa-rectangle-vertical-history" style="font-size: 45px;"></i>
                        </div>
                        <div class="col-8">
                            <h5>Projets</h5>
                            <h6>{{ $count_projects }}<div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-stats mb-2 border-bottom pb-3">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa-solid fa-paper-plane" style="font-size: 45px;"></i>
                        </div>
                        <div class="col-8">
                            <h5>Newsletters</h5>
                            <h6>{{ $count_newsletters }}<div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Dernières projets</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Date Création</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latest_projects as $project)
                                        <tr>
                                            <td class="limit-string">{{ $project->name }}</td>
                                            <td>{{ $project->client }}</td>
                                            <td>{{ $project->created_at }}</td>
                                            <td class="text-end" style="min-width: 115px;">
                                                <form action="{{ route('projects.destroy', $project->id) }}"
                                                    id="delete-form-{{ $project->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="#" data-id="{{ $project->id }}"
                                                    class="btn btn-danger btn-delete"><i
                                                        class="fa-regular fa-trash-xmark"></i></a>
                                                <a href="{{ route('projects.edit', $project->id) }}"
                                                    class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
