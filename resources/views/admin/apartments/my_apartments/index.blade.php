@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
            <h1>
                My apartment
            </h1>
            
            @foreach ($apartments as $apartment)
            
                <div class="col-3">
                    <a href="{{ route('admin.my_apartments.show', $apartment) }}" class="text-decoration-none">
                        <div class="card">
                            <h3>
                                {{$apartment->title}}
                            </h3>
                            @if (str_starts_with($apartment->img, 'http'))
                                <img src="{{$apartment->img}}" alt="" >
                                    
                            @else
                                    
                                <img src="{{ asset ('storage') . '/' . $apartment->img}}" alt="">
                            
                            @endif
                        </div>
                    </a> 
                </div>
            @endforeach
        </div>
    </div>
@endsection