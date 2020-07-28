<div class="form-group">
    {{ Form::label($esalary,'Employee Salary', ['class' => 'control-label']) }}
    {{ Form::text($esalary, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>