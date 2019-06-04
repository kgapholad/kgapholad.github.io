<?php

namespace App\Http\Controllers;

use App\Ussds;
use Illuminate\Http\Request;
//Read submitted form input values
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\PaginationServiceProvider;

class UssdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $call_url = "http://196.40.112.155:8080/mngrouting/action/usedcodes/120";
        //-------------USSD --To get a list of all shortcodes allocated for a given base shortcode you just need to send an HTTP POST --------\\
	$param = array(
	);
     //create curl resource 
        $ch = curl_init(); 
        // set url 
        curl_setopt($ch, CURLOPT_URL, $call_url);
        //Create a POST a String a string 
	curl_setopt($ch, CURLOPT_POST, 1);
	//return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	// Set POSTFIELDS //
	curl_setopt($ch, CURLOPT_POSTFIELDS,$param);	
        // $output_data contains the output string 
        $output_data = curl_exec($ch); 

    #$ussds = simplexml_load_string($output_data); 
$output='<?xml version="1.0"?>'.$output_data;
    #$ussds = $output::paginate(3);
    #echo $output;
    $ussds = simplexml_load_string($output);
   #$xpath = $ussds->xpath('//Message');
   $count = count($ussds);
  # echo "Con:".$count;
    #$xml = new SimpleXMLElement($ussds);
        return view('ussds')->with('ussds', $ussds); 
        #return view('ussds', ['ussds ' => $ussds ]);
		#return view('profile');
    }
    public function creater()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
       # $low = Input::get('low');
       # $high = Input::get('high');
       # $route = Input::get('route');
       # $charge = Input::get('charge');
       # $enddate = Input::get('endate');
       # $enddate = date( 'Y-m-d', strtotime($enddate ));
       # $customerNum = Input::get('cusnum');
       $request->validate([
        'low' => 'required',
        'high' => 'required',
        'route' => 'required',
        'charge' => 'required',
        'enddate' => 'required',
        'cusnum' => 'required',
    ]);
        $low = $request->low;
        $high = $request->high;
        $route = $request->route;
        $charge = $request->charge;
        $enddate = $request->enddate;
        $enddate = date( 'Y-m-d', strtotime($enddate ));
        $customerNum = $request->cusnum;
        echo "Requested Low:".$request->low." - High:".$request->high;
       /* 
        $call_url = "http://196.40.112.155:8080/mngrouting/action/codeavailable/".$low;
        $ch = curl_init(); 
        // set url 
        curl_setopt($ch, CURLOPT_URL, $call_url);
        //Create a POST a String a string 
        curl_setopt($ch, CURLOPT_POST, 1);
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // $output_data contains the output string 
        $output_data = curl_exec($ch); 
        #print_r($output_data);
        $xml = simplexml_load_string($output_data); 
            $status = $xml->status;*/
            $status = "";
            echo "Stats:".$status;
        if($status == 'notAvailable')
        {#---- if the ussd was Unsuccessfully ---
           # return view('failed');
        return redirect()->route('create', ['message' => 'Failed']);
       }else{
        #---- if the ussd was successfully created ---
        //-------- Adding New USSDs -------\\
       # echo "<br>Low:".$low." - High:".$high;
        # --- URL function ---#    
      /*  $url='http://196.40.112.155:8080/mngrouting/action/addCode';
        /* $param = array(
         #"connectionStringLo"=>$low,
         #"connectionStringHi"=>$high,
         //"routeTo"=>$route,
         //"assignTo"=>$enddate,
         //"customerNum"=>$customerNum,
         //"chargeCode"=>$charge
         );*/
           //---- Adding USSD -----\\
        /*  $param ="<?xml version='1.0' encoding='utf-8'?><Message>
        <connectionStringLo>".$low."</connectionStringLo>
        <connectionStringHi>".$high."</connectionStringHi>
        <routeTo>".$route."</routeTo>
        <assignTo>".$enddate."</assignTo>
        <customerNum>".$customerNum."</customerNum> 
        <chargeCode>".$charge."</chargeCode>         
        </Message>";

            $header = array(
            "Content-type: application/xml",
            "Content-length: " . strlen($param),
            "Connection: close",
            );
            $curl = curl_init(); 
            curl_setopt($curl, CURLOPT_URL,$url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $param);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
            $response = curl_exec($curl); 
            $results = simplexml_load_string($response);*/
           #---- if the ussd was successfully created ---
           #$message=array(message);
           return redirect()->route('create', ['message' => 'success']);
           #return view('success');
        }
            #return Redirect::back()->with('message','Your code has been created'); 
            #---- if the ussd was Unsuccessfully --- 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ussds  $ussds
     * @return \Illuminate\Http\Response
     */
    public function show($ussds)
    {
        //
        #$ussds = Ussds::all(); 
        echo $ussds;
        return view('view'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ussds  $ussds
     * @return \Illuminate\Http\Response
     */
    public function edit(Ussds $ussds)
    {
        //-- EDIT--\\
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ussds  $ussds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ussds $ussds)
    {
        //--- UPDATE --\\
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ussds  $ussds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ussds $ussds)
    {
        //--------Delete the ussd --------\\

    }
}
