@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
            <h1>
                My apartment
            </h1>
            @foreach ($apartments as $apartment)
            <a href="{{ route('user.apartments.show', $apartment) }}" class="text-decoration-none">
                
                <div class="col-3">
                    <div class="card">
                        <h3>
                            {{$apartment->title}}
                        </h3>
                        {{-- @dump(json_decode($apartment->imgs)) --}}
                       {{--  @foreach (json_decode($apartment->imgs) as $img)
                        <img src="{{$img}}" alt="">
                            
                        @endforeach --}}
                        @if (str_starts_with($apartment->img, 'http'))
                            <img src="{{$apartment->img}}" alt="" >
                                
                        @else
                                
                            <img src="{{ asset ('storage') . '/' . $apartment->img}}" alt="">
                        
                        @endif 
                    </div>
                </div>
            </a> 
            @endforeach
        </div>
    </div>
@endsection