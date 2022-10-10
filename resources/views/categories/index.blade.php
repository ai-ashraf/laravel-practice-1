<x-admin.layout.master>

    <div class="row my-5">
        @if(@session('message'))
        <p class="text-success">
            {{@session('message')}}

        </p>
        @endif
        <h3 class="fs-4 mb-3">Categories</h3>
        <div class="col">

            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#SL</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($categories as $category)

                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->category_name }}</td>
                        <td style="display: flex">
                            <a class="btn btn-info mx-2" href="{{ route('productlist.show', $category->id) }}">Details</a>
                            <a class="btn btn-success mx-2" href="{{ route('productlist.edit', $category->id) }}">Edit</a>

                            <form action="{{ route('productlist.delete', $category->id) }}" method="post">
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
