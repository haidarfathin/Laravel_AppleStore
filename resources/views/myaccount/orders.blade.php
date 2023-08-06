@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container py-5">
  <h1>Orders</h1>
  <table id="orders-table" class="table table-striped">
    <thead>
      <tr>
        <th style="vertical-align: middle; text-align: center;">ID</th>
        <th>Products</th>
        <th style="vertical-align: middle; text-align: center;">Total</th>
        <th style="vertical-align: middle; text-align: center;">Status</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($viewData["orders"] as $order)
      <tr>
        <td style="text-align: center; padding-top:20px"">{{ $order->getId() }}</td>
        <td>
          @php
          $items = $order->getItems();
          $count = count($items);
          $halfCount = ceil($count / 2);
          $totalPrice = 0; // Inisialisasi total harga
          @endphp

          <div class="row py-2">
            <div class="col-md-12">
              @for ($i = 0; $i < $halfCount; $i++) <div class="row">
                <div class="col-md-2">
                  <img src="{{ asset('/img/products/'.$items[$i]->getProduct()->getImage()) }}" width="70" height="70" style="border-radius:20%; padding:5px; background-color:white">
                </div>
                <div class="col-md" style="text-align: left;">
                  <strong>{{ $items[$i]->getProduct()->getName() }}</strong> (${{ $items[$i]->getProduct()->getPrice() }})
                  <br>
                  x {{ $items[$i]->getQuantity() }}
                </div>
              </div>
              @php
              $totalPrice += $items[$i]->getProduct()->getPrice() * $items[$i]->getQuantity(); // Menambahkan harga produk ke total harga
              @endphp
              @endfor
            </div>

            @if ($count > $halfCount)
            <div class="col-md-12">
              <hr>
            </div>

            <div class="col-md-12">
              @for ($i = $halfCount; $i < $count; $i++) <div class="row">
                <div class="col-md-2">
                  <img src="{{ asset('/storage/'.$items[$i]->getProduct()->getImage()) }}" width="70" height="70" style="border-radius:20%; padding:5px; background-color:white">
                </div>
                <div class="col-md" style="text-align: left;">
                  <strong>{{ $items[$i]->getProduct()->getName() }}</strong> (${{ $items[$i]->getProduct()->getPrice() }})
                  <br>
                  x {{ $items[$i]->getQuantity() }}
                </div>
              </div>
              @php
              $totalPrice += $items[$i]->getProduct()->getPrice() * $items[$i]->getQuantity(); // Menambahkan harga produk ke total harga
              @endphp
              @endfor
            </div>
            @endif
          </div>
        </td>
        <td style="text-align: center; font-weight:600; padding-top:20px">${{ $totalPrice }}</td>
        <td style="text-align: center; padding-top:20px"">
          @php
          $today = \Carbon\Carbon::now();
          $orderDate = \Carbon\Carbon::parse($order->getCreatedAt());
          $differenceInDays = $orderDate->diffInDays($today);
          @endphp

          @if ($differenceInDays > 5)
          <div class="badge bg-success">Selesai</div>
          @else
          <div class="badge bg-warning text-dark">Dalam Proses</div>
          @endif
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4">No orders found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    $('#orders-table').DataTable();
  });
</script>
@endpush
