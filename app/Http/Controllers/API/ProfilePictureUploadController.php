<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilePictureUploadController extends Controller
{
    public function upload_picture(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:1024',
            ]);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '-' . $file->getClientOriginalName();
                $filePath = $file->storeAs('user_profiles', $fileName, 'public');

                return response()->json(['path' => $filePath], 200);
            }

            return response()->json(['error' => 'File upload failed.'], 400);

        } catch (\Exception $e) {

            return response()->json(['error' => 'An error occurred. Please try again later.'], 500);
        }
    }
}
