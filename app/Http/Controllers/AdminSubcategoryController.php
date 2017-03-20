<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Subcategory;
use App\User;
use Input;
use Redirect;

class AdminSubcategoryController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $subcategory = Subcategory::find($id);

            return view('dashboard.subcategory.edit', array('subcategory' => $subcategory));
        } else {
            return Redirect::to('/');
        }
    }

    /**
     * Show a single category
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $subcategory = Subcategory::find($id);

            return view('dashboard.subcategory.edit', array('subcategory' => $subcategory));
        } else {
            return Redirect::to('/');
        }
    }

    /**
     * Update the category.
     *
     * @return Response
     */
    public function update(Subcategory $subcategory, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $this->validate($request, [
                'name' => 'required|max:32',
                'desc' => 'required|max:510',
            ]);

            $subcategory = Subcategory::where(['id' => $request->id])->first();
            $subcategory->update($request->all());
        }
        return Redirect::to('/dashboard/categorys');
    }

    /**
     * destroy the product.
     *
     * @return Response
     */
    public function destroy(Subcategory $subcategory, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            $subcategory = Subcategory::where('id', $request->id)->delete();
        }
        return Redirect::to('/dashboard/categorys');
    }

    /**
     * Show create form
     *
     * @return view
     */
    public function create(Request $request)
    {
        return view('dashboard.subcategory.create');
    }

    /**
     * Stores a new subcategory
     *
     * @return mixed
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:32',
            'desc' => 'required|max:510',
        ]);

        Subcategory::create(
            [
                'name' => $request->name,
                'desc'   => $request->desc,
            ]
        );

        return Redirect::to('/dashboard/categorys');
    }

}
