<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($employees as $employee)
    <div class="bg-white shadow-lg rounded-lg px-4 py-10 text-center">
      <a href="{{ route('profile', $employee->id) }}">
        <img src="{{$employee->photo}}" class="rounded-full mx-auto h-16 w-16">
        <h3 class="font-bold text-lg uppercase">{{ $employee->lastNames }} </h3>  <h2  class="text-lg text-gray-500"> {{ $employee->names }} </h2>
          <h3 class="text-md text-gray-500">{{ $employee->employeeId }}</h4>
          <h5 class="text-md text-gray-500">Cargo/s</h4>
            <ul class="flex flex-col">
              <li class="font-medium text-sm text-purple-600 uppercase mb-4"></li>
              @foreach($jobs->employee_id as $job) 
              <li></li>
              @endforeach
            </ul>
          </a>
        </div>
        @endforeach
</div>



