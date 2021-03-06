<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function winnersPage()
    {
        return view('winners');

    }

    public function showSignupPage()
    {
        return view('signup');
    }

    public function showDashboard()
    {
        return view('dashboard.applicants');
    }

    public function applicantsApi()
    {
        $applicants = Applicant::orderBy('created_at', 'desc')->paginate(200);

//        return Response::json([
//            "applicants" => $applicants
//        ]);
        return json_encode($applicants);
    }

    public function getApplicant($id)
    {
        $applicant = Applicant::where('id', $id)->get();

        return json_encode($applicant);
    }

    public function rateApplicant(Request $request, $id)
    {
        Applicant::where('id', $id)->update(array('rating' => $request->rating));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $rules = $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "age" => "required",
            "city" => "required",
            "story" => "required",
            "school" => "required",

        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->code . $request->phone,
            'age' => $request->age,
            'city' => $request->city,
            'story' => $request->story,
            'school' => $request->school,

        ];

        Applicant::create($data);

        return redirect('/',)->withSuccess('???? ?????????????? ??????????');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant, $id)
    {
        $applicant = Applicant::where('id', $id);
        $applicant->delete();
    }
}
