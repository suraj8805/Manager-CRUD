@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
           
                <div class="panel-body">
                 
                    <h4>Emlpoyees</h4>
                    @if(count($employees))
                        <table class='table table-striped'>
                        <tr>   
                            <th>Ename</th>
                            <th></th>
                            <th></th>
                           
                        </tr>    
                        @foreach($employees as $emp)
                        <tr>   
                        <td>{{$emp->ename}}</td>
                        <td><a href="/employees/{{$emp->id}}/edit" class='btn btn-info btn-sm'>Edit</td>
                        <td>
                        {!!Form::open(['action' => ['employeeController@destroy',$emp->id],'method' => 'POST', 'onsubmit'=>'return confirm("Are you sure")'])!!}
                                {{Form::hidden('_method','DELETE')}}

                                {{Form::bsSubmit('Delete',['class'=>'btn btn-danger btn-sm'])}}
                                {!! Form::close() !!}
                        </td>
                        </tr>  
                    @endforeach
                    </table>
                     @endif
                     <div class="card">
                        
                </div>
            </div>
            <br/>
            <span class="pull-right"><a href='/employees/create' class='btn btn-success' class='btn-mx'>Add Employee</a></span>                   
        </div>

</div>
@endsection
