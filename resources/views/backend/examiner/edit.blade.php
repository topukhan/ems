<x-backend.layouts.master>

    
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Examiner</strong> <small>Examiner Edit:</small> </h2>                        
                </div>
                <div class="body">
                    <h2 class="card-inside-title">Basic Examples</h2>
                    <form action="{{ route('examiners.update',$examiner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">  
                                    <label for="name">Examiner Name:</label>                                  
                                    <input type="text" name="name" class="form-control" value="{{ $examiner->name }}" />
                                </div>
                                <div class="form-group">   
                                    <label for="email">Examiner Email:</label>                                  

                                    <input type="text" name="email" class="form-control" value="{{ $examiner->email }}" />
                                </div>
                                <div class="form-group">   
                                    <label for="phone">Examiner Phone:</label>                                  

                                    <input type="text" name="phone" class="form-control" value="{{ $examiner->phone }}" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>