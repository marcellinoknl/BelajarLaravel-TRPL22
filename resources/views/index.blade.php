@include('layouts.header')

<table class="table" border="1" width="50%" cellspacing="2">
    <thead>
      <tr height="50">
        <th scope="col">No</th>
        <th scope="col">Product Name</th>
        <th scope="col">Stocks</th>
        <th scope="col">Prices</th>
        <th scope="col">Description</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <?php
        $number = 1;
    ?>
    <tbody>
        @foreach($products as $product)
      <tr style="text-align: center">
        <th scope="row">{{ $number++ }}</th>
        <td>{{ $product-> productname }}</td>
        <td>{{ $product-> stock }}</td>
        <td>{{ $product-> price }}</td>
        <td>{{ $product-> description }}</td>
        {{-- <td>{{ $product-> created_at }}</td> --}}
        <td>
           <b> ubah | hapus </b>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>