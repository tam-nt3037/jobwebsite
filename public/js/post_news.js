/*-- =============== New JS ================== --*/

/*--   Start Category   --*/
			
    $("#title_a").on('click', function() {
        $("#menu_ul").slideToggle('fast');
    });

    $(".dropdown dd ul li a").on('click', function() {
        $(".dropdown dd ul").hide();
    });

    function getSelectedValue(id) {
        return $("#" + id).find("#result_span").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown")) $("#menu_ul").hide();
    });


    var categories = [];
    $('#div_multi input[type="checkbox"]').on('click', function() {

        var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
            title = $(this).val();

        if ($(this).is(':checked')) {
            var html = '<span class="btn btn-primary btn-sm" title="' + title + '">' + title + '</span>' + "   ";
            $('#result_span').append(html);
            categories.push(title);
            $(".hida").hide();
        } else {
            $('span[title="' + title + '"]').remove();
            categories = categories.filter(item => item !== title)
            var ret = $(".hida");
            $('#title_a').append(ret);

        }
    })
    

    ;

/*--   Place  --*/
 
    var loca = [];
    $("#title_a2").on('click', function() {
        $("#menu_ul2").slideToggle('fast');
    });

    $(".dropdown dd ul li a").on('click', function() {
        $(".dropdown dd ul").hide();
    });

    function getSelectedValue(id) {
        return $("#" + id).find("#result_span2").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown")) $("#menu_ul2").hide();
    });

    $('#div_multi2 input[type="checkbox"]').on('click', function() {

        var title2 = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
        title2 = $(this).val();

        if ($(this).is(':checked')) {
            var html = '<span class="btn btn-primary btn-sm" title="' + title2 + '">' + title2 + '</span>' + "   ";
            loca.push(title2);
            $('#result_span2').append(html);
            $(".hida").hide();
        } else {
            $('span[title="' + title2 + '"]').remove();
            loca = loca.filter(item => item !== title2)
            var ret = $(".hida");
            $('#title_a2').append(ret);
        }
    })
    
    function test() {
        document.getElementById("name_job_category").value = categories;
        document.getElementById("location_work").value = loca;
        document.getElementById("skills").value = skills;
       }
    ;


/*--  End Category + Place  --*/


            /*-- tags skill --*/    
            
                var $el = $(".tag-editor");
                var $listParent = $el.find("ul");
                var $input = $el.find("input:text");
                $input.focus();

                $input.on("keydown input textInput keypress", function(e) {
                var code = (e.keyCode ? e.keyCode : e.which);
                switch (code) {
                    case 9:
                    case 32:
                    case 13:
                    case 186:
                    case 188:
                    e.preventDefault();
                    createList($input.val());
                    $input.val("").focus();
                    break;
                    default:
                    break;
                }
                });

 
                var skills = [];
                function createList(tagName) {
                if (tagName.length==0){
                    $('.dots').addClass('wobble empty');
                    setTimeout(function() {
                $('.dots').removeClass('wobble empty');
                }, 1000);
                }
                if (tagName.length > 0) {
                    var _listItem =
                    "<li class='animated'>" +
                    tagName +
                    "<span class='removeTag'>&times;</span></li>";
                    skills.push(tagName);
                    $listParent.append(_listItem);
                    $('.dots').removeClass('wobble');
                }
                }

                $(document).on("click", ".removeTag", function() {
                    _this = $(this);
                    var tagname = _this.parent("li").text().slice(0,-1);
                
                    _this
                        .parent("li")
                        .addClass("fadeOutDown");
                    setTimeout(function() {
                        _this.parent("li").remove();
                    }, 400);
                    skills = skills.filter(item => item !== tagname);
                });
                
             

            /*-- END tags skill --*/
            

            /*-- Add benefits --*/

                $(document).ready(function() {

                    var MaxInputs       = 14; //N�mero Maximo de Campos
                    var contenedor       = $("#contenedor"); //ID del contenedor
                    var AddButton       = $("#agregarCampo"); //ID del Bot�n Agregar

                    //var x = n�mero de campos existentes en el contenedor
                    var x = $("#contenedor div").length + 1;
                    var FieldCount = x-1; //para el seguimiento de los campos

                    $(AddButton).click(function (e) {
                        if(x <= MaxInputs) //max input box allowed
                        {
                            FieldCount++;
                            //agregar campo
                            $(contenedor).append('<div class="row" style="padding-bottom: 5px">        <div class="col-md-3" style="padding-right: 0px">   <select type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +' " style="width: 100%; height: auto;font-size: 16px; padding-right: 0px" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">  <option value="Bouns">Bouns</option><option value="Healthcare Plan">Healthcare Plan</option><option value="Paid Leave">Paid Leave</option><option value="Training">Training</option><option value="Awards">Awards</option><option value="Library">Library</option><option value="Laptop">Laptop</option> <option value="Mobile">Mobile</option><option value="Travel Opportunities">Travel Opportunities</option><option value="Team Activities">Team Activities</option><option value="Transporttation">Transporttation</option><option value="Canteen">Canteen</option><option value="Vouchers">Vouchers</option> <option value="Kindergarten">Kindergarten</option> <option value="Other">Other</option></select></div><div class="col-md-8" style="padding-left: 0px"><input style="font-size: 16px" type="text" aria-label="Last name" class="form-control" placeholder="Enter benefit detail"> </div>  <a href="#" class="eliminar">&times;</a> </div>');
                            x++; //text box increment
                        }
                        return false;
                    });

                    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
                        if( x > 1 ) {
                            $(this).parent('div').remove(); //eliminar el campo
                            x--;
                        }
                        return false;
                    });
                });
    
        /*-- End add benefits --*/


        /*!-- show image upload --*/
        
        function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(200)
                            .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            
         /*-- END show image upload --*/



