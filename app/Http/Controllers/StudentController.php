<?php

namespace App\Http\Controllers;
use App\Models\Student;
// use App\model\Borrow;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

    }

    public function index()
    {
        $data=[];

        $data['students']=Student::all();

        //$student = Student::findOrFail($id);
        // return $data;

        return view('students.student',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            // 'book_name' => 'required|max:255',
            // 'isbn_no' => 'required|alpha_num',
            // 'book_price' => 'required|numeric',
            'enrollment_no' => 'required',
            'u_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'father_cn' => 'required',

        ]);
        // $book = Book::create($validatedData);
        // return redirect('/books')->with('success', 'Book is successfully saved');
        $student = Student::create($validatedData);
        return redirect('students')->with('success', 'Book is successfully saved');
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
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('edit', compact('student'));
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
        $validatedData = $request->validate([
            'enrollment_no' => 'required',
            'u_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
        ]);
        Student::whereId($id)->update($validatedData);

        return redirect('students')->with('success', 'Student is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('students')->with('success', 'Student is successfully deleted');
    }
}
