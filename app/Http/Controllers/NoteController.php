<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
class NoteController extends Controller
{
    //    
    public function index(){
        //ambil semua dari database lalu disimpan ke variabel "notes
        $notes = Note::all();
        // dd($notes);
        return view('index', ['notes'=>$notes]);

    }

    public function addNote(){
        return view('add-notes');
    }

    public function editNote(){
        return view('edit-notes');
    }

    public function createNote(Request $request){
        // dd($request);
        Note::create([
            //nama ini(down, kuning) sesuai dengan yang Models > Task > $fillable
            // kuning = key 
            'name' => $request->name,
            'quantity'=> $request->quantity
            // title details priority, itu datang dari 'name' di form html views>add.task.blade.php
        ]);

        return redirect('/'); // stelah submit form, bakal balik ke task awal
    }
}
