
@extends('layouts.app')

@section('content')

<!-- Advanced Search -->

<div class="container">
    <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary">Hotel Search</h1>
            <form method="POST"  action="/search" enctype="multipart/form-data" name="search" onsubmit="return validateForm()">
              {{ csrf_field()}}

            <div class="form-group">

                    <label class="form-group-label text-muted" for="checkin">Enter a Destination,Hotel, Landmark or address:</label>
                    <input class="form-control" type="text" name="searchterm" id="checkin"  placeholder="Search..">
            </div>
            <!-- Multi Date , Date Picker -->
            <div class="form-group">
                  <label class="text-muted" for="checkin">Please Select Your Check-In and Check-Out dates:</label>
                  <input  class="date form-control" type="text" name="daterange" id="checkin"  placeholder="Select Date.." required>
            </div>
            <div class="form-group">

                  <label  class="text-muted" for="travelers">Travelers:</label>
                  <select  name="numtravelers" class="form-control">
                    <option></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
            </div>

            <br />
            <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>



    </div>

</div>



@endsection
<!-- Scripts for the Date picker and Form validation  -->
@section('scripts')
  <script src="https://unpkg.com/flatpickr"></script>

  <script>

  flatpickr(".date", {

	minDate: "today",
  mode:"range",

});

function validateForm() {
  var setdate = document.forms["search"]["daterange"].value;
  if(setdate == ""){
    alert("Date Must be Filled Out");
    return false;
  }
}




</script>
@endsection
