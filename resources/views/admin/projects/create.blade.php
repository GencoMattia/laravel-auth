@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route("admin.projects.create") }}" method="POST">
            @csrf
            @method("POST")

            <div class="mb-3">
                <label for="title">
                    Title:
                </label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="image">
                    Image url:
                </label>
                <input type="text" name="image" id="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="technologies">
                    Technologies:
                </label>
                <input type="text" name="technologies" id="technologies" class="form-control">
            </div>
            <div class="mb-3">
                <label for="client">
                    Client:
                </label>
                <input type="text" name="client" id="client" class="form-control">
            </div>
            <div class="mb-3">
                <label for="content">

                </label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">

                </textarea>
            </div>

            <input type="submit" value="Add new Project" class="btn btn-primary btn-lg me-4">
            <input type="reset" value="Reset" class="btn btn-primary btn-lg">
        </form>
    </div>
</div>
@endsection
