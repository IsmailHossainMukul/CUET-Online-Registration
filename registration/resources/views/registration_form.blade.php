@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Online Registration</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/reg">
                       {{ csrf_field() }}

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >

                                
                            </div>
                        </div>

                          <div class="form-group">
                            <label  class="col-md-4 control-label">Id No</label>

                            <div class="col-md-6">
                                <input id="id_no" type="text" class="form-control" name="id_no" >

                                
                            </div>
                        </div>

                          <div class="form-group">
                            <label  class="col-md-4 control-label">Hall name</label>

                            <div class="col-md-6">
                                
                                <select name="hall_name" class="form-control">
                                    <option value="Shohid_Mohammad)Shah_Hall">Shoid Mohammad Shah Hall</option>
                                    <option value="Bangabandhu_hall">Bangabandhu Hall</option>
                                    <option value="Tareq_huda_hall">Tareq Huda Hall</option>
                                    <option value="QK_Hall">Dr.QK Hall</option>
                                </select>
                                
                            </div>
                        </div>
                          
                        
                          <div class="form-group">
                            <label  class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                              <select name="dept" class="form-control">
                                    <option value="EEE">Electrical and Electronics Engineering</option>
                                    <option value="CSE">Computer Science Engineering</option>
                                    <option value="ME">Mechanical Engineering</option>
                                    <option value="CE">Civil Engineering</option>
                                    <option value="URP">Urban and Regional Planning</option>
                                    <option value="PME">Pretrolium and Mining Engineering</option>
                                </select>

                                
                            </div>
                        </div>
                          <div class="form-group">
                            <label  class="col-md-4 control-label">Level</label>

                            <div class="col-md-6">
                                <input id="level" type="text" class="form-control" name="level" >

                                
                            </div>
                        </div>
                          <div class="form-group">
                            <label  class="col-md-4 control-label">Term</label>

                            <div class="col-md-6">
                                <input id="term" type="text" class="form-control" name="term" >

                                
                            </div>
                        </div>
                          <div class="form-group">
                            <label  class="col-md-4 control-label">Student Type</label>

                            <div class="col-md-6">
                                <input id="student_type" type="text" class="form-control" name="student_type" >

                                
                            </div>
                        </div>
                          <div class="form-group">
                            <label  class="col-md-4 control-label">Course No</label>

                            <div class="col-md-6">
                                <input id="course_no" type="text" class="form-control" name="course_no" >

                                
                            </div>
                        </div>
                          <div class="form-group">
                            <label  class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" >

                                
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
