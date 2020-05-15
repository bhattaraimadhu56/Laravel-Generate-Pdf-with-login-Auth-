<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
use PDF;

class CrudsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $data = Crud::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'address'     =>  'required',
            'image'         =>  'required|image|max:2048',
             'desc'          =>  'required|min:10'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'address'     =>  $request->address,
            'image'            =>   $new_name,
             'desc'        =>   $request->desc,
        );

        Crud::create($form_data);

        return redirect('crud')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $data = Crud::findOrFail($id);
    //     return view('view', compact('data'));
    // }




    public function show($id)
    {
        $data = Crud::findOrFail($id);
      return view('view', compact('data'));
      
    }
    public function downloadPdf($id)
    {
        $data = Crud::findOrFail($id);
    //   return view('view', compact('data'));
      // $pdf = PDF::loadView('view', ['data' => $data]);
    //   loadView('viewName ', compact('data'));
       $pdf = PDF::loadView('generatePdf', compact('data'));
        // just genertate randeom name for pdf
       $any_name = 'madhu___'.date('Y-m-d H:i:s').'____'.rand();  
        return $pdf->download($any_name.'.pdf');
        // return $pdf->download('madhu.pdf');
        // return $pdf->stream('madhu.pdf');
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
           

            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'address'     =>  'required',
                'image'         =>  'required|image|max:2048',
                 'desc'         =>'required'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'address'     =>  'required',
                // Condition with No images so  No need to validate 
                'desc'         =>'required'
            ]);
        }

        $form_data = array(
            'first_name'    =>  $request->first_name,
            'last_name'     =>  $request->last_name,
            'address'     =>  $request->address,
            'image'         =>  $image_name,
            'desc'          =>$request->desc
        );

        Crud::whereId($id)->update($form_data);
    
        return redirect('crud')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('crud')->with('success', 'Data is successfully deleted');
    }
}
