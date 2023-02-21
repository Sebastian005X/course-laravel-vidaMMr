@extends('app')

@section('content')
  <section class="border-2 border-gray-500 p-2 w-96 mx-auto">
    <form 
      class="mb-4 border-b-2 border-gray-400 pb-2" 
      action="{{ route('todos-update', ['id' => $todo->id]) }}"
       method="post"
    >
      @method('PATCH')
      @csrf

      @error('title')
      <h6 class="text-white bg-red-500">{{ $message }}</h6>
      @enderror

      <div class="mb-5">
        <label for="title">Task Title</label><br>
        <input 
          name="title" type="text" class="border-2 border-gray-300 w-full"
          value="{{ $todo->title }}"
        >
      </div>
      <button type="submit" class="bg-sky-600 py-1 px-4 text-white">Update Task</button>
    </form>
  </section>
@endsection