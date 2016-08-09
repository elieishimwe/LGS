<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    

    public function send_contact(Request $request) {

      
		$emails          = array('elieish@gmail.com','info@lgsedu.co.za','kasambi@lgsedu.co.za','drkasole@lgsedu.co.za');
		$data            = array();
		$data['name']    = $request['name'];
		$data['email']   = $request['email'];
		$data['subject'] = $request['subject'];
		$data['content'] = $request['content'];

        \Mail::send('emails.contact', $data, function($message) use ($data,$emails)
        {
            $message->from('info@lgsedu.co.za');
            foreach ($emails as $email) {
               $message->to($email)->subject('Lumumba Graduate Institute Contact Request');
            }

        });

        \Session::flash('message', 'Message Sent Successful');
        return redirect('contact');
       

    }

}
