@extends('layout.app')

@section('content')

@include('partials.editor')

<div class="row">
    <div class="col text-center">
        <button id="journal-save" type="button" class="btn btn-success mt-2">Save</button>
    </div>
</div>  

<div id="test"></div>

@endsection