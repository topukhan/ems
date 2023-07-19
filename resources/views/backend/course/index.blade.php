<x-backend.layouts.master>

<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic</strong> Examples </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Course Name</th>
                                <th>Course Code</th>
                                <th>Course Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @foreach ($courses as $course )
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $course->coursename }}</td>
                                <td>{{ $course->coursecode }}</td>
                                <td>{{ $course->coursedesc }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('courses.edit',$course->id) }}">edit</a>
                                    <a class="btn btn-info" href="">show</a>
                                    <form style="display:inline" action="{{route('courses.destroy',$course->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="confirm('Are You Sure ! to DELETE this file?')" type="submit" class="btn btn-danger">Delete</button>
                                        
                                    </form>
        
                                </td>
                            </tr>  
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples --> 

</x-backend.layouts.master>