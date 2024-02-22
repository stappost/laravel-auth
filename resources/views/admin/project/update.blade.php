@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-3">Modifica {{ $project->name }}</h2>
            </div>
            <div class="col-12">

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ route('admin.project.update', ['project' => $project]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 my-3">
                            <label for="name">Nome Progetto</label>
                            <input type="text" class="form-control" name="name" id="name" required
                                value='{{ old('name') ?? $project->name }}' placeholder="Nome Progetto">
                        </div>
                        <div class="col-6">
                            <label for="start_project">Data inizio progetto</label>
                            <input type="date" class="form-control" name="start_project" id="start_project" required
                                value='{{ old('start_project') ?? $project->start_project }}'
                                placeholder="Data inizio progetto">
                        </div>
                        <div class="col-6">
                            <label for="finish_project">Data fine progetto</label>
                            <input type="date" class="form-control" name="finish_project" id="finish_project" required
                                value='{{ old('finish_project') ?? $project->finish_project }}'
                                placeholder="Data fine progetto">
                        </div>
                        <div class="col-6 my-3">
                            <h5>Il progetto è stato realizzato:</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="in_team" id="flexRadioDefault1"
                                    value='1'>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Progetto in Team
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="in_team" value='0'
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Progetto in solo
                                </label>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <label for="logo">Logo</label>
                            <input type="text" name="logo" id="logo" class="form-control" placeholder="Url logo"
                                value='{{ old('logo') ?? $project->logo }}'>
                        </div>
                        <div class="col-12">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" class="form-control" cols="100" rows="10" required
                                placeholder="Descrizione">{{ old('description') ?? $project->description }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-success mt-2">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection