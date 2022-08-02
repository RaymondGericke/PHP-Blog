@extends('layouts.default')

@section('index')

<!-- <ul>
    @foreach ($posts as $post)
        <li>
            <div class="post-content">
                <a href="{{ route('post.show', $post->id) }}">
                    <div>{{ $post->title }}</div>
                    <div>{{ $post->body }}</div>
                </a>
            </div>
        </li>
    @endforeach
</ul> -->

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
              {{-- <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                #
              </th> --}}
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Info
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                User
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Method
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
              {{--  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1 </td>--}}
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <div class="post-content">
                        <a href="{{ route('post.show', $post->id) }}">
                            <div>{{ $post->title }}</div>
                            <div>{{ $post->body }}</div>
                        </a>
                    </div>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $post->user->name }}

              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {!! Form::open(['url' => route('posts.edit', $post->id), 'method' => 'get']) !!}
                    <button type="submit" class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition ease-in-out duration-150">
                        Edit
                    </button>
                {!! Form::close() !!}
                {!! Form::open(['url' => route('posts.delete', $post->id), 'method' => 'delete']) !!}
                    <button type="submit" class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-red-500 hover:bg-red-400 transition ease-in-out duration-150">
                     Delete
                    </button>
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
