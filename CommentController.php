<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return View::make('livre_dor')->with('comments', Comments::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//charge la vue de creation de commentaire
		return View::make('create_comment'); 
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$postData = Input::all();

	  	$validator = Validator::make($postData,
	      	
	      	array(
            'pseudo' => 'required',
			'email' => 'required|email',
			'texte' => 'required',
	      	)
	  	);
	  	
	  	if ($validator->fails())
			return Redirect::to('comment')->withErrors($validator)->withInput();
			
		else{
			
			//création de l'objet coment
			$comment = new Comments();
			
			//récupératio ndes champs obligatoires
			$comment->pseudo = Input::get('pseudo');
			$comment->email = Input::get('email');
			$comment->text = Input::get('texte');
			
			//teste si une photo a été chargée
			if(Input::hasFile('photo')){
				
				//récupération de la photo
				$photo = Input::file('photo');
				
				//nouveau nom pour la photo
				$filename  = time() . '.' . $photo->getClientOriginalExtension();

				//chemin des photos
				$path = public_path("uploads/" .$filename);
	 
				//resize et enregistrement de la photo
				Image::make($photo->getRealPath())->resize(130, 130)->save($path);
				
				//enregistrement du champ
				$comment->photo = $filename;
				
			}
			
			//stockage dans la base de données
			$comment->save();
				
			//tableau des emails qui reçevront le mail
			//$emails[] = 'dboutchou@hotmail.com';
			$emails[] = 'janesstraiteurafricain@yahoo.fr';
			$emails[] = Input::get('email');
			
			// Send the email with the contactemail view, the user input
			Mail::send('emails.livredor_email', $postData, function($message) use ($emails) {

			   $message->to($emails,'Janess Traiteur Africain')->subject('Janess Traiteur Africain - Contact');
		   });

			
			// Specify a route to go to after the message is sent to provide the user feedback
		   return View::make('comment_envoye')->with($postData);
		}
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showToDashborad()
	{
		return View::make('dashboard.comments_livre_dor')->with('comments', Comments::all());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
