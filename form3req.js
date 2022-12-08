/*$(document).on('click','#submitBtn', function() {
    console.log($('#signupForm').validate().checkForm())
    $("#signupForm").valid();
   /* console.log("User-Name:" +$('#name').val());*/
/*   var a=$("#name").val();
    var b=$("#age").val();
    var c=$('input[name="gender"]:checked').val();
    var d=$('input[name="gender"]:checked').val();
    var e=$("#address").val();
     var f=$('input[name="education"]:checked').val();
     var g=$('input[name="education"]:checked').val();
     var h=$('input[name="education"]:checked').val();
     var i=$('input[name="education"]:checked').val();


     var j =$("#sel").val();
     var checkval = '';
     var list = $("input[name='education[]']:checked").map(function () {
        var arr = [ 42, 55 ];
var str1 = arr.toString(); // Gives you "42,55"
var str2 = String(arr);
        return this.value;
    }).get();
    console.log(list);*/

    // console.log($('input[name="education"]').val());
    // console.log("Age:"+b);
    // console.log("Gender:"+c);
    // console.log("Gender:"+d);
    // console.log("Address:"+e);
    // console.log("Education:"+f);
    // console.log("Education:"+g);
    // console.log("Education:"+h);
    // console.log("Education:"+i);
    // console.log("City:"+j);console.log($('#things').val())
//});*/
 $(document).ready(function () {
    console.log($('#things').val())
             
        /*$.validator.addMethod("things",function(value,ele,param){
            return value != '0' ;
        } 'select things' );*/
            $("#signupForm").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                   
                    name: {
                        required: true,
                        minlength: 2 //for length of lastname
                    },
                    age: {
                        required: true,
                         maxlength: 2
                    },
                      gender:{
                         required: true

                    },
                     education:{


                        required: true,
                        minlength: 2
                    },

                    a2:"required",
                    address:{
                        required: true

                    },
                     things: {
            required: /*{
                depends: function(element) {
                    return $("#things").val() == '';
                }
            }*/true
        }
                },
                 

                    
                   
              
                // in 'messages' user have to specify message as per rules
                messages: {
                   
                    
                    name: {
                        required: " Please enter a username",
                        minlength: " Your username must consist of at least 2 characters"
                    },
                     age: {
                        required: " Please enter userage",
                        maxlength: " please enter max 2 numbers"

                    },
                      gender:{
                         required: " Please select gender"

                    },
                     education:{


                          required:"Please fill education fields",
                          minlength:"please select atleast two"
                    },

                     address: {
                        required: " Please enter your address"
                       
                    },
                    things:{
                        required:" Please select city"/*,
                         minlength:"please select atleast one"*/
                    }
                     

                },
    errorPlacement: function(error, element) 
        {
        if(element.parent('.input-group').length) {
               error.insertAfter(element.parent());
            } 
           else if ( element.is(":radio") ) 
           {
               error.appendTo( element.parents('.radio') );
           }
           else if ( element.is(":checkbox") ) 
           {console.log(123)
               error.appendTo( element.parents('.checkbox1') );
           }
           else 
           {
               error.insertAfter( element );
           }

       
        }
      /*   highlight: function(label) {
            $(label).closest('.chekbox').addClass('error');
        },
        success: function(label) {
            label
                .text('please fill').addClass('valid')
                .closest('.chekbox').addClass('success');
        }
         */
      /*    errorPlacement: function(error, element) 
        {
        if(element.parent('.input-group').length) {
               error.insertAfter(element.parent());
            } 
           else if ( element.is(":checkbox") ) 
           {
               error.appendTo( element.parents('.checkbox') );
           }
           else 
           { 
               error.insertAfter( element );
           }

       
        }*/
      });
      
});
      