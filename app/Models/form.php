<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable=['ref_no','date','sales_executive','fname','lname','district','municipality_vdc','ward','tole','contact_no','occupation','email','source_of_enquiry','soe_specify','intrested_model','option','finalized_option','soe_color','showroom','showroom_specify','product','product_specify','make','model','mfg_years','exchange_color','kms','expected_price','nature_of_visit','status','lost_to_competitor_brand','lost_to_codealer','finance_problem','Buying_scheduled_later','false_enquiry','followup_date','voice_of_customer','next_contact_date'];
     
    public $timestamps = false;
}
