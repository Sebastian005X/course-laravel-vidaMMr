@extends('app')

@section('content')
  <section class="border-2 border-gray-500 p-2 w-96 mx-auto">
    <form class="mb-4 border-b-2 border-gray-400 pb-2" action="{{ route('todos') }}" method="post">
      @csrf

      @if (session('success'))
        <h6 class="text-white bg-blue-500">{{ session('success') }}</h6>
      @endif

      @error('title')
      <h6 class="text-white bg-red-500">{{ $message }}</h6>
      @enderror

      <div class="mb-5">
        <label for="title">Task Title</label><br>
        <input name="title" type="text" class="border-2 border-gray-300 w-full">
      </div>
      <button type="submit" class="bg-sky-600 py-1 px-4 text-white">Create Task</button>
    </form>

    <section>
    @foreach ($todos as $todo)
      <article class="p-3 mb-3 flex justify-between items-center border-b border-gray-300">
        <div>
          <a href="{{ route('todos-show', ['id' => $todo->id]) }}" class="text-sky-800">
            {{ $todo->title }}
          </a>
        </div>
        <form action="{{ route('todos-destroy', [$todo->id]) }}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="py-1 px-3 bg-red-700 text-white">Delete</button>
        </form>
      </article>
    @endforeach
  </section>
  </section>
@endsection