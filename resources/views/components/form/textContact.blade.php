<div class="form-group">
    {{ Form::label($econtact,'Employee Contact', ['class' => 'control-label']) }}
    {{ Form::text($econtact, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>