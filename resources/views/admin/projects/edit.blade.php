@extends("admin.projects.layouts.create-or-edit-form")

@section("form-action")
    {{ route("admin.projects.create") }}
@endsection

@section("form-method")
    "POST"
@endsection

@section("create-form-button")
    Add new project
@endsection
