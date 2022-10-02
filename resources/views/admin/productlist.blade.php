<x-admin.layout.master>

<div class="row my-5">
    <h3 class="fs-4 mb-3">Total Sell</h3>
    <div class="col">

        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Product Name</th>
                    {{-- <th scope="col">Color</th> --}}
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach($products as $product)

                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->product_name }}</td>
                    {{-- <td>{{ $product->product_color }}</td> --}}
                    <td>{{ $product->product_price }} Tk</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('productlist.show', $product->id) }}">Details</a>
                        <a class="btn btn-success" href="{{ route('productlist.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-danger" href="" onclick="return confirm('Are You Sure Want to Delete ?')">Delete</a>
                    </td>
                    <td></td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</div>
</x-admin.layout.master>
