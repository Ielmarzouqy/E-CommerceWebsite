show single pro

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/>
<script src="https://cdn.tailwindcss.com"></script>

{{-- @if (session()->has('message')) --}}
   
       
   
    {{-- <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
            {{-- {{session()->get('message')}} --}}
        {{-- </div> --}}
    {{-- </div>  --}}
{{-- @endif --}}
<div>
    
        <div class="flex w-50 overflow-x-auto">
            <table class=" my-16 table-hover table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Where</th>
                        <th>Description</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart_items as $item)
                        
                  
                    <tr>
                        @php
                            $pro_name = App\Models\Product::Where('id',$item->product_id)->get()
                        @endphp
                        <td>{{$item->product_id}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity}}</td>
                        <td><a href="" class="btn btn-error" >remove</a>
                        </td>

                                                                              
                    </tr>
                    @endforeach
</div>