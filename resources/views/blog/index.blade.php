@extends('layouts.main')

@section('page.title', 'Our Blog')


@section('main.content')
    <x-title>
        {{ __('List Posts') }}
    </x-title>

    @if (empty($posts))
        {{ __('No posts') }}
    @else
        <div class="row">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <x-post.card :post="$post" />
            </div>
        @endforeach
        </div>
    @endif 
@endsection
