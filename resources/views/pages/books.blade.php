@extends('layouts.app')

@section('content')
    <div class="col-sm-12 mb-5">
        <h1>Books</h1>
    </div>
        @if(count($books) > 0)
            <div class="row">
                @foreach($books as $book)
                    <div class="col-sm-4 mb-4">
                        <!-- Card -->
                        <div class="card booking-card">
                            <!-- Card image -->
                            <div class="view overlay">
                            <img class="card-img-top" src="{{ url('/') }}/public/book_cover_images/{{ $book->cover_image }}" alt="Card image cap">
                            <a href="{{ route('books.show', $book->id) }}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                            </div>
                        
                            <!-- Card content -->
                            <div class="card-body">
                        
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>{{ $book->title }}</a></h4>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <p class="mb-2">Name of the author</p>
                            <!-- Text -->
                            <p class="card-text">{{ $book->storyline }}</p>
                            <hr class="my-4">
                            {{-- <p class="lead"><strong>Tonight's availability</strong></p>
                            <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
                                <li class="list-inline-item mr-0">
                                <div class="chip mr-0">5:30PM</div>
                                </li>
                                <li class="list-inline-item mr-0">
                                <div class="chip deep-purple white-text mr-0">7:30PM</div>
                                </li>
                                <li class="list-inline-item mr-0">
                                <div class="chip mr-0">8:00PM</div>
                                </li>
                                <li class="list-inline-item mr-0">
                                <div class="chip mr-0">9:00PM</div>
                                </li>
                            </ul> --}}
                            <!-- Button -->
                            <a href="#" class="btn btn-flat deep-purple-text p-1 mx-0 mb-0">Read More</a>
                        
                            </div>
                        
                        </div>
                        <!-- Card -->
                    </div>
                @endforeach
            </div>
        @else
            <p>no books found</p>
        @endif
@endsection