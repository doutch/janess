<?php


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        foreach (File::allFiles(public_path() . '/img/galerie_photo/thumbs') as $file) 
		{
			if(File::extension($file) == 'jpg')
				$tabImg[] = $file->getRelativePathName();
		
		}
		
		return View::make('photos')->with('tabImg',$tabImg);
    }
}
