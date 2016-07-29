<div class="panel panel-info">
    <div class="panel-heading">
        Create Author
    </div>

    <div class="panel-body">
        <form action="{{ url('create-author') }}" method="post" class="form-horizontal col-md-12">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                {{ $errors->first('name') }}

            </div>

            <div class="form-group">

                <label for="email">Email</label>
                <input type="text" name="email" class="form-control"  value="{{ old('email') }}">
                {{ $errors->first('email') }}

            </div>

            <div class="form-group">

                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                {{ $errors->first('password') }}

            </div>

            <div class="form-group">

                <label for="password_confirmation">Retype Password</label>
                <input type="password" name="password_confirmation" class="form-control">

            </div>



            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Create Author">
            </div>



        </form>
    </div>
</div>