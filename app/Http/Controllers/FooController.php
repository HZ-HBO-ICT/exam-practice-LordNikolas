<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foos = Foo::orderBy('created_at', 'desc')->get();
        return view('foos.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Foo::create($this->validateFoo());

        return redirect()->route('foos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)
    {
        return view('foos.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function edit(Foo $foo)
    {
        return view('foos.edit', compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foo $foo)
    {
        $foo->update($this->validateFoo());

        return redirect()->route('foos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        $foo->delete();

        return redirect()->route('foos.index');
    }

    /**
     * @return array
     */
    public function validateFoo(): array
    {
        return request()->validate([
            'name' => 'required',
            'thud' => 'required|integer|between:0,50',
            'wombat' => 'required|boolean'
        ]);
    }
}
