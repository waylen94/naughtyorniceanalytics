<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;

class HotelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$hotels = Hotel::paginate();
		return view('hotels.index', compact('hotels'));
	}

    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

	public function create(Hotel $hotel)
	{
		return view('hotels.create_and_edit', compact('hotel'));
	}

	public function store(HotelRequest $request)
	{
		do {
			//generate a random string using Laravel's str_random helper
			$token = str_random();
		} //check if the token already exists and if it does, try again
		while (Hotel::where('invitation_code', $token)->first());

		$hotel->invitation_code = $token;
		$hotel = Hotel::create($request->all());
	
		return redirect()->route('hotels.show', $hotel->id)->with('message', 'Created successfully.');
	}

	public function edit(Hotel $hotel)
	{
        $this->authorize('update', $hotel);
		return view('hotels.create_and_edit', compact('hotel'));
	}

	public function update(HotelRequest $request, Hotel $hotel)
	{
		$this->authorize('update', $hotel);
		$hotel->update($request->all());

		return redirect()->route('hotels.show', $hotel->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Hotel $hotel)
	{
		$this->authorize('destroy', $hotel);
		$hotel->delete();

		return redirect()->route('hotels.index')->with('message', 'Deleted successfully.');
	}


}