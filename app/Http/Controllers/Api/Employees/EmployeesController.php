<?php

namespace App\Http\Controllers\Api\Employees;

use App\Http\Controllers\Controller;

use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employees = DB::table('employees')->get();

        return $employees;
    }
}
