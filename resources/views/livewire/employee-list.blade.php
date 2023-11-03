<div class="container">
    @endforeach
</div>

<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($employees as $employee)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="#">
        <img src="{{ $employee->hoto }}" class="rounded-md mb-2" alt="">
        <h2 class="text-lg text-gray-600 truncate uppercase">{{ $employee->names }} {{ $employee->lastNames }} </h3>
        <h3 class="text-md text-gray-500">{{ $employee->excerpt }}</h4>
  
        <img src="{{ $employee->jobtitle->avatar }}" class="rounded-full mt-4 mx-auto h-16 w-16" alt="">
      </a>
    </div>
    @endforeach
  </div>