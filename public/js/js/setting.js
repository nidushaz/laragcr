							$(document).ready(function(){
								$('.setting-field').editable({
									validate: function(value) {
									    if($.trim(value) == '') return 'This field is required';
									},
								    type:$(this).data('type'),
								    pk: $(this).data('pk'),
								    url:base_url+'include/ajax.php',
								    name:$(this).data('name'),
								   // value: $(this).val(),
								    params : function(params){
								    	params.method='setting';
								    	return params;
								    },
								    
								    
								    success:function(r,n){
								    	console.log(r+','+n);
								    	alertBox(r);
								    }
								});

							});
							function alertBox(r){
								$.Notification.autoHideNotify('custom', 'top right','settings !',r);
							}