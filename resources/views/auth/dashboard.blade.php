@extends('auth.layouts')
{{-- @extends('partials.footer')
@extends('partials.header')
@extends('partials.sidebar') --}}

@section('content')

<div class="row">
    <div class="col-md-8">
        {{-- <div class="card"> --}}
            {{-- <div class="card-header">Dashboard</div> --}}
            {{-- <div class="card-body"> --}}
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    {{-- <div class="alert alert-success">
                        You are logged in!
                    </div> --}}
                    <div id="app">
                        @include('partials.sidebar')
                
                        {{-- <div id="content">
                            @include('partials.header')
                
                            <main>
                                @yield('content')
                            </main>
                
                            @include('partials.footer')
                        </div> --}}
                    </div>
                @endif                
            {{-- </div> --}}
        {{-- </div> --}}
    </div>    
</div>
    
@endsection