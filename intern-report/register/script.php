
 <!-- Jquery JS-->
 <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
<script>
$(function () {
  //Initialize Select2 Elements
  $('.select2').select2()
  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
})

  function CheckSchool(val){
    //alert(val);
 var element=document.getElementById('school2');
 if(val=='0')
   element.style.display='block';
 else  
   element.style.display='none';
}


function Checkusertype(val){
    //alert(val);
 var element=document.getElementById('usertype');
 if(val=='1')
   element.style.display='block';
 else  
   element.style.display='none';
}

//Email validation process
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
//Email validation process ended



$(document).ready(function($){                                         
  $('#schooldiv').hide();                                       // Line 113 - 157
  $('#coursediv').hide();                                       // Line 105 - 112
  $("#standard-select").change(function() {                     // Line 55 -92
  $('#schooldiv').hide();
  $('#coursediv').hide();
  
    $("#standard-select option:selected").each(function(){
    if ($(this).val() == '1') {
    $('#schooldiv').show();
    $('#coursediv').show();
    
    }

  })

  })
});

</script>