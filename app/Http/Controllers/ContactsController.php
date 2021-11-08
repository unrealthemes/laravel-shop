<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class ContactsController extends Controller
{   

    public function index() {

        return view( 'pages.contacts' );
    }

    public function submit( Request $request ) { 

        // dd( $request->data );

        $validator = Validator::make( $request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required',
        ]);

        if ( $validator->passes() ) {
            // TODO fixed send email
            // $data = array(
            //     'name' => $request->name,
            //     'message' => $request->message
            // );
            // Mail::to('unrealtheme@gmail.com')->send( new SendMail( $data ) );

            return response()->json( [ 'success' => 'Data successfully send' ] );
        }
     
        return response()->json( [ 'error' => $validator->errors()->all() ] );
    }

}
