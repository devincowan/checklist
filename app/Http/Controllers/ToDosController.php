<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\ToDo;

class ToDosController extends Controller
{
    public function store(Request $request)
    {
        try {
            $name = $request->input('name');
            $save = ToDo::create([
                'name'=> $name,
            ]);
            $res['status'] = true;
            $res['message'] = 'Todo Create Success!';
            return response($res, 200);
        } catch (\Illuminate\Database\QueryException $ex) {
            $res['status'] = false;
            $res['message'] = $ex->getMessage();
            return response($res, 500);
        }
    }

    public function get()
    {
        try {
            $res = ToDo::all();
            $res['status'] = true;
            $res['message'] = 'Todo Get Success!';
            return response($res, 200);
        } catch (\Illuminate\Database\QueryException $ex) {
            $res['status'] = false;
            $res['message'] = $ex->getMessage();
            return response($res, 500);
        }
    }
}
