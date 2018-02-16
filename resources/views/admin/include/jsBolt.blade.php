<script>
    var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="{{ asset('js/js/jquery.min.js') }}"></script>
<script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/js/detect.js') }}"></script>
<script src="{{ asset('js/js/fastclick.js') }}"></script>
<script src="{{ asset('js/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('js/js/waves.js') }}"></script>
<script src="{{ asset('js/js/wow.min.js') }}"></script>
<script src="{{ asset('js/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/js/jquery.scrollTo.min.js') }}"></script>

<script src="{{ asset('plugins/peity/jquery.peity.min.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/js/jquery.core.js') }}"></script>
<script src="{{ asset('js/js/jquery.app.js') }}"></script>



<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>

<script src="{{ asset('plugins/jquery-knob/jquery.knob.js') }}"></script>

<script src="{{ asset('pages/jquery.dashboard.js') }}"></script>

<script src="{{ asset('pages/jquery.dashboard_ecommerce.js') }}"></script>
<!-- Modal-Effect -->
<script src="{{ asset('plugins/custombox/dist/custombox.min.js') }}"></script>
<script src="{{ asset('plugins/custombox/dist/legacy.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('plugins/isotope/dist/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/js/progressbar.js') }}"></script>

<script src="{{ asset('plugins/notifyjs/dist/notify.min.js') }}"></script>
<script src="{{ asset('plugins/notifications/notify-metro.js') }}"></script>

<!-- Sweet-Alert  -->
<script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('pages/jquery.sweet-alert.init.js') }}"></script>


<!-- Modal-Effect -->
<script src="{{ asset('plugins/custombox/dist/custombox.min.js') }}"></script>
<script src="{{ asset('plugins/custombox/dist/legacy.min.js') }}"></script>


<!-- XEditable Plugin -->
<script src="{{ asset('plugins/moment/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pages/jquery.xeditable.js') }}"></script>

<script src="{{ asset('plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>

<!--Form Validation-->
<script src="{{ asset('plugins/bootstrapvalidator/dist/js/bootstrapValidator.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('plugins/parsleyjs/dist/parsley.min.js')}}"></script>
<!--Form Wizard
<script src="{{ asset('plugins/jquery.steps/build/jquery.steps.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>

wizard initialization
<script src="{{ asset('pages/jquery.wizard-init.js')}}" type="text/javascript"></script>-->

<!--form validation init-->
<script src="{{ asset('plugins/summernote/dist/summernote.min.js') }}"></script>
<script src="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script>
    $(".select2").select2();
    jQuery(document).ready(function(){

        $("body").on('keyup','.tagss',function () {
            alert($(this).val());
        })

        $("body").on("click",'.rmv',function(){
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm!'
            }).then(function(){
                alert("The confirm button was clicked");
            }).catch(function(reason){
                alert("The alert was dismissed by the user: "+reason);
            });


        });
        $(".alertifyshaz").delay(3000).fadeOut(1000);
        $('#datatable').dataTable({
            "order": [[ 0, "desc" ]],
            "pageLength" : 15,
            "bStateSave":true
        });
        $('.summernote').summernote({
            height:150,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });
        /*$('.validateForm').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
            .on('form:submit', function() {
                return false; // Don't submit form for this demo

            });*/

        // get edit data into form
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
    });

    var selDiv = "";

    document.addEventListener("DOMContentLoaded", init, false);

    function init() {
        document.querySelector('#banner-img').addEventListener('change', handleFileSelect, false);
        // banner-img is input type=file Id
        selDiv = document.querySelector("#img-preview");// img-preview is div id where you want to show image
    }

    function handleFileSelect(e) {
        if(!e.target.files || !window.FileReader) return;
        selDiv.innerHTML = "";
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function(f) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var html = "<img class='img-thumbnail thumb-lg' src=\"" + e.target.result + "\">";
                selDiv.innerHTML += html;
            }
            reader.readAsDataURL(f);
        });

    }

    var  init = {
        addForm: function(route){
           $.ajax({
               url:route,
               success:function(html){
                 $(".addMoreElement").append(html);
               },
               dataType:'html'

           })
        },
        removeForm: function(e){
            $(e).parents('.removeDivElement').remove();
        },
        getTags : function(e){
            alert($(e).val());
        }
    }
    $(document).ajaxComplete(function(){
        $('.tags').tagsinput({
            maxTags: 50
        });
    });

    $("body").on("change",".actimage",function(){
        //console.log($(this).parent().children().attr('class'));
        var self=$(this).parent().children('.thumb-lg');
		$(this).prev().remove();
        readURL(this,self);
    });

    function readURL(input,self) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                self.attr('src', e.target.result);
                self.next('.imageUrl').remove();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#addBtn").click(function () {
        var html= '';
        html += '<div class="col-md-2">';
        html += '<div class="form-group">';
        html += '<img class="thumb-lg imgPreview" />';
        html += '<input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="productImage[]"/>';
        html += '</div>';
        html += '</div>';
        $('#imageSection').append(html);
        $(this).filestyle();
        console.log(html);
    });
	
	
	$("body").on("click",".genImg",function(){
        var dynhtml ='<div class="col-md-2"><div class="form-group"><img class="img-thumbnail thumb-lg" src="" alt=""><br/><br/><input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="actimage[]" multiple/></div></div>';

        $(".imgGrid").children('.form-group').append(dynhtml);

        $(this).filestyle();

    });
	
	$(document).ready(function(){
        $(".actimage").next(".input-group").children(".form-control").css("display","none");
    });

    $("body").on("click", ".removeBtn", function(){
        $(this).parent().parent().remove();
    });
	
	$("body").on("click", ".fadeDiv", function(){
        $(this).parent().parent().remove();
    });
</script>