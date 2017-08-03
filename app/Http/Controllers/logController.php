<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
class logController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        //$logs = Log::all();
       // $logs = DB::table('blog_post')->orderBy('id');
        //  $logs = DB::table('blog_post')->orderBy('id','DESC')->paginate(20);
        // return view('log.index',['logs' => $logs]);


        $search = \Request::get('search');
        $date = \Request::get('date');
      
          $logs = Log::whereDate('created_at', $date)
                 ->orwhere('how','like','%'.$search.'%')
                 ->orwhere('title','like','%'.$search.'%')
                 ->orderBy('id','DESC')->paginate(20);
          
              
                return view('log.index',['logs' => $logs]);
     


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new
        return view('log.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        
        //validate
        $this->validate($request,[
            'type'=> 'required',
            'title'=> 'required',
            'how'=> 'required',

        ]);
        //Log::create($request->all());
        //Create New Data
        $log = new Log;
        $log->type = $request->type;
        $log->title = $request->title;
        $log->how = $request->how;
        $log->save();
       return redirect()->route('log.index')->with('message','Item has been Add Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $log = Log::findOrFail($id);
        return view('log.edit',compact('log'));



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
        //
      $log = Log::findOrFail($id);
        $log->type = $request->type;
        $log->title = $request->title;
        $log->how = $request->how;
         $log->save();
       return redirect()->route('log.index')->with('message','Item has been Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $log = Log::findOrFail($id);
        $log->delete();
        return redirect()->route('log.index')->with('message','Item has been Deleted');
    }

    public function back()
    {
        return back();
    }
}
