<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Books\BooksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('getEmployees', function(Request $request) {
  $payLoad = json_decode($request->getContent(), true);
  $start_time = $payLoad['start_time'];
  $end_time = $payLoad['end_time'];
  $employee = DB::table('employees')->get();

  //get all the employees which not able to work
  $notAvailableEmployees = DB::table('shifts')
            ->join('employees', 'employees.id', '=', 'shifts.employee_id')
            ->select('shifts.employee_id')
            ->where('shifts.start_time', '=', $start_time)
            ->where('shifts.end_time', '=', $end_time);
            ->get();
  //get all the employees not in Leave
  $employeesOnLeave = DB::table('leave')
            ->join('employees', 'employees.id', '=', 'leave.employee_id')
            ->select('leave.employee_id')
            ->where('leave.start_date', '>', $start_time)
            ->where('leave.end_date', '<', $end_time);
            ->get();
  $employeeIds = array_merge(notAvailableEmployees, $employeesOnLeave);

  //get all the employess not int above employee list
  $employeeList = DB::table('employees')
            ->whereNotIn('id', $employeeIds)
            ->get();
  return $return response()->json($employeeList, 200);
});


Route::middleware('api')->get('/listUsers', function () {
  $user = DB::table('employees')->get();
  return $user;
});
