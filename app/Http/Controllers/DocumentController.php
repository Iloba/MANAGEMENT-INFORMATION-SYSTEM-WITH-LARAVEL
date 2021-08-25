<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::latest()->get();

        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Request
        $request->validate([

            'document' => ['required'],
            'data' => ['required', 'max:255', 'string'],
           
        ]);

        //Upload Document
        if($request->has('document')){
           
            $file = $request->document->getClientOriginalName();

            try {
                $request->document->storeAs('document', $file, 'public_uploads');
            } catch (Exception $error) {
                return back()->with('errors', 'Could not upload Document, please Try again');
            }
        }

        Document::create([

            'document' => $file,
            'name' => $request->data
        ]); 

        return redirect()->route('document.index')->with('success', 'Document Upload Successfully');
    }


 
    public function destroy($id)
    {
        $document = Document::find($id);

        Storage::delete('public/uploads/documents/'.$document);

        $document->delete();

        return back()->with('success', 'Operation Successful');
    }
}
