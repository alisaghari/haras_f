<?php

namespace App\Http\Controllers;

use App\support;
use App\ticket;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function tickets()
    {
        $tickets = ticket::where("u_id", $_SESSION["userId"])->get();
        return view("user.tickets")->with("tickets", $tickets);
    }

    public function send_ticket(Request $request)
    {
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

        $ticket = new ticket();
        $ticket->title = $request->input("title");
        $ticket->ticket_code = $rand;
        $ticket->status = "0";
        $ticket->type = "user";
        $ticket->u_id = $_SESSION["userId"];
        $ticket->save();

        $message = new support();
        $message->message = $request->input("message");
        $message->type = "user";
        $message->t_id = $ticket->id;
        $message->save();
        return redirect("user/support/ticket/" . $ticket->ticket_code);

    }

    public function ticket($code)
    {
        $ticket = ticket::where("ticket_code", $code)->where("u_id", $_SESSION["userId"])->first();
        $messages = support::where("t_id", $ticket->id)->get();
        return view("user.ticket")->with("messages", $messages)->with("code", $code);
    }

    public function send_message(Request $request, $code)
    {
        $ticket = ticket::where("ticket_code", $code)->where("u_id", $_SESSION["userId"])->first();
        $message = new support();
        $message->message = $request->input("message");
        $message->type = "user";
        $message->t_id = $ticket->id;
        $message->save();
        return redirect()->back();
    }
}
