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

    public function complete(Request $request)
    {
        try {
            $name = $request->input('name');
            $save = ToDo::where('name', $name)->update(['completed' => 1]);
            $res['status'] = true;
            $res['message'] = 'Todo Complete Success!';
            return response($res, 200);
        } catch (\Illuminate\Database\QueryException $ex) {
            $res['status'] = false;
            $res['message'] = $ex->getMessage();
            return response($res, 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $name = $request->input('name');
            $save = ToDo::where('name', $name)->delete();
            $res['status'] = true;
            $res['message'] = 'Todo Delete Success!';
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
            $res['data'] = ToDo::all();
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
