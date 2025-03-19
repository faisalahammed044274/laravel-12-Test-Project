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

{{--  @if (true)
  <p>This will be displayed.</p> 
@endif
<br>
@if(count($hobbies) > 0)
    @foreach ($hobbies as $hobby)
    <br>  {{ $hobby}}
    @endforeach
@else
    <p>There are no hobbies.</p>
@endif  --}}

@unless(false)
    <h3>This will be displayed.</h3>
@endunless

@isset($hobbies)
    <h2>It is set.</h2>
@endisset

@for ($i = 0; $i < 5; $i++)
    <p>{{ $i }}</p>
  
@endfor

@foreach ($hobbies as $hobby)
    <p>{{ $hobby }}</p>
@endforeach

{{--  @auth('admin')
    <p>This is visible to admin only.</p>
@endauth  --}}


{{--  @switch($country)
  @case('ge')
    <h3>Georgia</h3>
    @break  
  @case('us')
    <h3>United States</h3>
    @break
  @default
    <h3>Bangladesh.</h3>
@endswitch  --}}


{{--  <div>
  @class([
'my-css-class',
'georgia' => $country === 'ge',
  ])

  @style([
    'color' => 'red',
    'background-color' => $country === 'ge' ? 'blue' : 'initial',
])


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

</div>  --}}

{{--  @include('shared.button', ['text' => 'Click Me']);   --}}

<div style="background-color: #f55e5e; padding: 10px; margin-top: 10px;">
  @foreach ([1,2,3,4,5,6] as $n)
    @if($n == 6)
        @continue
    @endif
    <p>{{ $n }}</p>
@endforeach

{{--  
@foreach ($hobbies as $h)
 {{ dd($loop->iteration) }}
{{ $h }} 
@endforeach  
--}}
</div>

<div @class(['my-class', 'ads'])
@style(['color : red', 'background-color : blue', 'padding : 10px'])
>

Lorem ipsum dolor sit amet consectetur.

</div>