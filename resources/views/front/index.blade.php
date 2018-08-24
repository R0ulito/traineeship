@extends('layouts.master')

@section('content')

    @forelse($posts as $post)
        @include('front.partials.postCard')
    @empty
        Aucune formation n'est encore mise en ligne
    @endforelse

@endsection