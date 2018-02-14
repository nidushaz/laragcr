var init = {
	installer : function(){
		data = {'method':'installer'};
		init.callAjaxForInstall(base_url+'include/ajax.php',data);
	},
	checkLogin : function(){
		 data = {'method':'checkLogin','user':$("#user").val(),'pass':$("#pass").val()};
		 init.callAjaxForAll(base_url+'include/ajax.php',data);
	},
	logout : function(){
		data = {'method':'logout'};
		init.callAjaxForAll(base_url+'include/ajax.php',data);
	},
	addData: function(formId,method){
		$dataArray = $('#'+formId).serializeArray();
		console.log($dataArray);
		data = {'method':method,'submitData':$dataArray};
		init.callAjaxForAll(base_url+'include/ajax.php',data);
	},
	addDataWithMultiPart: function(formId,method,id=''){
		$dataArray = $('#'+formId).serializeArray();
		//console.log($dataArray);
		var formData = new FormData($('#'+formId)[0]);
		files = $('#productimage')[0].files;
		data = {'method':method,'submitData':$dataArray};
		//console.log(data);
		// //Looping through uploaded files collection in case there is a Multi File Upload. This also works for single i.e simply remove MULTIPLE attribute from file control in HTML.  
		          for (var i = 0; i < files.length; i++) {
		               formData.append(files[i].name, files[i]);
					   	 //formData.append('image', $('#productimage').prop('files')[0]);// add file in form
		            }
		            formData.append('method',method);
		            //formData.append('submitData[]',$("#"+formId).serializeArray())
		init.callAjaxForAllMultipPart(base_url+'include/ajax.php',formData,id);
	},
	editData:function(formId,method){
		$dataArray = $('#'+formId).serializeArray();
		data = {'method':method,'submitData':$dataArray};
		init.callAjaxForAll(base_url+'include/ajax.php',data);
	},
	deleteData:function(table,field,id){
		data = {'method':'deleteData','table':table,'field':field,'id':id};
		var url = base_url+'include/ajax.php';
		$.ajax({
			url:url,
			type:'post',
			data:data,
			cache:false,
			dataType:'json',
			success:function(html){
                console.log(html);
				window.setTimeout(function(){ 
			    swal({   
		    				    title:html.title,
		    				    text: "",   
		    				    timer: 3000,   
		    				    showConfirmButton: false 
				    	}); 
			    	} ,500);
			}
		});	
	},
	callAjaxForInstall : function(file,data){
		$.ajax({
			url:file,
			type:'post',
			data:data,
			cache:false,
			beforeSend: function(){
				bar.animate(1.0);  // Number from 0.0 to 1.0
			},
			success:function(data){
				window.setTimeout(function(){ 
			    swal({   
		    				    title: "Successfully Configured !",   
		    				    text: "You will be redirect to dashboard shortly.",   
		    				    timer: 2000,   
		    				    showConfirmButton: false 
				    	}); 
			    	} ,1500);
				window.setTimeout(function(){
					location.reload();
				},3500);
				     
			}
		});
	},
	callAjaxForAll : function(file,data){
		$.ajax({
			url:file,
			type:'post',
			cache:false,
			data:data,
			dataType:"json",
			beforeSend: function(){
				bar.animate(1.0);  // Number from 0.0 to 1.0
			},
			success:function(data){
				console.log(data);
				window.setTimeout(function(){ 
			    swal({   
		    				    title: data.title,   
		    				    text: data.text,   
		    				    timer: 2000,   
		    				    showConfirmButton: false 
				    	}); 
			    	} ,1500);
				if(data.resp=='error'){
					$("#container svg").find("path").attr("stroke","#c0392b");
				}else{
					$("#container svg").find("path").attr("stroke","#27ae60");
				}
				if(data.resp==='success'){
					window.setTimeout(function(){
						location.reload();
					},3500);
				} 
				if(data.resp==='redirect'){
					var url=data.returnMethod;
					url=base_url+'index.php?page='+url;
					//window["init"][method](data.responseData); // call dynamic function		
					window.setTimeout(function(){
						location.href(url);
					},3500);			
				}


			}
		});
	},
	callAjaxForAllMultipPart : function(file,formdata,id=''){
		$.ajax({
			url:file,
			type:'post',
			cache:false,
			contentType: false,
			processData:false,
			data:formdata,
			enctype:'multipart/form-data',
			dataType:"json",
			beforeSend: function(){
				bar.animate(1.0);  // Number from 0.0 to 1.0
			},
			success:function(data){
				console.log(data);
				window.setTimeout(function(){ 
			    swal({   
		    				    title: data.title,   
		    				    text: data.text,   
		    				    timer: 2000,   
		    				    showConfirmButton: false 
				    	}); 
			    	} ,1500);
				if(data.resp=='error'){
					$("#container svg").find("path").attr("stroke","#c0392b");
				}else{
					$("#container svg").find("path").attr("stroke","#27ae60");
				}
				if(data.resp=='success'){
					window.setTimeout(function(){
						location.reload();
					},3500);
				} 
				if(data.resp=='redirect'){
					var url=data.returnMethod;
					url=base_url+'index.php?page='+url;
					//window["init"][method](data.responseData); // call dynamic function		
					window.setTimeout(function(){
						location.href=url;
					},3500);			
				}

			}
		});
	},
	setCategory:function(data){

		console.log(data);
		var label = data.active==1?"success":"danger"; 
		var labelText = data.active==1?"Active":"deactive"
		var responseHtml="<tr style='display: table-row;'><td class='footable-visible footable-last-column editTd' data-id='"+data.id+"'>"+data.id+"</td><td class='footable-visible footable-last-column editTd' data-item_cat_name='"+data.item_cat_name+"'>"+data.item_cat_name+"</td>";
		responseHtml+="<td class='footable-visible footable-last-column editTd' data-active='"+data.active+"'><span class='label label-table label-"+label+"'>"+labelText+"</span></td>";
		// $.each(data,function(i,v){
		// 	responseHtml+="<td>"+v+"<td>";
		// })
		//<button class="btn btn-icon waves-effect waves-light btn-white dataRemove" data-remove'+data.id+'><i class="fa fa-remove"></i></button>
		responseHtml+='<td class="footable-visible footable-last-column"><a class="btn btn-icon waves-effect waves-light btn-white dataEdit"> <i class="fa fa-edit"></i> </a>&nbsp;&nbsp;&nbsp;</td>';
		responseHtml+="</tr>";
		$("tbody.responseData").find("tr").first().before(responseHtml);
	}

}
// validation
  				$("form").submit(function(event){
  					event.preventDefault();
                    $elem = $(this).find('.shaz-validator-text');
                    $flag = true;
                    $elem.each(function(i,v){
           
                       // ShazzValidator.emptyValidator($(this).val());
                        if($(this).val()==''){
                                //$(this).addClass("");
                                $flag = false;
                        }else{
                                $flag = true;
                                //$(this).removeClass("");
                        }
                    });
                    return $flag;
                });
                var ShazzValidator = {
                  emptyValidator : function(elem){
                        
                  }  
                };
                $("body").on("click",".dataEdit",function(){  

                	$dataA = [];          					
					$selector = $(this).parent('td').parent("tr");
					$('td.editTd',$selector).each(function(){
						for(var key in $(this).data()){
							console.log(key);
							if(key==='active'){
								$(".modal-demo #"+key+"_"+$(this).data(key)).attr("checked","checked");	
							}else{
								$(".modal-demo #"+key).val($(this).data(key));
							}
						}          				
					});            					
            	});
            	

            	//C:\xampp\htdocs\sqlite\assets\images\products