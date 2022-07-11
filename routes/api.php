<?php

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/patients', function (Request $request) {
    if (isset($request->todayPatients)) {
        if ($request->searchQuery && !(empty($request->searchQuery))) {




            $patients =
                Patient::whereHas('appointment', function ($query) {
                    $query
                        ->where('trashed', 0)
                        ->where('date', '=', date('Y-m-d'))->where('isDone', 0);
                })
                ->where('firstname', 'LIKE', '%' . $request->searchQuery . '%')
                ->with('MediaManually')
                ->withCount('MediaManually')
                ->paginate(5);

            return $patients;
        } else {

            $patients = Patient::whereHas('appointment', function ($query) {
                $query->where('date', '=', date('Y-m-d'))->where('isDone', 0)
                    ->where('trashed', 0);
            })->with('MediaManually')->withCount('MediaManually')->paginate(5);
            return $patients;
        }
    } else {

        if ($request->searchQuery && $request->searchQuery != "") {

            $patients = Patient::where('firstname', 'LIKE', '%' . $request->searchQuery . '%')
                ->orWhere('midname', 'LIKE', '%' . $request->searchQuery . '%')
                ->orWhere('lastname', 'LIKE', '%' . $request->searchQuery . '%')
                ->orWhere('insurance', 'LIKE', '%' . $request->searchQuery . '%')
                ->orWhere('dob', 'LIKE', '%' . $request->searchQuery . '%')
                ->with('MediaManually')
                ->withCount('MediaManually')
                ->paginate(5);



            return $patients;
        } else {
            $patients = Patient::with('MediaManually')->withCount('MediaManually')->paginate(5);
            return $patients;
        }
    }
});


Route::get('/PatientgetLastPDF', function (Request $request) {
    $patient = Patient::Find($request->patient_id);
    $mediaItems = $patient->getMedia();
    if (count($mediaItems) > 0) {
        $mediaItem = $mediaItems[count($mediaItems) - 1];
        return $mediaItem->getFullUrl();
    } else {
        return null;
    }
});


Route::post('/UploadFiles', function (Request $request) {
    $patient = Patient::find($request->patient_id);
    if ($patient->addMediaFromRequest('files')->toMediaCollection())
        return "Successfully Uploaded";
    else return "Error";
});

Route::get(
    '/getPatientsQuery',
    function (Request $request) {
        $patients = Patient::select('id AS value',DB::Raw("CONCAT(firstname, ' ', midname, ' ', lastname, ' (', dob, ' )') AS label"))->
            where('firstname', 'LIKE', '%' . $request->search . '%')
            ->orWhere('midname', 'LIKE', '%' . $request->search . '%')
            ->orWhere('lastname', 'LIKE', '%' . $request->search . '%')
            ->orWhere('insurance', 'LIKE', '%' . $request->search . '%')
            ->orWhere('dob', 'LIKE', '%' . $request->search . '%')->limit(100)->get();
        return $patients;
    }
)->name('patient.search');
