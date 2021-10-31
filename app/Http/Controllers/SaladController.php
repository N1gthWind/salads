<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaladRequest;
use App\Models\Salad;
use Illuminate\Http\Request;


class SaladController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified'])->only(['create','store','edit','update','destroy']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salads = Salad::paginate(1);

        $saladCount = Salad::count();
        return view('products.index', [
            'salads' => $salads,
            'saladCount' => $saladCount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaladRequest $request)
    {

        
        $validatedData = $request->validate();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = time() . "-" . $request->get('name') . '.' .
                $file->extension();

            $file->move(public_path('images'), $imageName);


            $salad = new Salad([
                "name" => $request->get('name'),
                "price" => $request->get('price'),
                "description" => $request->get('description'),
                "image_path" => $imageName
            ]);
            $salad->save(); // Finally, save the record.
        } else {
            dd($request);
        }



        $request->session()->flash('status', 'New Salad has been created');
        return redirect()->route('products.index');
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
        $salad = Salad::findOrFail($id);

        return view('products.edit', ['salad' => $salad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaladRequest $request, $id)
    {
        
        $validatedData = $request->validated();

        $salad = Salad::findOrFail($id);
        $salad->fill($validatedData);
        $salad->save();
        $request->session()->flash('status', 'The product has been updated!');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
