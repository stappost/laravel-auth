@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h2>{{ $project->name }}</h2>
                <div class="my-3">
                    Inizio Progetto: {{ $project->start_project }}
                    <p>{{ $project->finish_project ? 'Fine Progetto: ' . $project->finish_project : '' }}</p>
                </div>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
