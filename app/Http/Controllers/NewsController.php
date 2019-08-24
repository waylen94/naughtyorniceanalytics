<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$news = News::with("user")->paginate(5);
		return view('pages.news&tips', compact('news'));
	}

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

	public function create(News $news)
	{
		return view('news.create_and_edit', compact('news'));
	}

	public function store(NewsRequest $request, News $news, ImageUploadHandler $uploader)
	{
	    
	    $data = $request->all();
		$news->fill($data);
		$news->user_id = Auth::id();
		if ($request->image) {
		    $result = $uploader->save($request->image, 'image', $news->id);
		    if ($result) {
		        $data['avatar'] = $result['path'];
		    }
		}
		$news->save();
		return redirect()->route('news.show', $news->id)->with('message', 'Created successfully.');
	}

	public function edit(News $news)
	{
        $this->authorize('update', $news);
		return view('news.create_and_edit', compact('news'));
	}

	public function update(NewsRequest $request, News $news, ImageUploadHandler $uploader)
	{
		$this->authorize('update', $news);
		
		$data = $request->all();
		if ($request->image) {
		    $result = $uploader->save($request->image, 'image', $news->id);
		    if ($result) {
		        $data['avatar'] = $result['path'];
		    }
		}
		$news->update($data);
		return redirect()->route('news.show', $news->id)->with('message', 'Updated successfully.');
	}

	public function destroy(News $news)
	{
		$this->authorize('destroy', $news);
		$news->delete();

		return redirect()->route('news.index')->with('message', 'Deleted successfully.');
	}
	
	
	public function uploadImage(Request $request, ImageUploadHandler $uploader)
	{
	    // initializing file uploading fialure
	    $data = [
	        'success'   => false,
	        'msg'       => 'uplaoding failure!',
	        'file_path' => ''
	    ];
	    // determine whether there is file uploading
	    if ($file = $request->upload_file) {
	        // store the image to server
	        $result = $uploader->save($request->upload_file, 'topics', Auth::id(), 1024);
	        // if image stored properly
	        if ($result) {
	            $data['file_path'] = $result['path'];
	            $data['msg']       = "uploading success!";
	            $data['success']   = true;
	        }
	    }
	    return $data;
	}

}