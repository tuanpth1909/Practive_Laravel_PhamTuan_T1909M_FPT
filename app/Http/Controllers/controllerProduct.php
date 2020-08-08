<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class controllerProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = products::all();
        return view('Page.Manage',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {

        $product_add= new products;
        $product_add->name=$request->name;
        $product_add->price=$request->price;
        $product_add->description=$request->description;
        $product_add->save();
        ;
        return redirect()->route('Display');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $info_nhanvien= $request->search;
        $product = products::where('name',$info_nhanvien)->get()->first();
        return view('Page.Search',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

      return view('Page.Add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pd = products::where('id', $id)->get()->first();
        return  view('Page.Update',compact('pd'));
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
        //
        $nhanvien_update = products::where('ID',$id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('Display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo= products::where('id', $id)->delete();
        return redirect()->route('Display');
    }
}
