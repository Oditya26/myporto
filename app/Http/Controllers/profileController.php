<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    function index() {
        return view('dashboard.profile.index');
    }

    function update(Request $request) {
        $request->validate([
            '_foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            '_email' => 'nullable|email'
        ], [
            '_foto.image' => 'File must be an image',
            '_foto.mimes' => 'Only can upload JPEG, JPG, PNG, and GIF',
            '_email.email' => 'Invalid email format!'
        ]);

        $croppedImage = $request->input('_cropped_foto');
        if ($croppedImage) {
            $foto_lama = get_meta_value('_foto');
            if ($foto_lama) {
                File::delete(public_path('foto').'/'.$foto_lama);
            }

            $matches = [];
            preg_match('/^data:(image\/(png|jpeg|jpg|gif));base64,/', $croppedImage, $matches);
            $ext = isset($matches[2]) ? $matches[2] : 'png';
            if ($ext === 'jpg') {
                $ext = 'jpeg';
            }

            $foto_baru = date('ymdhis').'.'.$ext;
            $foto_path = public_path('foto').'/'.$foto_baru;
            $data = substr($croppedImage, strpos($croppedImage, ',') + 1);
            $binary = base64_decode($data, true);
            if ($binary !== false) {
                File::ensureDirectoryExists(public_path('foto'));
                file_put_contents($foto_path, $binary);
                metadata::updateOrCreate(['meta_key'=>'_foto'], ['meta_value'=>$foto_baru]);
            }
        } elseif($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis').".$foto_ekstensi";
            $foto_path = public_path('foto').'/'.$foto_baru;

            $foto_lama = get_meta_value('_foto');
            if ($foto_lama) {
                File::delete(public_path('foto').'/'.$foto_lama);
            }

            File::ensureDirectoryExists(public_path('foto'));
            $foto_file->move(public_path('foto'), $foto_baru);
            metadata::updateOrCreate(['meta_key'=>'_foto'], ['meta_value'=>$foto_baru]);
        }

        $email = $request->filled('_email') ? $request->input('_email') : (auth()->check() ? auth()->user()->email : null);
        if ($email) {
            metadata::updateOrCreate(['meta_key'=>'_email'], ['meta_value' => $email]);
        }

        metadata::updateOrCreate(['meta_key'=>'_kota'], ['meta_value' => $request->_kota]);
        metadata::updateOrCreate(['meta_key'=>'_provinsi'], ['meta_value' => $request->_provinsi]);
        metadata::updateOrCreate(['meta_key'=>'_nohp'], ['meta_value' => $request->_nohp]);

        metadata::updateOrCreate(['meta_key'=>'_facebook'], ['meta_value' => $request->_facebook]);
        metadata::updateOrCreate(['meta_key'=>'_twitter'], ['meta_value' => $request->_twitter]);
        metadata::updateOrCreate(['meta_key'=>'_linkedin'], ['meta_value' => $request->_linkedin]);
        metadata::updateOrCreate(['meta_key'=>'_github'], ['meta_value' => $request->_github]);
        metadata::updateOrCreate(['meta_key'=>'_instagram'], ['meta_value' => $request->_instagram]);

        return redirect()->route('profile.index')->with('success', 'Update Data Profile Successfully!');
    }
}
