@php
        $fieldName = isset($field['multi']) ? $field['name'].'[]' : $field['name'];
@endphp

<select name="{{ $fieldName }}"
        class="{{ Arr::get( $field, 'class', config('app_settings.input_class', 'form-control')) }}"
        @if(isset($field['multi'])) multiple @endif
        @if( $styleAttr = Arr::get($field, 'style')) style="{{ $styleAttr }}" @endif
        id="{{ $field['name'] }}">
    @foreach(Arr::get($field, 'options', []) as $val => $label)
        <option value="{{ $val }}" @if( old($field['name'], \setting($field['name'])) == $val ) selected @endif>
                {{ __($label) }}
        </option>
    @endforeach
</select>
