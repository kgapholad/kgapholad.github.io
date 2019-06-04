<!--app/views/form.blade.php-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard-Profile</div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     
  <form method="POST" action="/form-submit" accept-charset="UTF-8">
  <!--  <input name="_token" type="hidden" value="h7xNdTaJXwLz5v0lkBolVPelpxldoiDR5gcKWkku">  
   <!-- text input field -->
   <label for="username" id="" class="">Username</label>
   <input id="" class="" name="username" type="text" value="clivern"></br>
   <!-- textarea field -->
   <label for="biog" id="" class="">Biog.</label>
   <textarea id="" class="" name="biog" cols="50" rows="10">biog here</textarea></br> 
   <!-- password inputs -->
   <label for="password" id="" class="">Password</label>
   <input name="password" type="password" value="" id="password"></br>
   <!-- email input -->
   <label for="email" id="" class="">Email</label>
   <input id="" class="" name="email" type="email" value="hello@clivern.com"></br>
   <!-- select box -->
   <label for="status" id="" class="">Status</label>
   <select id="status" name="status"></br>
    <option value="enabled" selected="selected">Enabled</option>
    <option value="disabled">Disabled</option>
   </select>  </br>
   <!-- radio buttons -->
   <label for="status" id="" class="">Status</label>
   <input checked="checked" name="status" type="radio" value="enabled" id="status"> Enabled
   <input name="status" type="radio" value="disabled" id="status"> Disabled</br>
   <!-- checkbox -->
   <label for="status" id="" class="">Status</label>
   <input checked="checked" name="status" type="checkbox" value="1" id="status"> Enabled</br>
   <!-- hidden field -->
   <input name="record_to_update" type="hidden" value="1">  </br>
   <!-- submit buttons -->
   <input type="submit" value="Save">  
   <!-- reset buttons -->
   <input type="reset" value="Reset">  
   <!-- normal buttons -->
   <button type="button">Normal</button>  
  </form>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
