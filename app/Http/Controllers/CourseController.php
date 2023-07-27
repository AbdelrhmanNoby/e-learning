<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function category($id){

        $data['categories'] = Category::findOrFail($id);
        $data['courses'] = Course::where('category_id',$id)->paginate(3);
        return view('front.courses.cat')->with($data);

    }

    public function show($id , $c_id){
        $data['course']= Course::findOrFail($c_id);
        return view('front.courses.show')->with($data);

    }
}
