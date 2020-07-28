@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
            <div class="card">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Enter Employee Details<a href="/home" class="btn btn-outline-primary btn-sm" style="float: right;">Go Back</a></div>
                            <div class="panel-body">
                                {!!Form::open(['action' => 'employeeController@store','method' => 'POST'])!!}
                                {{Form::bsTextName('ename','',['placeholder' => 'Employee Name'])}}
                                {{Form::bsTextSalary('esalary','',['placeholder' => 'salary'])}}
                                {{Form::bsTextContact('econtact','',['placeholder' => 'Contact'])}}
                                {{Form::bsTextArea('eaddress','',['placeholder' => 'Address'])}}
                                {{Form::bsSubmit('submit',['class'=>'btn btn-primary btn-sm'])}}
                                  {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
@endsection
