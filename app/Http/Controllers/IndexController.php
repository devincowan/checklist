<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\ToDo;
class IndexController extends Controller
{
  public function index(){
    $data = array(
      'todos' => ToDo::all(),
    );
    return view('index' , $data);
  }
}
