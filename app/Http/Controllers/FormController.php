<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales_executive;
use App\Models\district;
use App\Models\municipality_vdc;
use App\Models\option;
use App\Models\finalized_option;
use App\Models\color;
use App\Models\brand;
use App\Models\form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $executives = sales_executive::all();
         $districts = district::all();
         $municipality_vdcs = municipality_vdc::all();
         $options = option::all();
         $finalized_options = finalized_option::all();
         $colors = color::all();
         $brands = brand::all();
        

        return view('form',[
            'executives' => $executives,
            'districts' =>$districts,
            'municipality_vdcs' =>$municipality_vdcs,
            'options' =>$options,
            'finalized_options' =>$finalized_options,
            'colors' =>$colors,
            'brands' =>$brands,    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //  dd($request->input('status'));

        if($request->input('source_of_enquiry')!=null){
        $soe=serialize($request->input('source_of_enquiry'));}
        else{
            $soe=$request->input('source_of_enquiry');
        }

        if($request->input('showroom')!=null){
            $showroom=serialize($request->input('showroom'));
        }else{
            $showroom=$request->input('showroom');
        }

        if($request->input('product')!=null){
            $product=serialize($request->input('product'));
        }else{
            $product=$request->input('product');
        }

        if($request->input('followup_date')!=null){
            $followup_date = serialize($request->input('followup_date'));
        }else{
            $followup_date = $request->input('followup_date');
        }
        if($request->input('voice_of_customer')!=null){
            $voice_of_customer = serialize($request->input('voice_of_customer'));
        }else{
            $voice_of_customer = $request->input('voice_of_customer');
        }
        if($request->input('next_contact_date')!=null){
            $next_contact_date = serialize($request->input('next_contact_date'));
        }else{  
            $next_contact_date = $request->input('next_contact_date');
        }

        // dd($followup_date.$voice_of_customer.$next_contact_date);
        
        $form =form::create([
            'ref_no'=>$request->input('ref_no'),
            'date'=>$request->input('form_date'),
            'sales_executive'=>$request->input('sales_executive'),
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname'),
            'district'=>$request->input('district'),
            'municipality_vdc'=>$request->input('municipality_vdc'),
            'ward'=>$request->input('ward'),
            'tole'=>$request->input('tole'),
            'contact_no'=>$request->input('contact_no'),
            'occupation'=>$request->input('occupation'),
            'email'=>$request->input('email'),            
            'source_of_enquiry'=>$soe,
            'soe_specify'=>$request->input('soe_specify_text'),
            'intrested_model'=>$request->input('intrested_model'),
            'option'=>$request->input('option'),
            'finalized_option'=>$request->input('finalized_option'),
            'soe_color'=>$request->input('soe_color'),
            'showroom'=>$showroom,
            'showroom_specify'=>$request->input('soe_specify_text'),
            'product'=>$product,
            'product_specify'=>$request->input('specify_product_text'),
            'make'=>$request->input('make'),
            'model'=>$request->input('model'),
            'mfg_years'=>$request->input('mfg'),
            'exchange_color'=>$request->input('exchange_color'),
            'kms'=>$request->input('kms'),
            'expected_price'=>$request->input('expected_price'),
            'nature_of_visit'=>$request->input('nature_of_visit'),
            'status'=>$request->input('status'),
            'followup_date'=>$followup_date,
            'voice_of_customer'=>$voice_of_customer,
            'next_contact_date'=>$next_contact_date,
            'lost_to_competitor_brand'=>$request->input('lost_to_competitor_brand'),
            'lost_to_codealer'=>$request->input('lost_to_codealer'),
            'finance_problem'=>$request->input('finance_problem'),
            'Buying_scheduled_later'=>$request->input('Buying_scheduled_later'),
            'false_enquiry'=>$request->input('false_enquiry'),
            'referral'=>$request->input('referral'),
        ]);

         return redirect('view');
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
        // dd($id);
        $executives = sales_executive::all();
         $districts = district::all();
         $municipality_vdcs = municipality_vdc::all();
         $options = option::all();
         $finalized_options = finalized_option::all();
         $colors = color::all();
         $brands = brand::all();
        
        $form =Form::find($id);
           
        return view('edit',[
            'executives' => $executives,
            'districts' =>$districts,
            'municipality_vdcs' =>$municipality_vdcs,
            'options' =>$options,
            'finalized_options' =>$finalized_options,
            'colors' =>$colors,
            'brands' =>$brands,    
        ])->with('form' ,$form);
        
        
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
        if($request->input('source_of_enquiry')!=null){
            $soe=serialize($request->input('source_of_enquiry'));}
            else{
                $soe=$request->input('source_of_enquiry');
            }
    
            if($request->input('showroom')!=null){
                $showroom=serialize($request->input('showroom'));}
                else{
                    $showroom=$request->input('showroom');
                }
    
            if($request->input('product')!=null){
                $product=serialize($request->input('product'));}
                else{
                    $product=$request->input('product');
                }
            
            if($request->input('followup_date')!=null){
                $followup_date = serialize($request->input('followup_date'));
            }else{
                $followup_date = $request->input('followup_date');
            }
            if($request->input('voice_of_customer')!=null){
                $voice_of_customer = serialize($request->input('voice_of_customer'));
            }else{
                $voice_of_customer = $request->input('voice_of_customer');
            }
            if($request->input('next_contact_date')!=null){
                $next_contact_date = serialize($request->input('next_contact_date'));
            }else{  
                $next_contact_date = $request->input('next_contact_date');
            }

            // dd($followup_date .$voice_of_customer . $next_contact_date );
        $form = Form::where('id',$id)
        ->update( [
            'ref_no'=>$request->input('ref_no'),
            'date'=>$request->input('form_date'),
            'sales_executive'=>$request->input('sales_executive'),
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname'),
            'district'=>$request->input('district'),
            'municipality_vdc'=>$request->input('municipality_vdc'),
            'ward'=>$request->input('ward'),
            'tole'=>$request->input('tole'),
            'contact_no'=>$request->input('contact_no'),
            'occupation'=>$request->input('occupation'),
            'email'=>$request->input('email'),            
            'source_of_enquiry'=>$soe,
            'soe_specify'=>$request->input('soe_specify_text'),
            'intrested_model'=>$request->input('intrested_model'),
            'option'=>$request->input('option'),
            'finalized_option'=>$request->input('finalized_option'),
            'soe_color'=>$request->input('soe_color'),
            'showroom'=>$showroom,
            'showroom_specify'=>$request->input('soe_specify_text'),
            'product'=>$product,
            'product_specify'=>$request->input('specify_product_text'),
            'make'=>$request->input('make'),
            'model'=>$request->input('model'),
            'mfg_years'=>$request->input('mfg'),
            'exchange_color'=>$request->input('exchange_color'),
            'kms'=>$request->input('kms'),
            'expected_price'=>$request->input('expected_price'),
            'nature_of_visit'=>$request->input('nature_of_visit'),
            'status'=>$request->input('status'),
            'followup_date'=>$followup_date,
            'voice_of_customer'=>$voice_of_customer,
            'next_contact_date'=>$next_contact_date,
            'lost_to_competitor_brand'=>$request->input('lost_to_competitor_brand'),
            'lost_to_codealer'=>$request->input('lost_to_codealer'),
            'finance_problem'=>$request->input('finance_problem'),
            'Buying_scheduled_later'=>$request->input('Buying_scheduled_later'),
            'false_enquiry'=>$request->input('false_enquiry'),
            'referral'=>$request->input('referral')
        ]);

        return redirect('view');
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

    public function view(){

         $forms = Form::all(); 
        

         return view('view',[
            'forms' => $forms]);
        
    }

    public function print($id){
      
       $form =Form::find($id);
        //   dd($form);
       
       return view('print')->with('form' ,$form);
       
    }

}



