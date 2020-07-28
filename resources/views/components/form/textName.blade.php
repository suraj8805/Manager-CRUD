<div class="form-group">
    {{ Form::label($ename,'Employee name', ['class' => 'control-label']) }}
    {{ Form::text($ename, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>