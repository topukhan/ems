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
                                <th>Examiner Name</th>
                                <th>Examiner Email</th>
                                <th>Examiner Phone</th>
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
                            @foreach ($examiners as $examiner )
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $examiner->name }}</td>
                                <td>{{ $examiner->email }}</td>
                                <td>{{ $examiner->phone }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('examiners.edit',$examiner->id) }}">edit</a>
                                    <a class="btn btn-info" href="">show</a>
                                    <form style="display:inline" action="{{route('examiners.destroy',$examiner->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirmDelete()" type="submit" class="btn btn-danger">Delete</button>
                                        
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
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this item?');
    }
</script>


</x-backend.layouts.master>