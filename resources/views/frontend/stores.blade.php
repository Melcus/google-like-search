@extends('frontend.layouts.app')

@section('content')
    <div class="row ">
{{--  --}}
@foreach($stores as $store)
	 <div class="col-md-12 single-store-list">
		
	 


	 		<a href="{{route('frontend.single_store', ['store' => $store->slug]) }}"><strong>  {{ $store->name}}  </strong></a>
			
	   		 | 
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
	 @endforeach

<div class="col-md-12 flex-center">
{{ $stores->links()}}
</div> 

    	
    </div><!--row-->
@endsection