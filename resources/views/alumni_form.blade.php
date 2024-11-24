<link rel="stylesheet" href="{{asset('asset/css/mystyle.css') }}" />
<div class="wrapper">
    <div class="title">
      Alumni Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Dob</label>
          <input type="date" class="input">
       </div>  
       <div class="inputfield">
          <label>Phone</label>
          <input type="text" class="input">
       </div>  
     
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
     
      <div class="inputfield">
          <label>Address</label>
          <input type="password" class="input">
       </div> 
     
     <div class="inputfield">
       <label class="check">
            <input type="checkbox">            <span class="checkmark"></span>

       </label>UG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <label class="check">
            <input type="checkbox">            <span class="checkmark"></span>
   </label>PG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
           <label class="check">
            <input type="checkbox">
                        <span class="checkmark"></span>

          </label>PGD
       </div> 
    
    
      <div class="inputfield">
          <label>Year of UG Course</label>
          <input type="number" class="input">
       </div> 
       
       <div class="inputfield">
          <label>Year of PG Course</label>
          <input type="number" class="input">
       </div>   
       
      <div class="inputfield">
          <label>PG Speciality</label>
          <input type="text" class="input">
       </div> 
       
          <div class="inputfield">
          <label>Year of PGD Course</label>
          <input type="number" class="input">
       </div>   
       
      <div class="inputfield">
          <label>PGD Speciality</label>
          <input type="text" class="input">
       </div> 
       
       
       
     <div class="inputfield">
          <label>Higher Studies</label>
          <textarea class="textarea"></textarea>
       </div>   
    
    
      <div class="inputfield">
          <label>Present Address</label>
          <textarea class="textarea"></textarea>
       </div>
       
     <div class="inputfield">
          <label>Job Details</label>
          <textarea class="textarea"></textarea>
       </div>   
       
        
    
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>