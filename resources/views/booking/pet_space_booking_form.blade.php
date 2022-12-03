@extends('layouts.main')
@section('styles')
<style>
.check-box-align{
  margin-left:20px;
}
.check-box-align1{
  margin-left:12px;
}
</style>
@endsection
@section('content')
<div class="p-4 ">
    <h3 class="text-secondary">Booking Details</h3>
</div>
<form class="row g-3 p-4" action="/create_pet_space_booking" method="post">

@csrf
    <div class="col-12 col-sm-6 col-md-3">
        <label for="name" class="text-secondary  ">First Name</label>
        <input type="text"  name="name" id="name" class="form-control" id="first-name" placeholder="Name" />
        <span class="text-danger error-text name_err"></span>
    </div>
    
    <div class="col-12 col-sm-6 col-md-3">
        <label for="contact" class="required text-secondary">Contact Number</label>
        <input type="number" class="form-control" name="contact" id="contact" placeholder="Number" />
        <span class="text-danger error-text contact_err"></span>
    </div>

    <input type="hidden" name="pet_space_id" id="pet_space_id" value={{$pet_space_id}} />
    <div class="col-12 col-sm-6 col-md-3">
        <label for="pet-name" class="required text-secondary">Pet Name</label>
        <input type="text" class="form-control" name="pet_name" id="pet_name" placeholder="Pet Name" />  
        <span class="text-danger error-text pet_name_err"></span>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <label for="pet_count" class="required text-secondary">Pets Count</label>
        <input type="number"  class="form-control" name="pet_count" id="pet_count" placeholder="Pets count" />
        <span class="text-danger error-text pet_count_err"></span>
      </div>
    
      <div class="col-12 col-sm-6 col-md-3">
        <label for="days" class="required  text-secondary">No.of.Days</label>
        <input type="number"  name="no_days" class="form-control" id="no_days" placeholder="days" />
        <span class="text-danger error-text no_days_err"></span>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <label for="service type" class="required text-secondary">service Type</label>
       <div class="row">
     <div class="col-12 d-flex">
                <div class="form-check ">
                    <input class="form-check-input" name="service_type" type="radio"  id="service_type" value="days" >
                    <label class="form-check-label text-secondary" for="exampleRadios1">
                With in a Days
                    </label>
                  </div>
                  <div class="form-check check-box-align">
                    <input class="form-check-input" type="radio"  name="service_type" id="service_type" value="weeks" >
                                    <label class="form-check-label text-secondary" for="exampleRadios1">
                                With in a Weeks
                                    </label>
                  </div>
                </div>
                <div class="col-12 d-flex">
            <div class="form-check">

                <input class="form-check-input" type="radio"  name="service_type" id="service_type" value="months" >
                <label class="form-check-label text-secondary" for="exampleRadios1">
            With in a Month
                </label>
              </div>
              <div class="form-check check-box-align1">
                <input class="form-check-input" type="radio"  name="service_type" id="service_type" value="immediate" >
                                         <label class="form-check-label text-secondary" for="exampleRadios1">
                                            immediate
                                         </label>
              </div>
  
     
            </div>
            <span class="text-danger error-text service_type_err"></span>
        </div>
            
            </div>

    <div class="col-12 col-sm-6 col-md-3">
        <input type="submit" value="Submit" class="btn btn-primary btn-sm btn-submit" >
    </div>

  
  </form>
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
      $(".btn-submit").click(function(e){
          e.preventDefault();
    
          // var _token = $("input[name='_token']").val();
          var name = $("#name").val();
          var contact=$("#contact").val();
          var pet_name = $("#pet_name").val();
          var pet_count = $("#pet_count").val();
          var no_days=$("#no_days").val();
          var service_type=$("input[type='radio']:checked").val();
          var pet_space_id=$("#pet_space_id").val();
      

          $.ajaxSetup({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
          $.ajax({
             type:'POST',
              url:"{{ url('create_pet_space_booking') }}",
              data:{
                name:name,
                contact:contact,
                pet_name:pet_name,
                pet_count:pet_count,
                no_days:no_days,
                service_type:service_type,
                pet_space_id:pet_space_id                                     
             },
        success:function(data){
          console.log("error",data.error)
                  if($.isEmptyObject(data.error)){
                      // alert(data.success);
                      window.location.href = "{{url('/')}}";
                      toastr.success("pet space booked successfully");
                  }else{
                      printErrorMsg(data.error);
                  }
            }
        });
      }); 

      function printErrorMsg (msg) {
          $.each( msg, function( key, value ) {
              console.log(key);
              $('.'+key+'_err').text(value);
          });
      }
  });
</script>
@endsection