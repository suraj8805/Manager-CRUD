<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[

            'ename'=>'required',
            
        ]);
        $emp=new Employee;

        //create employee
        $emp->ename=$request->input('ename');
        $emp->esalary=$request->input('esalary');
        $emp->econtact=$request->input('econtact');
        $emp->eaddress=$request->input('eaddress');
         
        $emp->user_id=auth()->user()->id;

        $emp->save();

        return redirect('home')->with('success','Employee Added');
            




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);

        return view("editEmployee")->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'ename'=>'required',
            
        ]);
        $emp=Employee::find($id);

        //create employee
        $emp->ename=$request->input('ename');
        $emp->esalary=$request->input('esalary');
        $emp->econtact=$request->input('econtact');
        $emp->eaddress=$request->input('eaddress');
         
        $emp->user_id=auth()->user()->id;

        $emp->save();

        return redirect('home')->with('success','Employee updated');
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::find($id);

        $employee->delete();

        return redirect('home')->with('success','Employee Deleted');
     
    }
}
