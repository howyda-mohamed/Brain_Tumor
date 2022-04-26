@extends('layouts.dashboard')
@section('content')
@section('title','Psychological Help')
<main>
    <div class="container-fluid px-4 pt-3">
        <div class="row flex-wrap ml-auto">
            @foreach ($articals as $artical )
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card categoriesCard mr-3 px-3 shadow-sm">
                        <div class="card-body row">
                            <h5 class="card-title">{{$artical -> title}}</h5>
                            <p class="card-text">{{$artical -> description}}</p>
                            <a href="{{$artical -> link}}" class="btn btn-primary col align-self-end">{{$artical -> title_link}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
</main>
@endsection
