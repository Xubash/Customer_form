
        $('.multi-field-wrapper').each(function () {
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function (e) {
                $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
            });
            $('.multi-field .remove-field', $wrapper).click(function () {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });
    
        $('input:radio[name="status"]').change(
            function(){
                if ($(this).is(':checked') ) {
                    if($(this).val() == 'Closed'){
                        document.getElementById("status_extra").classList.remove('hideStatus');
                        document.getElementById("status_extra").classList.add('showStatus');
                    }
                    else {
                        document.getElementById("status_extra").className = "hideStatus"; 
                    }     
                }
            }   
        );


        function specify_check_soe() {
            if (document.getElementById('events_soe').checked || document.getElementById('others_soe').checked) {
                document.getElementById("specify").classList.remove('hideStatus');
                document.getElementById("specify").classList.add('showStatus');}
                else {
                    document.getElementById("specify").className = "hideStatus"; 
               
            }
        }

        
        function specify_check_showroom() {
            if (document.getElementById('events_showroom').checked || document.getElementById('others_showroom').checked) {
                document.getElementById("specify_showroom").classList.remove('hideStatus');
                document.getElementById("specify_showroom").classList.add('showStatus');}
                else {
                    document.getElementById("specify_showroom").className = "hideStatus"; 
               
            }
        }

        function specify_check_product() {
            if (document.getElementById('events_product').checked || document.getElementById('others_product').checked) {
                document.getElementById("specify_product").classList.remove('hideStatus');
                document.getElementById("specify_product").classList.add('showStatus');}
                else {
                    document.getElementById("specify_product").className = "hideStatus"; 
               
            }
        }

       