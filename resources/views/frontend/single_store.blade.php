@extends('frontend.layouts.app')

@section('content')
    <div class="row ">
{{--  --}}
	 <div class="col-md-12 single-store-list text-center">
		
	 

			
	   		<strong> {{ $store->name}} </strong> | 
	   		<em>
	   			{{

					 $store->city->state->country->name .', '.  
					 $store->city->state->name .', ' . 
					 $store->city->name .' || '. 
					 $store->house_number . ' '. 
					 $store->street_address .', '. 
					 $store->zipcode
	   													 
	   			 }} 
	   		</em>
	    	
	    	 
	    	
	    	 
	 </div>

	 <div class="text-center">

		{{ link_to_route('frontend.stores', 'Stores List') }} &nbsp;
		{{ link_to_route('frontend.search', 'Search page') }}

		</div>
    	
    </div><!--row-->
@endsection