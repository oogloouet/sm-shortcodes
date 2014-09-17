jQuery(document).ready(function($){

	$('.sm_tab_ul li').click(function(){
		
		if($(this).find(".sm_tab_link").attr("class") != "sm_tab_link"){
			switch_tabs($(this));
		}
		
	});
		
	function switch_tabs(obj) {

		obj.parent().parent().find('.sm_tab_content').hide();
		obj.parent().find('li').removeClass("active");

		var id = obj.find("a", 0).attr('rel');
		
		$('#'+id).show();
		
		obj.addClass("active");
	}
});