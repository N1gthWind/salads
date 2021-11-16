<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaladRequest;
use App\Models\Salad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;


class SaladController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salads = Salad::paginate(3);

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

        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = time() . "-" . $request->get('name') . '.' .
                $file->extension();

            $file->move(public_path('images'), $imageName);


            $salad = new Salad([
                "name" => $request->get('name'),
                "price" => $request->get('price'),
                "description" => $request->get('description'),
                "image_path" => $imageName,
                "user_id" => Auth::user()->id
            ]);
            $salad->save(); // Finally, save the record.
        } else {
            // dd($request);
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
        abort(404);
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

        if (!Gate::allows('update-post', $salad)) {
            abort(403, "You can't edit this product!");
        }

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
        $salad = Salad::findOrFail($id);
        if (!Gate::allows('update-post', $salad)) {
            abort(403, "You can't edit this product!");
        }

        $validatedData = $request->validated();


        if (request()->hasFile('image') && request('image') != '') {
            $imagePath = public_path('images/' . $salad->image_path);
            if (File::exists($imagePath)) { 
                unlink($imagePath);
            }
            $image = $request->file('image');

            $imageName = time() . "-" . $request->get('name') . '.' .
                $image->extension();

            $image->move(public_path('images'), $imageName);

            $salad->update([
                'image_path' => $imageName,
            ]);
        }


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
