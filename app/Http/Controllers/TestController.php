<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        $tests = Test::latest()->paginate(10);
        return view('tests.index', compact('tests'));
    }

    public function create()
    {

        return view('tests.create', [
            'mode' => 'create',
            'test' => new Test(),

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Test::create($data);
        return redirect()->route('tests.index')->with('success', 'Successfully created!');
    }

    public function show(Test $test)
    {
        return view('tests.view', compact('test'));
    }

    public function edit(Test $test)
    {

        return view('tests.edit', [
            'mode' => 'edit',
            'test' => $test,

        ]);
    }

    public function update(Request $request, Test $test)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $test->update($data);
        return redirect()->route('tests.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Test $test)
    {
        $test->delete();
        return redirect()->route('tests.index')->with('success', 'Successfully deleted!');
    }
}