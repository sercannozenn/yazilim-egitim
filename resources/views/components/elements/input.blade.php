@isset($parentElement)
    <{{ $parentElement }} class = "{{ isset($parentClass) ?  $parentClass  : '' }}">

@endisset

@if(isset($label) && (!isset($labelIsAfter) || !$labelIsAfter))
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif

@isset($id)
    <input
        type="{{ $type ?? 'text' }}"
        class="{{ $class ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}"
        name="{{ $name ?? '' }}"
        id="{{ $id }}"
        {{ isset($checked) && $checked ? 'checked' : ''}}
        value="{{$defaultValue ?? ''}}"
        style="{{ $style ?? '' }}"
    >
    {!! $error ?? '' !!}
@endisset





@if(isset($label) && isset($labelIsAfter) && $labelIsAfter)
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif


@isset($parentElement)
    </{{$parentElement}}>
@endisset
