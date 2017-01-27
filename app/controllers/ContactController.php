<?php

class ContactController extends BaseController {

	 // This function will show the view
	 public function create()
	 {
	  	return View::make('contact');
	 }

	 public function store()
	 {
	 	$postData = Input::all();

	  	$validator = Validator::make($postData,
	      	
	      	array(
	         'nom' => 'required',
            'prenom' => 'required',
			'email' => 'required|email',
			'tel' => 'required',
			'adresse' => 'required',
			'cp' => 'required',
			'ville' => 'required',
	      	)
	  	);

	  	if ($validator->fails())
			return Redirect::to('contact')->withErrors($validator)->withInput();

		//tableau des emails qui reçevront le mail
		//$emails[] = 'dboutchou@hotmail.com';
		$emails[] = 'janesstraiteurafricain@yahoo.fr';
		$emails[] = Input::get('email');
		
		// Send the email with the contactemail view, the user input
	   	Mail::send('emails.contactemail', $postData, function($message) use ($emails) {

	       $message->to($emails,'Janess Traiteur Africain')->subject('Janess Traiteur Africain - Contact');
	       $message->attach(public_path() . '/catalogue/Documentation_JANESS_Traiteur.pdf');
	   });

	   // Specify a route to go to after the message is sent to provide the user feedback
	   return View::make('contact_envoye')->with($postData);
	}
}
