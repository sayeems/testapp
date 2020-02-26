@extends('layouts.app')

@section('content')
    <div class="col-sm-12 mb-5">
        <h1>{{ $book->title }}</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <img class="img-responsive img-fluid" src="{{ asset('/public/book_cover_images') }}/{{ $book->cover_image }}" alt="{{ $book->title }}">
        </div>
        <div class="col-sm-8">
            <p><b>Storyline: </b>{{ $book->storyline }}</p>
            <small><b>Created at: </b>{{ $book->created_at }}</small>
            @if(Auth::user()->id == $book->user_id)
            <div class="row">
                <div class="col-sm-6 text-center">
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">Edit</a>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="" class="btn btn-danger" 
                        onclick="
                            event.preventDefault();
                            document.getElementById('delete{{ $book->id }}').submit();
                        "
                    >Delete</a>
                </div>
                <form id="delete{{ $book->id }}" style="display:none;" action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
            @endif
        </div>
    </div>
        
@endsection