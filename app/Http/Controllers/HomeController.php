<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // return User::role('admin')->get();
        // Role::create(["name"=>'secretary']);
        // Permission::create(['name'=>'add patient']);
        // Permission::create(['name'=>'view patient']);
        // Permission::create(['name'=>'edit patient']);
        // Permission::create(['name'=>'delete patient']);
        // Permission::create(['name'=>'add appointment']);
        // Permission::create(['name'=>'view appointment']);
        // Permission::create(['name'=>'edit appointment']);
        // Permission::create(['name'=>'delete appointment']);

        // $role=Role::findById(2);
        // for($i=2;$i<=9;$i++){
        //     $permission=Permission::findById($i);
        //     $role->givePermissionTo($permission);
        // }
  
        $appointments=Appointment::select('id','date','time','isDone','notes')
                                ->where('date', '=', date('Y-m-d'))
                                ->where('trashed',0)
                                ->orderBy('isDone','ASC')
                                ->orderBy('date','ASC')
                                ->orderBy('time','ASC')
                                ->with('patient:id,firstname,midname,lastname')
                                ->with('payment')
                                ->paginate(7);
        $countme=Appointment::select('id','date','isDone','notes')
                                ->where('trashed',0)
                                ->where('date', '=', date('Y-m-d'))->count();
        $patients = Patient::select('id', 'firstname', 'midname', 'lastname', 'dob')->get();
        return view('home',compact('appointments','countme','patients'));
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $appointments=Appointment::select('id','date','time','isDone','notes')
                                ->where('date', '=', date('Y-m-d'))
                                ->where('trashed',0)
                                ->orderBy('isDone','ASC')
                                ->orderBy('date','ASC')
                                ->orderBy('time','ASC')
                                ->orderBy('updated_at','DESC')
                                ->with('patient:id,firstname,midname,lastname')
                                ->with('payment')
                                ->paginate(7);


        $countme=Appointment::select('id','date','time','isDone','notes')
                                ->where('date', '=', date('Y-m-d'))
                                ->where('trashed',0)
                                ->orderBy('date','ASC')
                                ->orderBy('time','ASC')
                                ->count();


      return view('dailyAppointment', compact('appointments','countme'))->render();
     }
    }
}



