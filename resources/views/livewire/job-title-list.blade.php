<div>
   @foreach ($jobTitles as $jobTitle)
   <option value="{{$jobTitle->id}}">{{$jobTitle->jobDesc}}</option>       
   @endforeach
</div>
