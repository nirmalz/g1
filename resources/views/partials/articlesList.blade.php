<div class="panel panel-info">

    <div class="panel-heading">
        All Articles
    </div>

    <table class="table table-bordered table-striped table-responsive">

        <thead>
        <tr>
            <th>Title</th>
            <th>Create on</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>
                        <a href="{{ url('article/'.$article->id) }}" class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>

