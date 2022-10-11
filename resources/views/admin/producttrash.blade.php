<x-admin.layout.master>

<div class="row my-5">
    @if(@session('message'))
    <p class="text-success">
        {{@session('message')}}

    </p>
    @endif
    <h3 class="fs-4 mb-3">Products</h3>
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
                    <td style="display: flex">

                        <form action="{{ route('productlist.restore', $product->id) }}" method="post">
                            @csrf
                            @method('patch')
                        <button class="btn btn-warning mx-2" onclick="return confirm('Are You Sure Want to Restore ?')">Restore</button>

                        </form>
                        <form action="{{ route('productlist.forcedelete', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger mx-2" onclick="return confirm('Are You Sure Want to Delete ?')">Delete</button>

                        </form>

                    </td>
                    <td></td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</div>
</x-admin.layout.master>
