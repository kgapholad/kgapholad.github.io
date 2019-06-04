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
					 <table class="table"><thead><th>ID</th><th>Part1</th><th>Low</th><th>High</th><th>Route</th><th>From</th><th>To</th><th>Cus #</th><th>Charge</th></thead>
					
				  @foreach ($profile as $ussd)
						<tr>
						<td>{{ $ussd->Routing_Num }}
						</td>
						<td>{{ $ussd->Part1 }}
						</td>
						<td>
						{{ $ussd->Part2_Low }}
						</td>
						<td>
						{{ $ussd->Part2_High }}
						</td>
						<td>
						{{ $ussd->Route_To_App }}
						</td>
						<td>
						{{ $ussd->Assign_From_Date }}
						</td>
						<td>
						{{ $ussd->Assign_To_Date }}
						</td>
						<td>
						{{ $ussd->Customer_Num }}
						</td>
						<td>
						{{ $ussd->Charge_Code }}
						</td></tr>
					@endforeach
					</table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
