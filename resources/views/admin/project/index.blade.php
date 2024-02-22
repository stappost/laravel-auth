@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrizione</th>
                            <th>Data di inizio progetto</th>
                            <th>data di fine progetto</th>
                            <th>in Team</th>
                            <th> TOOLS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ Str::limit($project->description, 20, '...') }}</td>
                                <td>{{ $project->start_project }}</td>
                                <td>{{ $project->finish_project }}</td>
                                <td>{{ $project->in_team ? 'In team' : 'In solo' }}</td>
                                <td>
                                    <a href="{{ route('admin.project.show', ['project' => $project]) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.project.edit', ['project' => $project]) }}"
                                        class="btn btn-sm btn-warning mx-2">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.project.destroy', ['project' => $project]) }}"
                                        class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
