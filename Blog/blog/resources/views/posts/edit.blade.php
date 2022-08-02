{{-- @extends('layouts.default')

@section('content')

{!! Form::model($post, ['url' => route('posts.update', $post->id), 'method' => 'put']) !!}

@include('includes.post-form')

<div class="submit">
{{ Form::submit('Save') }}
</div>

{!! Form::close() !!}

@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit a Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! Form::model($post, ['url' => route('posts.update', $post->id), 'method' => 'put']) !!}

                    @include('includes.post-form')

                    <div class="submit"  style="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition ease-in-out duration-150">
                        {{ Form::submit('Save') }}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
