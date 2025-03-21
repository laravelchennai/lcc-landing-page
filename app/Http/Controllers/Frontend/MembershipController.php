<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TechnologiesEnum;
use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $technologies = TechnologiesEnum::values();

        $options = array_map(fn($tech) => ucfirst($tech), $technologies);

        return view('frontend.membership-signup')
            ->with('technologies', $options);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:memberships,email',
            'phone' => 'required|string|max:20',
            'current_company' => 'nullable|string|max:255',
            'years_of_experience' => 'required|string',
            'technologies' => 'required|min:1',
            'file_path' => 'required|string',
            'is_available_freelance' => 'boolean',
            'receive_meetup_info' => 'boolean',
            'is_speaker' => 'boolean',
            'is_volunteer' => 'boolean',
        ]);

        $validated['technologies'] = explode(',', $validated['technologies']);

        $membership = Membership::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'data' => [
                'phone' => $validated['phone'],
                'current_company' => $validated['current_company'],
                'years_of_experience' => $validated['years_of_experience'],
                'technologies' => $validated['technologies'],
                'profile_picture' => $validated['file_path'],
                'is_available_freelance' => $validated['is_available_freelance'] ?? false,
                'receive_meetup_info' => $validated['receive_meetup_info'] ?? false,
                'is_speaker' => $validated['is_speaker'] ?? false,
                'is_volunteer' => $validated['is_volunteer'] ?? false,
            ]
        ]);


        return redirect()
           ->back()
            ->with('success', 'Sari, membership request send aayiduchu... ippo admin paarthu solluvaanga!');
    }
}
