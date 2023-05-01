@extends('dashboard')
    @section('payment')
<div class="overflow-x-auto">
    <table class="table-auto w-full">
      <thead>
        <tr>
          <th class="px-4 py-2">Payment ID</th>
          <th class="px-4 py-2">Customer Name</th>
          <th class="px-4 py-2">Order ID</th>
          <th class="px-4 py-2">Amount</th>
          <th class="px-4 py-2">Payment Method</th>
          <th class="px-4 py-2">Status</th>
          <th class="px-4 py-2">Date</th>
        </tr>
      </thead>
      <tbody>
        
        
        @foreach ($payments as $payment)
        <tr>
          <td class="border px-4 py-2">{{ $payment->id}}</td>
          <td class="border px-4 py-2">{{ $payment->first_name .' '. $payment->last_name}}</td>
          
          <td class="border px-4 py-2">order</td>
          <td class="border px-4 py-2">${{ $payment->total_price }}</td>
          <td class="border px-4 py-2">{{ $payment->number }}</td>
          <td class="border px-4 py-2"><span class="bg-green-500 text-white rounded-full px-2 py-1">paid</span></td>
          <td class="border px-4 py-2">May 3, 2023</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection