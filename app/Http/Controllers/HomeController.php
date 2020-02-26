<?php

namespace App\Http\Controllers;

use App\Customer;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers=Customer::orderBy('created_at','desc')->paginate(10);
        //dd($customers);

        return view('index')->with('customers', $customers);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
            'info'=>'nullable|max:255'

          ]);

          $customer=new Customer();
          $customer->name=$request->name;
          $customer->surname=$request->surname;
          $customer->phone=$request->phone;
          $customer->address=$request->address;
          $customer->email=$request->email;
          $customer->info=$request->info;

          $customer->save();

          toastr()->success('Başarılı', 'Müşteri bilgileri başarıyla eklendi.');

          return redirect()->route('home.index');


    }
    public function show($id)
    {
        $customer=Customer::find($id);
        //dd($customers);

        return view('show')->with('customer',$customer);
    }
    public function edit($id)
    {
        $customer=Customer::find($id);
        //dd($customers);

        return view('edit')->with('customer',$customer);
    }
    public function update(Request $request ,$id)
    {
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
            'info'=>'nullable|max:255'

          ]);

          $customer=Customer::findOrFail($id);
          $customer->name=$request->name;
          $customer->surname=$request->surname;
          $customer->phone=$request->phone;
          $customer->address=$request->address;
          $customer->email=$request->email;
          $customer->info=$request->info;

          $customer->save();

          toastr()->success('Başarılı', 'Müşteri bilgileri başarıyla güncellendi.');

          return redirect()->route('home.index');


    }
    public function destroy($id){
        $customer=Customer::find($id);
        $customer->delete();
        toastr()->success('Silindi, Müşteri bilgileri başarıyla silinmiştir .');
        return redirect()->route('home.index');
      }
}
