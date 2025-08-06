@props(['type', 'color'])

<button type="{{$type}}" style="color: { { $color } } ">
    {{$slot}}
</button>