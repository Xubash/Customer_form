<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>


<body>
        <form action ='/' method="POST">
            @csrf  
        <div class="container">   
            <header class="py-2 border-bottom d-flex align-items-center">
                <div class=" mr-4"><img src= "{{ asset('images/MentorLogo.png')}}" width = 120px height =60px > </div>
                <h3>Company Name</h3>
                
            </header>
        </div>
        <div class="container mt-2">
            <div class="d-flex mt-4">
                <div class="col-8 ">
                    <h4 class="text-right mr-4">Customer Information</h4>
                </div>
                <div class="d-flex justify-content-end col-4 ">
                    <div>
                        <label  class="form-label mr-2">Ref No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="ref_no">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end col-12 mt-2">
                <div>
                    <label for="Date" class="form-label mr-2"><span>Date</span> :</label>
                </div>
                <div>
                    <input type="date" class="form-control" name="form_date">
                </div>
            </div><br>

            <!-- Customer Information part -->
            <div class="d-flex justify-content-start mb-4 ">
                <div>
                    <label for="Sales Executive" class="form-label mr-2">Sales Executive:</label>
                </div>
                <div class="col-md-3">
                    <select class="custom-select" id="inputGroupSelect01" name="sales_executive">
                        <option selected>Choose ....</option >
                        @foreach($executives as $executives)
                        <option value="{{ $executives->executives }}" >
                            {{ $executives->executives }}
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row g-1" >
                     
                <div class="col-md-6">
                    <label for="First Name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="Last Name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname">
                </div>
        
                <div class="col-12">
                    <label class="form-label">Address</label>
                </div>
                <div class="col-md-3">
                    <label for="District" class="form-label"> District</label>
                    <select class="custom-select" id="district" name="district">
                        <option selected>Choose ....</option>
                        @foreach($districts as $districts)
                        <option value="{{ $districts->districts }}"  
                            >
                            {{ $districts->districts }}
                        @endforeach
                    </select>
                </div>
                <div class=" col-md-3">
                    <label for="Municipality/VDC" class="form-label">Municipality/VDC</label>
                    <select class="custom-select" id="Municipality_VDC" name="municipality_vdc">
                        <option selected>Choose ....</option>
                        @foreach($municipality_vdcs as $municipality_vdcs)
                        <option value="{{ $municipality_vdcs->municipality_vdc }}" >
                            {{ $municipality_vdcs->municipality_vdc }}
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="Ward" class="form-label">Ward</label>
                    <input type="text" class="form-control" id="ward" name="ward">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="inputPassword4" class="form-label">Tole</label>
                    <input type="text" class="form-control" id="Tole"  name="tole">
                </div>
                <div class="col-12 mb-2">
                    <label for="Contact No" class="form-label">Contact No</label>
                    <input type="text" class="form-control" id="Contact_No"  name="contact_no">
                </div>
                <div class="col-12 mb-2">
                    <label for="Occupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" id="Occupation" name="occupation">
                </div>
                <div class="col-12 mb-2">
                    <label for="Email ID" class="form-label">Email ID:</label>
                    <input type="email" class="form-control" id="Email_ID" name="email">
                </div>
            </div>


            <!-- Enquiry part starts -->

            <div class="text-center mt-4 mb-4 ">
                <h4>Source Of Enquiry</h4>
            </div>
            <div class="row">
            
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  value="Walk In" name="source_of_enquiry[]">
                    <label class="form-check-label" for="inlineCheckbox1">Walk In</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  value="Website" name="source_of_enquiry[]">
                    <label class="form-check-label" for="inlineCheckbox2">Website</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"  value="Social Media Ad" name="source_of_enquiry[]">
                    <label class="form-check-label" for="inlineCheckbox3">Social Media Ad</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input drop-right" type="checkbox" name="source_of_enquiry[]" 
                    onclick = "specify_check_soe()" id="events_soe"value="Events">
                    <label class="form-check-label " for="inlineCheckbox4">Events(specify)</label>
                </div>                   
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Telephne calls" name="source_of_enquiry[]" >
                    <label class="form-check-label" for="inlineCheckbox5">Telephne calls</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Visit" name="source_of_enquiry[]" >
                    <label class="form-check-label" for="inlineCheckbox6">Visit</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="FB page(Non Ad)" name="source_of_enquiry[]" >
                    <label class="form-check-label" for="inlineCheckbox7">FB page(Non Ad)</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="checkbox"
                    onclick = "specify_check_soe()"  name="source_of_enquiry[]" id="others_soe"value="Others" >
                    <label class="form-check-label" for="inlineCheckbox8">Others(specify)</label>
                </div>
                
            </div> 
            
            <div class=" form-check form-check-inline hideStatus"id = "specify">             
                <input type="text" placeholder ="Please specify here" class="form-control ml-2 mt-2 " 
                id="specify_text" name="soe_specify_text" style="width: 400px;">
            </div>           
            <br>
           

            {{-- <div class="form-floating" id="event">
                <textarea class="form-control" placeholder="Specify Event" id="specity_event"></textarea><br>
            </div>
            <div class="form-floating" id="others">
                <textarea class="form-control" placeholder="Specify Others" id="specify_others"></textarea><br>
            </div> --}}


            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">Interested Model</label>
                    <input type="text" class="form-control" id="intrested_model" name="intrested_model">

                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Option</label>
                    <select class="custom-select" id="Option" name="option">
                        <option selected>Choose...</option>
                        @foreach($options as $options)
                        <option value="{{ $options->options }}" >
                            {{ $options->options }}
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Finalized Option</label>
                    <select class="custom-select" id="finalized_option" name="finalized_option">
                        <option selected>Choose...</option>
                        @foreach($finalized_options as $finalized_options)
                        <option value="{{ $finalized_options->finalized_options }}" >
                            {{ $finalized_options->finalized_options }}
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Color Preference</label>
                    <select class="custom-select" id="color_preference" name="soe_color">
                        <option selected>Choose...</option>
                        @foreach($colors as $colors)
                        <option value="{{ $colors->colors }}" >
                            {{ $colors->colors }}
                        @endforeach

                    </select>
                </div>
            </div>


            <!-- showroom part starts -->

            <div class=" text-center mt-4 mb-4">
                <h4>How did Customer come to know about Showroom</h4>
            </div>
            <div class="row">
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="Location" value="Location" name="showroom[]">
                    <label class="form-check-label" for="Location">Location</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="digital_campaign" value="Digital Campaign" name="showroom[]"> 
                    <label class="form-check-label" for="digital_campaign">Digital Campaign</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="call_sms" value="Call/SMS" name="showroom[]">
                    <label class="form-check-label" for="call_sms">Call/SMS</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="events_showroom" 
                       onclick="specify_check_showroom()" value="Events" name="showroom[]">
                    <label class="form-check-label" for="Events">Events(specify)</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="others_showroom" 
                    onclick="specify_check_showroom()"  value="Others" name="showroom[]">
                    <label class="form-check-label" for="Others">Others(Specify)</label>
                </div>
            </div>
            

            <div class=" form-check form-check-inline hideStatus"id = "specify_showroom">             
                <input type="text" placeholder ="Please specify here" class="form-control ml-2 mt-2 " 
                id="specify_showroom_text" name="specify_showroom_text" style="width: 400px;">
            </div>           
            <br>

            <!-- products part starts -->

            <div class="text-center  ">
                <h4>How did Customer come to know about the product</h4>
            </div><br>
            <div class="row">
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="Showroom" value="Showroom" name="product[]">
                    <label class="form-check-label" for="Showroom">Showroom</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="digital_campaign1" value="Digital Campaign" name="product[]"> 
                    <label class="form-check-label" for="digital_campaign1">Digital Campaign</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="call_sms1" value="Call/SMS" name="product[]">
                    <label class="form-check-label" for="call_sms1">Call/SMS</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="events_product" 
                    onclick = "specify_check_product()"  value="Events" name="product[]">
                    <label class="form-check-label" for="Events1">Events(Specify)</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="Reference1" value="Reference" name="product[]">
                    <label class="form-check-label" for="Reference1">Reference</label>
                </div>
            </div>
            <div class="row">
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="Youtube" value="Youtube" name="product[]">
                    <label class="form-check-label" for="Youtube">Youtube</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="Service_Center" value="Service Center" name="product[]">
                    <label class="form-check-label" for="Service_Center">Service Center</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="News_Ads" value="News/Ads" name="product[]">
                    <label class="form-check-label" for="News_Ads">News/Ads</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="Abroad_Launch" value="Abroad Launch" name="product[]">
                    <label class="form-check-label" for="Abroad_Launch">Abroad Launch</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="checkbox" id="others_product" 
                    onclick = "specify_check_product()"  value="Others" name="product[]">
                    <label class="form-check-label">Others(Specify)</label>
                </div>

                <div class=" form-check form-check-inline hideStatus"id = "specify_product">             
                    <input type="text" placeholder ="Please specify here" class="form-control ml-2 mt-2 " 
                    id="specify_product_text" name="specify_product_text" style="width: 400px;">
                </div>           
                <br>
            </div>


            <!-- Exchange details starts -->

            <div class="text-center mt-4 mb-4 ">
                <h4>Exchange Detail</h4>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="Make" class="form-label">Make</label>
                    <input type="text" class="form-control" id="Make" name="make">
                </div>
                <div class="col-md-4 mb-2">
                    <label for="Model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="Model" name="model">
                </div>
                <div class="col-md-4 mb-2">
                    <label for="Mfg" class="form-label">Mfg Years:</label>
                    <input type="text" class="form-control" id="Mfg" name="mfg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="Color" class="form-label">Color</label>
                    <input type="text" class="form-control" id="Color" name="exchange_color">
                </div>
                <div class="col-md-4 mb-2">
                    <label for="KMS" class="form-label">KMS</label>
                    <input type="text" class="form-control" id="KMS" name="kms">
                </div>
                <div class="col-md-4 mb-2">
                    <label for="Expected_Price" class="form-label">Expected Price</label>
                    <input type="text" class="form-control" id="Expected_Price" name="expected_price">
                </div>
            </div>


            <!-- Follow up parts starts -->


            <div class="py-5 text-center">
                <h4>Follow up Details</h4>
            </div>

            <form role="form" action="/wohoo" method="POST">
                <div class="multi-field-wrapper">
                    <div class="multi-fields">
                        <div class="multi-field">
                            <input type="date" class="col-md-2 mb-2" placeholder="Date" name="date[]">
                            <input type="text" class="col-md-7 mb-2" placeholder="Voice of Customer" 
                                name="voice_of_customer[]">
                            <input type="date" class="col-md-2 mb-2" placeholder="Next Contact Date"
                                name="next_contact_date[]">
                            <button type="button" class="remove-field btn btn-danger btn-sm">Remove</button>
                        </div>
                    </div>
                    <button type="button" class="add-field btn btn-success">Add</button>
                </div>
            </form><br>



            <!-- Nature of visit parts starts -->
            <div class="row d-flex">
                <div class=" mr-4 col-2">
                    <h5>Nature of visit:</h5>
                </div>
                <div class="form-check form-check-inline-block col-md-3">
                    <input class="form-check-input" type="radio" name="nature_of_visit" id="inlineRadio1"
                        value="Genuine">
                    <label class="form-check-label" for="inlineRadio1">Genuine</label>
                </div>
                <div class="form-check form-check-inline-block col-md-3">
                    <input class="form-check-input" type="radio" name="nature_of_visit" id="inlineRadio2"
                        value="General Curriosity">
                    <label class="form-check-label" for="inlineRadio2">General Curriosity</label>
                </div>
            </div><br>

            <!-- status part started -->
            <div class="row d-flex">
                <div class="col-2 mb-4 ">
                    <h5>Status:</h5>
                </div>
                <div class=" col-10">
                    <div class="form-check form-check-inline col-sm-3">
                        <input class="form-check-input" type="radio"
                            name="status" id="active" value="Active">
                        <label class="form-check-label" for="inlineRadio1">Active</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-3">
                        <input class="form-check-input" type="radio"
                            name="status" id="closed" value="Closed">
                        <label class="form-check-label" for="inlineRadio2">Closed</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-3">
                        <input class="form-check-input"  type="radio"
                            name="status" id="customer" value="Customer">
                        <label class="form-check-label" for="inlineRadio3">Customer</label>
                    </div>
                </div>
                    
                   
            </div>
            <div class="container hideStatus" id="status_extra">
                <h5 class="text-center">Lost case analysis (Detail)</h5>
                <div class="row no-gutters">
                    <div class="col-6">
                        <input type="text" class="form-control text-center" id="inputEmail4"
                            placeholder="Lost to Competitor Brand" readonly>
                    </div>
                    <div class="col-6 mb-2">
                        <select class="custom-select" id="inputGroupSelect011" name="lost_to_competitor_brand">
                            <option selected>Choose...</option>
                            @foreach($brands as $brands)
                        <option value="{{ $brands->brands }}" >
                            {{ $brands->brands }}
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-6">
                        <input type="text" class="form-control text-center" id="inputEmail4"
                            placeholder="Lost to Co-Dealer" readonly>
                    </div>
                    <div class="col-6 mb-2">
                        <input type="text" class="form-control" id="inputPassword4" name="lost_to_codealer">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-6">
                        <input type="text" class="form-control text-center" id="inputEmail4"
                            placeholder="Finance Problem" readonly>
                    </div>
                    <div class="col-6 mb-2">
                        <input type="text" class="form-control" id="inputPassword4" name="finance_problem">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-6">
                        <input type="text" class="form-control text-center" id="inputEmail4"
                            placeholder="Buying Scheduled Later" readonly>
                    </div>
                    <div class="col-6 mb-2">
                        <input type="text" class="form-control" id="inputPassword4" name="Buying_scheduled_later">
                    </div>
                </div>
                <div class="row no-gutters text">
                    <div class="col-6">
                        <input type="text" class="form-control text-center" id="inputEmail4"
                            placeholder="False Enquiry" readonly>
                    </div>
                    <div class="col-6 mb-2">
                        <input type="text" class="form-control" id="inputPassword4" name="false_enquiry"> 
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <button class="add-field btn btn-success" > Submit </button>  
            </div>
            </form>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2021 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js')}}" ></script>
   
    
</body>

</html>