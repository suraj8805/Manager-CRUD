<div class="form-group">
    {{ Form::label($eaddress, "Employee Address", ['class' => 'control-label']) }}
    {{ Form::textarea($eaddress, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>