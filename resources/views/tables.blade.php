@extends('index')

@section('title', 'Liste suivi')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div>
    @yield('tableau')
    <h1 class="text-center">@yield('h1', 'Liste')</h1>
    <table class="table table-striped table-bordered">
        <thead>
            @yield('thead')
        </thead>
        <tbody>
            @yield('tbody')
        </tbody>
        <tfoot>
            @yield('tfoot')
        </tfoot>
    </table>
</div>
@endsection
