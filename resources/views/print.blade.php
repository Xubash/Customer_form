<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>


<body>
    <div class="container">   
        <header class="py-2 border-bottom d-flex align-items-center">
            <div class=" mr-4"><img src= "{{ asset('images/MentorLogo.png')}}" width = 120px height =60px > </div>
            <h3>Company Name</h3>
            
        </header>
    </div>

    <div class="container mt-4 Report">
        <table class="table-bordered" id="cust_form">
            <tr>
                <td>Ref No: {{ $form->ref_no }}</td> 
                <td rowspan="2" colspan="4" class="text-center font-weight-bold " style="font-size:30px">Customer Information</td>
                <td rowspan="3"><img src= "{{ asset('images/MentorLogo.png')}}" width = 120px height =60px ></td>  
  
            </tr>
            <tr>
                <td>SE # </td>   
            </tr>
            
            <tr>
                <td colspan="2">Date : {{ $form->date }} </td>   
                <td colspan="3">Executive Name : {{ $form->sales_executive }}</td>  
            </tr>
            <tr>
                <td >Customer Name </td>   
                <td colspan="4">{{ $form->fname }} {{ $form->lname }}</td>  
                <td colspan="4">Date</td>  
            </tr>
            <tr>
                <td >Address </td>   
                <td colspan="5"> {{ $form->tole }} , {{ $form->municipality_vdc }} - {{ $form->ward }} ,{{ $form->district }}</td>  
                   
            </tr>
            <tr>
                <td >Contact number</td>   
                <td colspan="5">{{ $form->contact_no }} </td>  
            </tr>
            <tr>
                <td >Occupation </td>   
                <td colspan="5">{{ $form->occupation }} </td>           
            </tr>

            <tr>
                <td >E-mail Id </td>   
                <td colspan="5">{{ $form->email }} </td>           
            </tr>
            <tr>
                <td colspan="6" class="text-center font-weight-bold" style="font-size:16px">Source of Enquiry (tick) </td> 
            </tr>

            <tr>
                <td  >Walk-In  @if(in_array("Walk In", unserialize($form->source_of_enquiry))) &#9745; @endif  </td>   
                <td>Social Media Ad  @if(in_array("Social Media Ad", unserialize($form->source_of_enquiry))) &#9745; @endif </td>  
                <td rowspan="2">Event (Specify): @if(in_array("Event", unserialize($form->source_of_enquiry))) &#9745; @endif </td>  
                <td>Visit @if(in_array("Visit", unserialize($form->source_of_enquiry))) &#9745; @endif</td>  
                <td>Telephone calls @if(in_array("Telephone calls", unserialize($form->source_of_enquiry))) &#9745; @endif </td>  
                <td rowspan="2">Referral (Name)</td>  
              
            </tr>

            <tr>
                <td>Website @if(in_array("Website", unserialize($form->source_of_enquiry))) &#9745; @endif </td>   
                <td>FB Page (Non Ad) @if(in_array("FB Page (Non Ad)", unserialize($form->source_of_enquiry))) &#9745; @endif </td>  
                <td colspan="2">Others (Specify): @if(in_array("Others", unserialize($form->source_of_enquiry))) &#9745; @endif </td>  
            </tr>
            
            @if(in_array("Events", unserialize($form->source_of_enquiry)) || in_array("Others", unserialize($form->source_of_enquiry)))
            <tr>
                <td>Please specify</td> 
                <td colspan="5">{{ $form->soe_specify }}</td> 
            </tr>
            @endif

            <tr>
                <td rowspan="2" class="text-center">Interested Model <br> {{ $form->intrested_model }} </td>   
                <td rowspan="2" colspan="2" class="text-center">Options <br> {{ $form->option }}</td>   
                <td rowspan="2" colspan="2" class="text-center">Finalzed Option <br> {{ $form->finalized_option }}</td>   
                <td class="text-center">Color Preference </td>     
            </tr>
            <tr>
                <td class="text-center">{{ $form->soe_color }}</td>           
            </tr>
            <tr>
                <td colspan="6" class="text-center font-weight-bold" style="font-size:16px">How did Customer come to know about Showroom (tick)</td> 
            </tr>
            <tr>
                <td>Location @if(in_array("Location", unserialize($form->showroom))) &#9745; @endif </td>
                <td>Digital Campaign @if(in_array("Digital Campaign", unserialize($form->showroom))) &#9745; @endif </td>
                <td>Reference @if(in_array("Reference", unserialize($form->showroom))) &#9745; @endif </td>
                <td>Call/SMS @if(in_array("Call/SMS", unserialize($form->showroom))) &#9745; @endif </td>
                <td>Events @if(in_array("Events", unserialize($form->showroom))) &#9745; @endif </td>
                <td >Others @if(in_array("Others", unserialize($form->showroom))) &#9745; @endif </td>
            </tr>

            @if(in_array("Events", unserialize($form->showroom)) || in_array("Others", unserialize($form->showroom)))
            <tr>
                <td>Please specify</td> 
                <td colspan="5">{{ $form->showroom_specify }}</td> 
            </tr>
            @endif

            <tr>
                <td colspan="6" class="text-center font-weight-bold" style="font-size:16px">How did Customer come to know about Product (tick)</td> 
            </tr>
            <tr>
                <td>Showroom @if(in_array("Showroom", unserialize($form->product))) &#9745; @endif </td>
                <td>Digital Campaign @if(in_array("Digital Campaign", unserialize($form->product))) &#9745; @endif </td>
                <td>Reference @if(in_array("Reference", unserialize($form->product))) &#9745; @endif </td>
                <td>Call/SMS @if(in_array("Call/SMS", unserialize($form->product))) &#9745; @endif </td>
                <td>Events @if(in_array("Events", unserialize($form->product))) &#9745; @endif </td>
                <td rowspan="2">Others @if(in_array("Others", unserialize($form->product))) &#9745; @endif </td>
            </tr>

            <tr>
                <td>YouTube @if(in_array("YouTube", unserialize($form->product))) &#9745; @endif </td>
                <td>Service Center @if(in_array("Service Center", unserialize($form->product))) &#9745; @endif </td>
                <td>Road Presence @if(in_array("Road Presence", unserialize($form->product))) &#9745; @endif </td>
                <td>Abroad Launch @if(in_array("Abroad Launch", unserialize($form->product))) &#9745; @endif </td>
                <td>News/Ad @if(in_array("News/Ad", unserialize($form->product))) &#9745; @endif </td>  
            </tr>

            @if(in_array("Events", unserialize($form->product)) || in_array("Others", unserialize($form->product)))
            <tr>
                <td>Please specify</td> 
                <td colspan="5">{{ $form->product_specify }}</td> 
            </tr>
            @endif

            <tr>
                <td colspan="6" class="text-center font-weight-bold" style="font-size:18px">Exchange Details</td> 
            </tr>

            <tr>
                <td>Make</td>
                <td>{{ $form->make }}</td>
                <td>Model</td>
                <td>{{ $form->model }}</td>
                <td>Mfg Years:</td>
                <td >{{ $form->mfg_years }}</td>
            </tr>

            <tr>
                <td>Color</td>
                <td>{{ $form->exchange_color }}</td>
                <td>Kms</td>
                <td>{{ $form->kms }}</td>
                <td>Expected Price</td>
                <td >{{ $form->expected_price }}</td>
            </tr>

            <tr>
                <td colspan="6" class="text-center font-weight-bold" style="font-size:18px">Follow up details</td> 
            </tr>
            <tr>
                <td>Date</td>
                <td colspan="4" class="text-center">Voice of customer</td>
                <td>Next Contact Date</td>    
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td colspan="4" class="text-center">&nbsp;</td>
                <td>&nbsp;</td>    
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td colspan="4" class="text-center">&nbsp;</td>
                <td>&nbsp;</td>    
            </tr>

            <tr>
                <td class="font-weight-bold">Nature of Visit</td>
                <td colspan="2"> Genuine @if( $form->nature_of_visit=="Genuine" ) &#9745;@endif</td>
                
                <td colspan="2">General Curiosity @if( $form->nature_of_visit=="General Curiosity" ) &#9745;@endif</td>
               
            </tr>

            <tr>
                <td class="font-weight-bold">Status</td>
                <td>Active  @if( $form->status=="Active" ) &#9745;@endif</td>             
                <td >Closed  @if( $form->status=="Closed" ) &#9745;@endif</td>
                <td>Customer  @if( $form->status=="Customer" ) &#9745;@endif</td>
                <td colspan="2">&nbsp;</td>            
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            
            @if( $form->status=="Closed" ) 
            <tr>
                <td colspan="6" class="text-center">Lost Case Analysis (Detail)</td> 
            </tr>

            <tr>
                <td colspan="2" class="text-center">Lost to Competitior Brand</td>
                <td colspan="4">{{ $form->lost_to_competitor_brand }}</td>       
            </tr>
            <tr>
                <td colspan="2" class="text-center">Lost to Co-Dealer</td>
                <td colspan="4">{{ $form->lost_to_codealer }}</td>       
            </tr>
            <tr>
                <td colspan="2" class="text-center">Finance problem</td>
                <td colspan="4">{{ $form->finance_problem }}</td>       
            </tr>
            <tr>
                <td colspan="2" class="text-center">Buying Scheduled Later</td>
                <td colspan="4">{{ $form->Buying_scheduled_later }}</td>       
            </tr>
            <tr>
                <td colspan="2" class="text-center">False Enquiry</td>
                <td colspan="4">{{ $form->false_enquiry }}</td>       
            </tr>
            @endif
        </table>
    </div>

    <div class="text-center mt-4">
        <button class="add-field btn btn-success" id="print"> Print </button> 
  </div>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="{{ asset('js/printThis.js')}}" ></script>
    <script src="{{ asset('js/script.js')}}" ></script>
    <script>
        $('#print').click(function(){
           $('.Report').printThis({
            importCSS: true,                // import parent page css
            importStyle: true,             // import style tags
            loadCSS: "css/style.css" }
           );
       })
   </script>

</body>

</html>
.