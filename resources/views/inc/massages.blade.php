<div class="form-group row">
    <div class="justify-content-center col-md-11 mx-auto">
        {{-- @if (count($errors) > 0) --}}
        @if ($errors->any())
            <div class="row justify-content-center alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                <div><strong>Whoops!</strong> There were some problems with your inputs:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="d-inline-block p-2 errorColor">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>  
            </div>   
        @endif
    </div>

    <div class="justify-content-center col-md-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div> 

    <div class="justify-content-center col-md-12">
        @if ($message = Session::get('failure'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div> 
</div>
    

