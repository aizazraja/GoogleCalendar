<?php

namespace App\Http\Controllers;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use App\Mail\NotifyMail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $request)
    {
        //dd($request->input('name'));
        $startTime = Carbon::parse($request->input('meeting_date').''.$request->input('meeting_time'));
        $endTime = (clone $startTime)->addHour();

        Event::create([
            'name'=> $request->input('name'),
            'startDateTime'=> $startTime,
            'endDateTime' => $endTime
        ]);
        
        $user_email = 'muhammad.aizaz@oip.com.pk';
                    
        $res   = Mail::to($user_email)->send(new NotifyMail());
        return redirect()->back()->withMessage('Appointment Booked');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
