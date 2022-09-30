function getValue() {
    var search = jQuery('#search').val();
    return search;
}
jQuery(document).ready(function () {

    jQuery('#search-dropdown').on('change', function () {
        var search = getValue();
        var dropdown = jQuery('#dropdown').val();

        if (dropdown == 0 && search == null) {
            $('.alldata').show();
            $('.searchdata').hide();
        }
        else {
            $('.alldata').hide();
            $('.searchdata').show();
        }

        jQuery.ajax({
            url: '/a/dropdown/search/',
            type: "GET",
            data: { 'dropdown':dropdown, 'search': search },
            success: function (data) {
                console.log(data);
                $('#Content').html(data);
            }
        });
    });

});

jQuery(document).ready(function () {

    jQuery('#dropdown').on('change', function () {
var search =getValue();
        from_date = jQuery('#from_date').val();
        to_date = jQuery('#to_date').val();
        if (from_date == null && to_date == null  && search == null) {
            $('.alldata').show();
            $('.searchdata').hide();
        }
        else {
            $('.alldata').hide();
            $('.searchdata').show();
        }

        jQuery.ajax({
            url: 'dairy/search/search/from_date/to_date',
            type: "GET",
            data: { 'search': search,'from_date':from_date,'to_date':to_date },
            success: function (data) {
                console.log(data);
                $('#Content').html(data);
            }
        });
    });

});

		jQuery(document).ready(function () {
		    jQuery('#dropdown1').on('change', function () {
				var hoatdong = 0;
				var ketnoi = 0;
				var search = getValue();
				hoatdong = jQuery('#hoatdong').val();
				ketnoi = jQuery('#ketnoi').val();
				if (hoatdong == 0 && ketnoi == 0 && search == null) {
					$('.alldata').show();
					$('.searchdata').hide();
				}
				else {
					$('.alldata').hide();
					$('.searchdata').show();
				}

				jQuery.ajax({
					url: 'device/dropdown/hoatdong/ketnoi/search',
					type: "GET",
					data: { 'hoatdong': hoatdong, 'ketnoi': ketnoi, 'search': search },
					success: function (data) {
					    console.log(data);
						$('#Content').html(data);
					}
					});
				});

			});

            $('#searchall').on('change', function()
            {
                $from_date = $('#from_date').val();
                $to_date = $('#to_date').val();
                $search = $('#search').val();
                $tendichvu = $('#tendichvu').val();
                $trangthai = $('#trangthai').val();
                if (($from_date) || ($to_date) || ($search) || ($trangthai) || ($tendichvu) )
                {
                  $('.alldata').hide();
                  $('.searchdata').show();
                }
                else
                {
                  $('.alldata').show();
                  $('.searchdata').hide();
                }
        
                $.ajax({
                  type: 'get',
                  url : '/number-search/tendichvu/trangthai/from_date/to_date/search',
                  data: {'tendichvu':$tendichvu,'trangthai':$trangthai,'from_date':$from_date,'to_date':$to_date,'search':$search},
                  
                  success:function(data)
                  {
                    console.log(data);
                    $('#Content').html(data);
                  },
                  
            });
          })
        
          $('.baocao-datepicker').on('change', function()
          {
              $value1 = $('#from_date').val();
              $value2 = $('#to_date').val();
              if (($value1) && ($value2))
              {
                $('.alldata').hide();
                $('.searchdata').show();
              }
              else if (!($value1) || !($value2))
              {
                $('.alldata').show();
                $('.searchdata').hide();
              }
      
              $.ajax({
                type: 'get',
                url : '/re/from_date/to_date',
                data: {'from_date':$value1,'to_date':$value2},
                
                success:function(data)
                {
                  console.log(data);
                  $('#Content').html(data);
                },
                
          });
        })
        jQuery(document).ready(function () {
            
            jQuery('#search').on('change', function () {

  var search =getValue();
                if (search) {
                    $('.alldata').hide();
                    $('.searchdata').show();
                }
                else {
    $('.alldata').show();
                    $('.searchdata').hide();
                }

                jQuery.ajax({
                    url: 'role/search/search',
                    type: "GET",
                    data: { 'search': search },
                    success: function (data) {
                        console.log(data);
                        $('#Content').html(data);
                    }
                });
            });

        });

        $(document).ready(function() {
            $('#dropdown-service').on('change', function()
            {
                $search = $('#search').val();
                $from_date = $('#from_date').val();
                $to_date = $('#to_date').val();
                $hoatdong = jQuery('#hoatdong').val();
                if ($search == null && $from_date == null && $to_date == null && $hoatdong == null)
                {
                    $('.alldata').show();
                  $('.searchdata').hide();
                  
                }
                else
                {
                    $('.alldata').hide();
                  $('.searchdata').show();
                }
                $.ajax({
                type: 'get',
                url : '/service-search/hoatdong/search/from_date/to_date',
                data: {'hoatdong':$hoatdong,'search':$search,'from_date':$from_date,'to_date':$to_date},
                
                success:function(data)
                {
                    console.log(data);
                    $('#Content').html(data);
                },
                
                });
        });
});

$(document).ready(function() {
    $('.search-show').on('change', function()
    {
        $search = $('#searchs').val();
        $from_date = $('#from_date').val();
        $to_date = $('#to_date').val();
        $hoatdong = jQuery('#hoatdong').val();
        if ($search == null && $from_date == null && $to_date == null && $hoatdong == "")
        {
            $('.alldata').show();
          $('.searchdata').hide();
          
        }
        else
        {
            $('.alldata').hide();
          $('.searchdata').show();
        }
        $.ajax({
        type: 'get',
        url : '/show-service/hoatdong/search/from_date/to_date',
        data: {'hoatdong':$hoatdong,'search':$search,'from_date':$from_date,'to_date':$to_date},
        
        success:function(data)
        {
            console.log(data);
            $('#Content').html(data);
        },
        
        });
});
});