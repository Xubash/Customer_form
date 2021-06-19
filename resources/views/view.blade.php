<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
    <title>Customer Form</title>
</head>
<body>  
    <div class="container">   
        <header class="py-2 border-bottom d-flex align-items-center">
            <div class="mr-4">
                <img src= "{{ asset('images/MentorLogo.png')}}" width = 120px height =60px >
            </div>
            <div class="ml-4">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="btn btn-md btn-outline-info" style="widht:500px;" href="/">Form</a>
                    </li>
                    
                    <li class="nav-item ml-4">
                        <a class="btn btn-md btn-outline-info" href="/view">View</a>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    
    <div class="container">
    <h3 class="text-center mt-4"> Customer Details</h2>
    <div class="table-responsive">
        <table class=" styled-table table-striped table-hover " id="datatable_view"> 
            <thead>
            <tr class=""> 
            <th colspan="2" class="text-center">Action</th>
            <th>S.N</th>
            <th>Ref No</th>
            <th>Date</th>
            <th>Sales Executive</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>District</th>
            <th>Municipality/VDC</th>
            <th>Ward</th>
            <th>Tole</th>
            <th>Contact No</th>
            <th>Occupation</th>
            <th>Email ID</th>
            <th>SOURCE_OF_ENQUIRY </th>
            <th>SOE_SPECIFY</th>
            <th>REFERRAL</th>
            <th>INTRESTED_MODEL</th>
            <th>OPTION</th>
            <th>FINALIZED_OPTION</th>
            <th>SOE_COLOR</th>
            <th>SHOWROOM</th>
            <th>SHOWROOM_SPECIFY</th>
            <th>PRODUCT</th>
            <th>PRODUCT_SPECIFY</th>
            <th>MAKE</th>
            <th>MODEL</th>
            <th>MFG_YEARS</th>
            <th>EXCHANGE_COLOR</th>
            <th>KMS</th>
            <th>EXPECTED_PRICE</th>     
            <th>NATURE_OF_VISIT</th>
            <th>STATUS</th>         
            <th>LOST_TO_COMPETITOR_BRAND</th>
            <th>LOST_TO_CODEALER</th>
            <th>FINANCE_PROBLEM</th>
            <th>BUYING_SCHEDULED_LATER</th>
            <th>FALSE_ENQUIRY</th>
            <th>FOLLOWUP_DATE</th>
            <th>VOICE_OF_CUSTOMER</th>
            <th>NEXT_CONTACT_DATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $forms)
            <tr> 
            <td><a class="btn btn-sm btn-warning" href="/{{ $forms->id }}/edit"> Edit </a></td>
            <td><a class="btn btn-sm btn-info" href="/{{ $forms->id }}/print"> Print </a></td>
            <td>{{ $forms->id }}</td> 
            <td>{{ $forms->ref_no }}</td> 
            <td>{{ $forms->date }}</td>
            <td>{{ $forms->sales_executive }}</td> 
            <td>{{ $forms->fname }}</td> 
            <td>{{ $forms->lname }}</td>
            <td>{{ $forms->district }}</td> 
            <td>{{ $forms->municipality_vdc }}</td> 
            <td>{{ $forms->ward }}</td>
            <td>{{ $forms->tole }}</td> 
            <td>{{ $forms->contact_no }}</td> 
            <td>{{ $forms->occupation }}</td>
            <td>{{ $forms->email }}</td> 
            
            @if (!is_null($forms->source_of_enquiry)&& $forms->source_of_enquiry!='')
            @php
               
               $soe=unserialize($forms->source_of_enquiry) ;            
            @endphp
            <td>
                <ol>
                    @foreach ($soe as $a)
                        <li>
                            {{ $a }}
                        </li>                        
                    @endforeach
                </ol>
            </td>   
            @endif          
            
            <td>{{ $forms->soe_specify}}</td> 
            <td>{{ $forms->referral}}</td> 
            <td>{{ $forms->intrested_model}}</td> 
            <td>{{ $forms->option}}</td> 
            <td>{{ $forms->finalized_option}}</td> 
            <td>{{ $forms->soe_color}}</td> 

            @if (!is_null($forms->showroom)&& $forms->showroom!='')
            @php
               
               $showroom=unserialize($forms->showroom) ;            
            @endphp
            <td>
                <ol>
                    @foreach ($showroom as $a)
                        <li>
                            {{ $a }}
                        </li>                        
                    @endforeach
                </ol>
            </td>   
            @endif 

            <td>{{ $forms->showroom_specify}}</td> 

            @if (!is_null($forms->product)&& $forms->product!='')
            @php
               
               $product=unserialize($forms->product) ;            
            @endphp
            <td>
                <ol>
                    @foreach ($product as $a)
                        <li>
                            {{ $a }}
                        </li>                        
                    @endforeach
                </ol>
            </td>   
            @endif

            
            <td>{{ $forms->product_specify}}</td> 
            <td>{{ $forms->make}}</td> 
            <td>{{ $forms->model}}</td> 
            <td>{{ $forms->mfg_years}}</td> 
            <td>{{ $forms->exchange_color}}</td> 
            <td>{{ $forms->kms}}</td> 
            <td>{{ $forms->expected_price}}</td>     
            <td>{{ $forms->nature_of_visit}}</td> 
            <td>{{ $forms->status}}</td>        
            <td>{{ $forms->lost_to_competitor_brand}}</td> 
            <td>{{ $forms->lost_to_codealer}}</td> 
            <td>{{ $forms->finance_problem}}</td> 
            <td>{{ $forms->Buying_scheduled_later}}</td> 
            <td>{{ $forms->false_enquiry}}</td> 

            @if (!is_null($forms->followup_date)&& $forms->followup_date!='')
            @php
               
               $followup_date=unserialize($forms->followup_date) ;            
            @endphp
            <td>
                <ol>
                    @foreach ($followup_date as $a)
                        <li>
                            {{ $a }}
                        </li>                        
                    @endforeach
                </ol>
            </td>   
            @endif 

            @if (!is_null($forms->voice_of_customer)&& $forms->voice_of_customer!='')
            @php
               
               $voice_of_customer=unserialize($forms->voice_of_customer) ;            
            @endphp
            <td>
                <ol>
                    @foreach ($voice_of_customer as $a)
                        <li>
                            {{ $a }}
                        </li>                        
                    @endforeach
                </ol>
            </td>   
            @endif 

            @if (!is_null($forms->next_contact_date)&& $forms->next_contact_date!='')
            @php
               
               $next_contact_date=unserialize($forms->next_contact_date) ;            
            @endphp
            <td>
                <ol>
                    @foreach ($next_contact_date as $a)
                        <li>
                            {{ $a }}
                        </li>                        
                    @endforeach
                </ol>
            </td>   
            @endif 
            </tr>    
            @endforeach
        </tbody> 
        </table>
        
    </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#datatable_view').DataTable();
        } );
    </script> 
</body>
</html>