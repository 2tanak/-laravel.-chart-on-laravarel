<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\NewEventAded;

class ChatController extends Controller
{
  protected $vars = array();
	  public function __construct() {
    	$this->template = env('THEME2').'.pages.chat';
			
	}
	 
	 
    public function index()
    {
		
		 //$message = Message::all();
         $content = view(env('THEME2').'.chat')->render();
		 $this->vars = array_add($this->vars,'content', $content);
		 return view($this->template)->with($this->vars);
	     //return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		return [
		'labels'=>['январь','февраль','март','апрель','май'],
		'datasets' => array([
		  'label' => 'продам',
		  'backgroundColor' => 'red',
		  'data' => [15000,5000,10000,30000],
		])
		];
	   
	   
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
