<h1>Hello from Laravel 12.</h1>
{{ \Illuminate\Support\Js::from($hobbies) }}
<br>
@foreach ($hobbies as $hobby)
  <br>  {{ $hobby}}
@endforeach

{{--  @verbatim
    <div>
        Name : {{ name }}
        Age : {{ age }}
        Job : {{ job }}
        Hobbies : {{ hobbies }}
    </div>
@endverbatim  --}}

{{--  Single Line Comment  --}}

{{--  
We are here for
Multi Line
Commenting  
--}}

@if (true)
  <p>This will be displayed.</p> 
@endif
<br>
@if(count($hobbies) > 0)
    @foreach ($hobbies as $hobby)
    <br>  {{ $hobby}}
    @endforeach
@else
    <p>There are no hobbies.</p>
@endif