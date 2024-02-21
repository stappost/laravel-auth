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
                                <td><a href="{{ route('admin.project.show', ['project' => $project]) }}">Approfondimento</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection