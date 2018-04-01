@extends('layout.app')

@section('content')

<style>
    ::placeholder {
        font-style: italic;
        color: darkgrey;
    }
</style>

<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="{{route('journal.create')}}">
                    {{ csrf_field() }}

                    <input name="title" class="form-control text-center mt-3" placeholder="Journal Title..." />
            
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" 
                                    class="btn btn-info mt-2" 
                                    value="Submit">Create A Journal</button>
                        </div>
                    </div>  
                </form>
        </div>
    </div>
</div>
<hr />
<div class="container">
    <div class="row">
        @foreach($journals as $journal)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        {{ $journal->title }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection