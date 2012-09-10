$(function(){

	//$('body').append('loaded');
	 //$('.ckeditor_basic').ckeditor( function() { /* callback code */ }, { toolbar : 'Basic' } );
	
	//$('.ckeditor_full').ckeditor( function() { /* callback code */ }, { toolbar : 'Full' } );

	//$('.date').datepicker();

    //$('#modal').modal('toggle');
    
    $('.cancel').click(function(){
        $('#modal').modal('hide')
    });
    $('.delete').click(function(){
        event.preventDefault();
        $('#formDelete input')
            .val($(this).data('value'))
            .attr('id' , $(this).data('key'))
            .attr('name' , $(this).data('key'));
    });
    
    
});



$(document).scroll(function(){

    // If has not activated (has no attribute "data-top"
    if (!$('.subnav').attr('data-top')) {
        // If already fixed, then do nothing
        if ($('.subnav').hasClass('subnav-fixed')) return;
        // Remember top position
        var offset = $('.subnav').offset()
        $('.subnav').attr('data-top', offset.top);
    }

    if ($('.subnav').attr('data-top') - $('.subnav').outerHeight() <= $(this).scrollTop())
        $('.subnav').addClass('subnav-fixed');
    else
        $('.subnav').removeClass('subnav-fixed');
});