<x-backend.layouts.master>

    
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Course</strong> <small>Course Create:</small> </h2>                        
                </div>
                <div class="body">
                    <h2 class="card-inside-title">Basic Examples</h2>
                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="row clearfix">
                        
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group">  
                                    <label for="coursecode">Course Code:</label>                                  
                                    <input type="text" name="coursecode" class="form-control" placeholder="coursecode" />
                                </div>
                                <div class="form-group">   
                                    <label for="coursename">Course Name:</label>                                  

                                    <input type="text" name="coursename" class="form-control" placeholder="coursename" />
                                </div>
                                <div class="form-group">   
                                    <label for="coursedesc">Course Description:</label>                                  

                                    <input type="text" name="coursedesc" class="form-control" placeholder="coursedesc" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                       
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>