<div class="panel panel-success">

    <div class="panel-heading">
        All Authors
    </div>



    <table class="table table-bordered table-striped">

        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created On</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        @foreach($authors as $author)

            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->created_at }}</td>
                <td>

                    <a href="#" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>

                    <a href="#" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>

                </td>
            </tr>

        @endforeach

        </tbody>

    </table>



</div>