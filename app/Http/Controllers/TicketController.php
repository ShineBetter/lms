<?php

namespace App\Http\Controllers;


use App\Models\ticket;
use App\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ticket::where('status','1')->paginate(10);
        return view('backend.admin.tickets.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=User::get()->pluck("id");
        return view('backend.admin.tickets.create',['data' =>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $level = new ticket();
        $level->title = $request->title;
        $level->content = $request->content;
        $level->receiver_id = $request->receiver_id;
        $level->status = 1;
        $level->date = now();
        $level->sender_id = auth()->id();

        $level->save();
        $comment = 'تیکت ارسال شد';
        session()->flash('status', $comment);
        return redirect()->route('ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    public function close($id)
    {
        $ticket = ticket::where('id', $id)->first();
        $ticket->status=0;
        $ticket->save();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
