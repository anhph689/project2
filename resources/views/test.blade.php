{{-- {{$var1}} --}}

{{-- {!! $var1 !!} --}}

{{-- @if ($var1 == '1')
    <h1>Giá trị 1</h1>
@elseif ($var1 == '2')
    <h1>Giá trị 2</h1>
@endif --}}

{{-- <?php if($var1 == '1'): ?>
    <h1>GT1</h1>
<?php elseif($var1 == '2'): ?>
    <h1>GT2</h1>
<?php endif ?> --}}

{{-- @for ($i = 0; $i <= 100; $i++)
    <h1>{{$i}}</h1>
@endfor --}}

{{-- @foreach ($var2 as $key => $value)
    {{$key}} : {{$value}}
@endforeach --}}

{{-- @switch($var1)
    @case('1')
        <h1>GT1</h1>
        @break
    @case('2')
        <h1>GT2</h1>
        @break
    @default
        <h1>Không có</h1>
@endswitch --}}

@php
    var_dump($var2);
@endphp
