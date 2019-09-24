<option  value="" disabled="disabled" selected="selected"></option>
@foreach ($code_values as $value)
    <option class="code_values_option" value="{{ $value->id }}">{{ __('code_value.'. $value->id)  }}</option>
@endforeach