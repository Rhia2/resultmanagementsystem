
<div id="delete_transcript" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete Transcript</h4>
            </div>
            <form>
                <div class="modal-body card-box">
                    <p>Are you sure want to delete this?</p>
                    
                <div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- colleges modal -->
<div id="delete_college" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete College</h4>
            </div>
            <div class="modal-body card-box">
                <p>Are you sure want to delete this?</p>
                <div class="m-t-20 text-left">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="add_college" class="modal custom-modal fade" role="dialog">
    <form action="{{url('/addCollege')}}" method="Post">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-content modal-md">
                <div class="modal-header">
                    <h4 class="modal-title">Add College</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>College Name <span class="text-danger">*</span></label>
                            <input class="form-control" required="" type="text" id="college" name="college">
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary">Create College</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="edit_college" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Edit College</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>College Name <span class="text-danger">*</span></label>
                        <input class="form-control" value="IT Management" type="text">
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- department -->
<div id="delete_department" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete Department</h4>
            </div>
            <div class="modal-body card-box">
                <p>Are you sure want to delete this?</p>
                <div class="m-t-20 text-left">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="add_department" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Add Department</h4>
            </div>
            <div class="modal-body">
                <form action="{{url('/addDepartment')}}" method="Post">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Department Name <span class="text-danger">*</span></label>
                                <input class="form-control" required="" type="text" name="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Colleges <span class="text-danger">*</span></label>
                                <select class="select" name="college_id">
                                    <option>Select a college</option>
                                    @isset ($staffs)
                                        @foreach($colleges as $college)
                                        <option value="{{$college->id }}">{{$college->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">HOD <span class="text-danger">*</span></label>
                                <select class="select" name="hod_id">
                                    <option>Select Hod</option>
                                    @isset ($staffs)
                                        @foreach($staffs as $staff)
                                        <option value="{{$staff->id }}">{{$staff->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary">Create Department</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="edit_Department" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Edit Department</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Department Name <span class="text-danger">*</span></label>
                        <input class="form-control" value="Web Developer" type="text">
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Edit Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- students -->
<div id="edit_student" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h4 class="modal-title">Edit Student</h4>
            </div>
            <div class="modal-body">
                <form class="m-b-30">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" value="John" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input class="form-control" value="Doe" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" value="johndoe@example.com" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Matric no </label>
                                <input class="form-control" value="9843014641" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Department</label>
                                <select class="select">
                                    <option value="">Computer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="delete_student" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete Student</h4>
            </div>
            <form>
                <div class="modal-body card-box">
                    <p>Are you sure want to delete this?</p>
                    <div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- courses -->
<div id="delete_course" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete Course</h4>
            </div>
            <div class="modal-body card-box">
                <p>Are you sure want to delete this?</p>
                <div class="m-t-20 text-left">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="add_course" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Add Course</h4>
            </div>
            <div class="modal-body">
                <form action="{{url('/addCourse')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Course Code <span class="text-danger">*</span></label>
                        <input class="form-control" required type="text" name="code">
                    </div>
                    <div class="form-group">
                        <label>Course Name <span class="text-danger">*</span></label>
                        <input class="form-control" required type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Course weight <span class="text-danger">*</span></label>
                        <input class="form-control" required type="text" name="unit">
                    </div>
                    <div class="form-group">
                        <label>Department <span class="text-danger">*</span></label>
                        <select class="select" name="department" required>
                            <option>Please select department</option>
                            @isset ($departments)
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                            @endisset
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Semester <span class="text-danger">*</span></label>
                        <select class="select" name="semester" required>
                            <option>Please select department</option>
                            <option value="1">1st semester</option>
                            <option value="2">2nd semester</option>
                        </select>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Create Course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="edit_course" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Edit Course</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Course Code <span class="text-danger">*</span></label>
                        <input class="form-control" value="VAT" required="" type="text">
                    </div>
                    <div class="form-group">
                        <label>Course Name <span class="text-danger">*</span></label>
                        <input class="form-control" value="14%" required="" type="text">
                    </div>
                    <div class="form-group">
                        <label>Unit <span class="text-danger">*</span></label>
                        <input class="form-control" value="14%" required="" type="text">
                    </div>
                    <div class="form-group">
                        <label>Status <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Department <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Engineering</option>
                            <option>Medicine</option>
                        </select>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- report -->
<div id="delete_report" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete Report</h4>
            </div>
            <div class="modal-body card-box">
                <p>Are you sure want to delete this?</p>
                <div class="m-t-20 text-left">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- users -->
<div id="edit_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
            </div>
            <div class="modal-body">
                <form class="m-b-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" value="John" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input class="form-control" value="Doe" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" value="johndoe@example.com" type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Role</label>
                                <select class="select">
                                    <option>Admin</option>
                                    <option>Client</option>
                                    <option selected>Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">  
                            <div class="form-group">
                                <label class="control-label">User ID <span class="text-danger">*</span></label>
                                <input type="text" value="FT-0001" class="form-control floating">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-t-15">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Module Permission</th>
                                    <th class="text-center">Read</th>
                                    <th class="text-center">Write</th>
                                    <th class="text-center">Create</th>
                                    <th class="text-center">Delete</th>
                                    <th class="text-center">Import</th>
                                    <th class="text-center">Export</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Employee</td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Holidays</td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leave Request</td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Events</td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                    <td class="text-center">
                                        <input checked="" type="checkbox">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Edit User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
            
<div id="delete_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
            </div>
            <form>
                <div class="modal-body card-box">
                    <p>Are you sure want to delete this?</p>
                    
                <div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>