<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> MCB Bank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">  <a class="nav-link" href="{{ url('/account') }}">Accounts</a></li>
                <li class="nav-item ">  <a class="nav-link" href="{{ url('/') }}">Add New Account</a></li>
                <li class="nav-item ">  <a class="nav-link" href="{{ url('/') }}">Feedback</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success">Welecome Manager</button>
                <a href="{{ url('/enregistrer') }}" data-toggle="tooltip" title="Logout" class="btn btn-outline-danger mx-1" ><i class="fa fa-sign-out fa-fw"></i></a>
            </form>
        </div>
    </nav><br><br><br>
</header>
