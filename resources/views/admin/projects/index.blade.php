@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr class="">
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Title</th>
                    <th scope="col">Technologies</th>
                    <th scope="col">Client</th>
                    <th scope="col">Author</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($projects as $project)
                    <tr>
                        {{-- <th scope="row">{{ $project->id }}</th> --}}
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->technologies }}</td>
                        <td>{{ $project->client }}</td>
                        <td>{{ $project->author }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td>
                            <a href="{{ route("admin.projects.show", $project) }}" class="btn btn-primary btn-sm">
                                Show
                            </a>
                        </td>
                        <td>
                            <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-success btn-sm">
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
