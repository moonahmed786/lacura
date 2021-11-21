<?php

namespace App\Http\Controllers;

use App\SupportTicket;
use App\TicketComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use mysql_xdevapi\Exception;

class SupportTicketController extends Controller
{
    public function ticketIndex()
    {
        $all_ticket = SupportTicket::where('user_id', Auth::user()->id)
            ->orderBy('id', 'desc')->paginate(15);
        $pt = __('support_tickets.Support Tickets');
        return view('user.support.support_n', compact('all_ticket', 'pt'));
    }

    public function ticketCreate()
    {
        $pt = __('support_tickets.Create New Ticket');
        $ticket = SupportTicket::where( 'user_id' , Auth::user()->id)->where('status','!=',9)->get();

        if(!$ticket->isEmpty()){
            return redirect()->back()->with('message', __('support_tickets.You Already have an open Ticket Please mark closed to add new!'));

        }else{
        return view('user.support.add_ticket_n', compact('pt'));
        }
    }

    public function ticketStore(Request $request)
    {

        $this->validate($request, [
            'subject' => 'required',
            'detail' => 'required'
        ]);

        $a = strtoupper(md5(uniqid(rand(), true)));
        $posterName = '';
        if (request()->hasFile('img')) {
            $posterName = time() . '_' . request()->img->getClientOriginalName();
            request()->img->move(public_path('images/comment_pic'), $posterName);
        }

        $request->img = $posterName;

        $ticket = SupportTicket::create([
            'subject' => $request->subject,
            'ticket' => substr($a, 0, 8),
            'user_id' => Auth::user()->id,
            'status' => 1,
        ]);

        TicketComment::create([
            'ticket_id' => $ticket->ticket,
            'type' => 1,
            'comment' => $request->detail,
            'img'=>$request->img
        ]);

        Session::flash('message', __('support_tickets.Ticket Created Successfully'));

        return redirect()->route('ticket.customer.reply', $ticket->ticket);


    }

    public function ticketReply($ticket)
    {
        $ticket_object = SupportTicket::where('user_id', Auth::user()->id)
            ->where('ticket', $ticket)->first();
        $ticket_data = TicketComment::where('ticket_id', $ticket)->get();

        $pt = __('support_tickets.Reply Ticket');

        if ($ticket_object == '') {
            return redirect('/');
        } else {
            return view('user.support.view_reply_n', compact('ticket_data', 'ticket_object', 'pt'));
        }
    }

    public function ticketReplyStore(Request $request, $ticket)
    {

        $this->validate($request, [
            'comment' => 'required'
        ]);
        $posterName= '';
        if (request()->hasFile('img')) {
            $posterName = time() . '_' . request()->img->getClientOriginalName();
            request()->img->move(public_path('images/comment_pic'), $posterName);
        }

        $request->img = $posterName;
        TicketComment::create([
            'ticket_id' => $ticket,
            'type' => 1,
            'comment' => $request->comment,
            'img' => $request->img,
        ]);

        SupportTicket::where('ticket', $ticket)
            ->update([
                'status' => 3
            ]);

        return redirect()->back()->with('message', __('support_tickets.Message Send Successful'));
    }

    public function indexSupport()
    {
        $page_title = __('support_tickets.Support Ticket');
        $all_ticket = SupportTicket::orderBy('id', 'desc')->paginate(20);
        return view('admin.support.support', compact('all_ticket', 'page_title'));
    }

    public function adminSupport($ticket)
    {
        $ticket_object = SupportTicket::where('ticket', $ticket)->first();
        $ticket_data = TicketComment::where('ticket_id', $ticket)->get();
        $page_title = "Support Ticket Reply";
        return view('admin.support.view_reply', compact('ticket_object', 'ticket_data', 'page_title'));
    }

    public function adminReply(Request $request, $ticket)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);


        $posterName='';

        if ($request->hasFile('img')) {
            $posterName = time() . '_' . $request->img->getClientOriginalName();
            $request->img->move(public_path('images/comment_pic'), $posterName);
        }


        TicketComment::create([
            'ticket_id' => $ticket,
            'type' => 0,
            'comment' => $request->comment,
            'img' => $posterName,
        ]);

        SupportTicket::where('ticket', $ticket)
            ->update([
                'status' => 2
            ]);

        return redirect()->back()->with('message', __('support_tickets.Message Send Successful'));

    }

    public function ticketClose($ticket)
    {
        SupportTicket::where('ticket', $ticket)
            ->update([
                'status' => 9
            ]);
        return redirect()->back()->with('message', __('support_tickets.Conversation closed, But you can start again'));
    }
}
