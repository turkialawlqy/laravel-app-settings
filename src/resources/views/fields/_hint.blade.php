@if($hint = Arr::get($field, 'hint'))
    <small class="{{ Arr::get($field, 'input_hint_class', config('app_settings.input_hint_class', '')) }}">
       {{ __($hint) }}
    </small>
@endif

@if ($errors->has($field['name']))
    <small class="{{ config('app_settings.input_error_feedback_class', 'invalid-feedback') }}">
        {{ __($errors->first($field['name'])) }}
    </small>
@endif
