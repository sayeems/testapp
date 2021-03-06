@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Add new book</strong>
        </h5>
        <div class="card-body px-lg-5 pt-0">
            <div class="col-sm-12 mt-5">
                <form class="md-form" action="{{url('/')}}/books" method="POST" enctype="multipart/form-data">
                @csrf
                    <!-- name of the book -->
                    <div class="md-form form-lg">
                        <input value="{{ $book->title }}" name="name" type="text" id="name" class="form-control form-control-lg">
                        <label for="name">Name of your book</label>
                    </div>
                    <!-- storyline of this book -->
                    <div class="md-form">
                        <textarea name="storyline" id="storyline" class="md-textarea form-control" rows="2">{{ $book->storyline }}</textarea>
                        <label for="storyline">Storyline of this book</label>
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                          <input name="cover_image" type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" accept="image/gif,image/jpeg,image/png">
                          <label class="custom-file-label" for="inputGroupFile01">Choose boook cover</label>
                          <br><img style="max-width:50px;height:auto" src="{{ asset('/public/book_cover_images') }}/{{ $book->cover_image }}" alt="">
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                    </div>
                    <div class="input-group mt-5">
                        <button type="submit" class="btn peach-gradient">Update</button>
                        <a href="{{ url()->previous() }}" class="btn peach-gradient">cancel</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection