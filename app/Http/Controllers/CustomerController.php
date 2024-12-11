<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Customer;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      
        $customer = Customer::all();
        return view ('customer.dashboard')->with('customer', $customer);
    
    }
    public function payments(){
      
        $customer = Customer::all();
        return view ('customer.payments')->with('customer', $customer);
    
    }
    public function notification(){
      
        $customer = Customer::all();
        return view ('customer.notification')->with('customer', $customer);
    
    }
    public function app(){
      
        $customer = Customer::all();
        return view ('customer.app')->with('customer', $customer);
    
    }
    public function subscriber(){
      
        $customer = Customer::all();
        return view ('customer.subscriber')->with('customer', $customer);
    
    }
    public function management(){
      
        $customer = Customer::all();
        return view ('customer.management')->with('customer', $customer);
    
    }
    public function asd(){
    
        $customer = Customer::all();
 return view('customer.index')->with('customer',$customer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 

    
        return view('customer.create');

    }
    public function new(Request $request)
    {
      $customer = new Customer();
      $customer->name = $request->input('name');
      $customer->email = $request->input('email');
      $customer->password = $request->input('password');
      $customer->save();
      return redirect()->route('customer.index');

                
    }
    public function jhg(){
       
        return view ('customer/index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show')->with('customer', $customer);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        
        return view('customer.edit', compact('customer'));
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
        $customer = Customer::find($id);
        
        // Check if customer exists
        if (!$customer) {
            abort(404); // or return a custom error message
        }

        // Validate request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Update customer data
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        // Hash password before saving
        $customer->password = bcrypt($request->input('password'));
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully!');
    }
    
    
}
