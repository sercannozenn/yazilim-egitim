@isset($parentElement)
    <{{ $parentElement }} class = "{{ isset($parentClass) ?  $parentClass  : '' }}">

@endisset

@if(isset($label) && (!isset($labelIsAfter) || !$labelIsAfter))
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif

@isset($id)
    <textarea
        name="{{$name ?? ''}}"
        class="{{ $class ?? '' }}"
        rows="{{ $rows ?? '5' }}"
        cols="{{ $cols ?? '10' }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder ?? '' }}"
        style="{{$style ?? ''}}"

    >{{ $defaultValue ?? '' }}</textarea>
@endisset



@if(isset($label) && isset($labelIsAfter) && $labelIsAfter)
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif


@isset($parentElement)
    </{{$parentElement}}>
@endisset
