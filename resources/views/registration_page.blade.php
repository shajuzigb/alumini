<link rel="stylesheet" href="{{asset('asset/css/regstyle.css')}}" />
<div class="container">
        <div class="title">
            <p>Registration</p>
        </div>
//shaju test //
        <form method="POST" action="{{ isset($var) && $var->exists ? url('edit_a/'.$var->id):url('url_reg_insert')}}" enctype="multipart/form-data" class="from-data">
            @csrf
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" value="{{!empty($var->name)? $var->name:''}}" >
                </div>
                <div class="input_box">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username" value="{{!empty($var->username)? $var->username:''}}">
                </div>
                <div class="input_box">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{!empty($var->email)? $var->email:''}}" >
                </div>
                <div class="input_box">
                    <label for="phone">Phone Number</label>
                    <input type="number" name="phone" id="phone" placeholder="Enter your number" value="{{!empty($var->phone)? $var->phone:''}}" >
                </div>
                <div class="input_box">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Enter your password" value="{{!empty($var->pass)? $var->pass:''}}" >
                </div>
                <div class="input_box">
                    <label for="confirmPass">Confirm Password</label>
                    <input type="password" name="confirmPass" id="confirmPass" placeholder="Confirm your password" value="{{!empty($var->confirmPass)? $var->confirmPass:''}}" >
                </div>

                <div class="list_box">
                <label for="District">District</label>  
                <select name="dist" id="dist"> 
                @foreach($var_dist_data as $var_dist)
                
  <option value="{{$var_dist['id']}}">{{$var_dist['value']}}</option>
  @endforeach
</select>
           </div>

           <div class="list_box">
                <label for="taluk">Taluk</label>  
                <select name="taluk" id="taluk">    
                
  <option value="0">[select taluk]</option>
  
</select>
           </div>
           <div class="list_box">
                <label for="village">village</label>  
                <select name="village" id="village">    
                
  <option value="0">[select village]</option>
  
</select>
           </div>


            <div class="gender">
                <span class="gender_title">Gender</span>
                <input type="radio" name="gender" id="radio_1">
                <input type="radio" name="gender" id="radio_2">
                <input type="radio" name="gender" id="radio_3">

                <div class="category">
                    <label for="radio_1">
                        <span class="dot one"></span>
                        <span>Male</span>
                    </label>
                    <label for="radio_2">
                        <span class="dot two"></span>
                        <span>Female</span>
                    </label>
                    <label for="radio_3">
                        <span class="dot three"></span>
                        <span>Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Register">
            </div>
        </form>
    
        
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function (){

$("#dist").change(function (){

  var id=$("#dist").val();
  $("#taluk").empty();
  $("#village").empty();
 
 $.ajax({
                url: 'get-taluk/' + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#taluk').append('<option value="' + value.id + '">' + value.value + '</option>');
                    });
                    }
})
}) 
$("#taluk").change(function (){

var id2=$("#taluk").val();
$("#village").empty();
$.ajax({
              url: 'get-village/' + id2,
              type: 'GET',
              dataType: 'json',
              success: function(data1) {
                  $.each(data1, function(key, value) {
                      $('#village').append('<option value="' + value.id + '">' + value.value + '</option>');
                  });
                  }
})
}) 

});
</script>
