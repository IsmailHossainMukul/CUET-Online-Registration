                            
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Online Registration</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="/complete_reg">
                       {{ csrf_field() }}                        
                         <div class="form-group">
                            <label  class="col-md-4 control-label">Id No</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$id_no}}" class="form-control" name="id_no" >

                                
                            </div>
                        </div>

                         <div class="form-group">
                            <label  class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$dept}}" class="form-control" name="dept" >

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Advisor</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="advisor" >

                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Hall Fee Transection_no</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="hall_transection" >

                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Course Fee Transection_no</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="course_transection" >

                                
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection