<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $nama      = $request->nama;
        $email     = $request->email;
        $pertanyan= $request->pertanyaan;

       $pesan = "Terimakasih {$nama} ! Pertanyaan Anda : '{$pertanyan}' akan segera direspon melalui email {$email}";

        // return redirect()->route('home');


        // return view('home-question-respon', $data);


        // return redirect()->route('home')->with('info', 'Terimakasih ,
        //                                         pertanyaan anda telah terkirim' );


        return redirect()->back()->with('info', $pesan);


        // return redirect()->away('https://pcr.ac.id');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = [
            'nama'       => $nama,
            'email'      => $email,
            'pertanyaan' => $pertanyan,
        ];


        return view('home-question-respon', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
