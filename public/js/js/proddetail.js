 $("body").on("click","#addItemType",function(){
                    $(".mainItemTypeDiv").after(ItemTypeDiv);
                });
                $("body").on("click",".delItemType",function(){
                    $(this).parents(".delItemTypeDiv").remove();
                });

                // $("body").on("change","#productimage",function(){
                //     var reader = new FileReader();
                //     reader.onload = function (e) {
                //         // get loaded data and render thumbnail.
                //         document.getElementById("image").src = e.target.result;
                //     };
                //     // read the image file as a data URL.
                //     reader.readAsDataURL(this.files[0]);
                // });
              
                $("body").on("click",".delItemIcon",function(){
                    $(this).prev("img").remove();
                });
              var selDiv = "";
                     
                 document.addEventListener("DOMContentLoaded", init, false);
                 
                 function init() {
                     document.querySelector('#productimage').addEventListener('change', handleFileSelect, false);
                     selDiv = document.querySelector("#uploadedItemImages");
                 }
                     
                 function handleFileSelect(e) {
                    
                     if(!e.target.files || !window.FileReader) return;

                     selDiv.innerHTML = "";
                     var files = e.target.files;
                     var filesArr = Array.prototype.slice.call(files);
                     console.log(filesArr);
                     //console.log(files);
                     filesArr.forEach(function(f) {
                     // console.log(files[f])
                     //     var f = files[i];
                     //     if(!f.type.match("image.*")) {
                     //         return;
                     //     }
                        //<i class=' fa fa-trash delItemIcon'></i> delete button for removing image 
                         var reader = new FileReader();
                         reader.onload = function (e) {
                             var html = "<img style='width:80px;height:80px;margin:12px' class='img-thumbnail' src=\"" + e.target.result + "\">";
                             selDiv.innerHTML += html;               
                         }
                         reader.readAsDataURL(f); 
                     });
                     
                 }

                $(document).ready(function(){
                    var typingTimer;                //timer identifier
                    var doneTypingInterval = 1000;  //time in ms, 5 second for example
                    $("#item_code").on("keyup blur",function(){
                        var val=$(this).val();
                        var trimval = $.trim(val);
                        clearTimeout(typingTimer);
                            if(trimval.length>0){
                                typingTimer = setTimeout(function(){
                                 //do stuff here e.g ajax call etc....
                                 //var item_code= $('#item_code').val();
                                 $.ajax({
                                   url:base_url+"include/ajax.php?method=ItemCodeExist",
                                   type:"post",
                                   data:{'item_code':trimval},
                                   cache:false,
                                   beforeSend:function(){
                                    $("#code_exist").addClass("fa fa-spinner fa-spin fa-1x");
                                   },
                                   success:function(html){
                                            console.log(html);
                                            $("#code_exist").removeClass("fa fa-spinner fa-spin fa-1x");
                                            if(html==1){
                                                $("#item_code").val("");
                                                $("#code_exist").removeClass("text-success").addClass("text-danger").html("Item Code already exist please try another.");
                                            }else{
                                                $("#code_exist").removeClass("text-danger").addClass("text-success").html("Item Code available.");  
                                            }
                                        },
                                    });
                                }, doneTypingInterval);
                            }else{
                                 //some task
                            }
                        });
                      
                        $("#maintain_stock").on("click check",function(){
                            if($(this).is(":checked")){
                                $("#quantity").prop("disabled",false);
                                $("#quantity").prop("required","required");
                            }else{
                                $("#quantity").prop("disabled",true);
                                $("#quantity").prop("required","");
                                console.log("not chk"); 
                            }
                        });
                    });
                    var specialKeys = new Array();
                        specialKeys.push(8); //Backspace
                        specialKeys.push(46);// decimal
                        function IsNumeric(e) {
                             var keyCode = e.which ? e.which : e.keyCode
                             var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                             return ret;
                        } 

                    $("body").on("click",".delItemTypeDB ",function(){
                        var id = $(this).data('priceid');
                               swal({   
                                   title: "Are you sure?",   
                                   text: "If you'll click on delete button this element will be deleted. ",   
                                   type: "warning",   
                                   showCancelButton: true,   
                                   confirmButtonColor: "#DD6B55",   
                                   confirmButtonText: "Yes, delete it!",   
                                   cancelButtonText: "Cancel",   
                                   closeOnConfirm: true,   
                                   closeOnCancel: true 
                               }, function(isConfirm){   
                                   if (isConfirm) {  
                                        var delreturn = init.deleteData('item_type','id',id);
                                         $("#del"+id).remove();
                                         $("#delsel"+id).remove();
                                         $("#delchk"+id).remove();
                                       //swal("Deleted!", "Your imaginary file has been deleted.", "success");   
                                   } else {     
                                      // swal("Cancelled", "Your imaginary file is safe :)", "error");   
                                   } 
                               });
                           });

                    $("body").on("click",".delimg ",function(){
                        var id = $(this).data('imgid');
                               swal({   
                                   title: "Are you sure?",   
                                   text: "If you'll click on delete button this element will be deleted. ",   
                                   type: "warning",   
                                   showCancelButton: true,   
                                   confirmButtonColor: "#DD6B55",   
                                   confirmButtonText: "Yes, delete it!",   
                                   cancelButtonText: "Cancel",   
                                   closeOnConfirm: true,   
                                   closeOnCancel: true 
                               }, function(isConfirm){   
                                   if (isConfirm) {  
                                        var delreturn = init.deleteData('item_images','id',id);
                                         $(".imgParent"+id).remove();
                                       //swal("Deleted!", "Your imaginary file has been deleted.", "success");   
                                   } else {     
                                      // swal("Cancelled", "Your imaginary file is safe :)", "error");   
                                   } 
                               });
                           });

                     
               