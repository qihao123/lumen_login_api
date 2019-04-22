<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller {

   public function __construct() 
   {

   }

   public function authenticate(Request $request)
   {
      $user = User::where('username', $request->input('username'))->first();
      if ($user && (Hash::check($request->input('password'), $user->password)))
      {
        return response()->json([
          'code' => 0,
		  'data' => {'username'=>$user ->username,'password'=>$user -> password}
		  'message' => 'successful login!'
        ]);
      }
      else 
      {
        return response()->json([
		  'code' => 1,
		  'data' => {}
		  'message' => 'error login!']);
      }
   }
}