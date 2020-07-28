@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
            <div class="card">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-light">
                        <div class="panel-heading">Edit Employee Detials <a href="/home" class="btn btn-outline-primary btn-sm" style="float: right;">Go Back</a></div>
                            <div class="panel-body">

                                {!!Form::open(['action' => ['employeeController@update',$employee->id],'method' => 'POST'])!!}
                                {{Form::bsTextName('ename',$employee->ename,['placeholder' => 'Employee Name'])}}
                                {{Form::bsTextSalary('esalary',$employee->esalary,['placeholder' => 'salary'])}}
                                {{Form::bsTextContact('econtact',$employee->econtact,['placeholder' => 'Contact'])}}
                                {{Form::bsTextArea('eaddress',$employee->eaddress,['placeholder' => 'Address'])}}
                                {{Form::hidden('_method','PUT')}}
                                
                                {{Form::bsSubmit('submit',['class'=>'btn btn-primary btn-sm'])}}
                                
                                
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
@endsection
