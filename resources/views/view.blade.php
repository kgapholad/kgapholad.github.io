@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Ussds</div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  @if (app('request')->input('message')=='failed')
                    <br><center>
                    <div class="alert alert-danger" role="alert">
                        Code is already allocated.
                    </div>
                    </center><br>
                    @elseif(app('request')->input('message')=='success')
                    <br><center>
                    <div class="alert alert-success" role="alert">
                         Your code has been created
                    </div>
                    </center><br>
                    @endif

  <form method="GET" action="/ussd-submit" accept-charset="UTF-8">
   <!-- <input name="_token" type="hidden" value="h7xNdTaJXwLz5v0lkBolVPelpxldoiDR5gcKWkku">  
   <!-- text input field -->
   <label for="low" id="" class="">Low String</label>
   <input id="" class="" name="low" type="text" placeholder="Enter Low Connection String">
     @error('low')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</br>
   <!-- text input field -->
   <label for="high" id="" class="">High String</label>
   <input id="" class="" name="high" type="text" placeholder="Enter high Connection String">
    @error('high')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
      <!-- text input field -->
   <label for="route" id="" class="">Route</label>
   <input id="" class="" name="route" type="text" placeholder="Enter Low Route">
    @error('route')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
   <!-- select box -->
   <label for="charge" id="" class="">Charge</label>
   <select id="charge" name="charge"></br>
    <option value="" selected="selected">Select</option>
    <option value="0">0</option>
    <option value="1">1</option>
   </select>
    @error('charge')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
   <br><small id="charge" class="form-text text-muted">Must either be 0 or 1.</small>  </br>
   <!-- text input field -->
   <label for="enddate" id="" class="">End Date</label>
   <input id="enddate" class="" name="enddate" type="date" >
    @error('enddate')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
    <!-- text input field -->
    <label for="cusnum" id="" class="">Customer Number</label>
    <input id="cusnum" class="" name="cusnum" type="text" placeholder="Cus. Number">
    @error('cusnum')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
   <!-- submit buttons -->
   <input type="submit" value="Edit">   
      <!-- submit buttons -->
      <input type="submit" value="Delete">   
  </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
