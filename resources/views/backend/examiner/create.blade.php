<x-backend.layouts.master>


    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Examiner</strong> <small>Examiner Create:</small> </h2>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">Basic Examples</h2>
                    <form action="{{ route('examiners.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="row clearfix">

                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Examiner Name:</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="e.g., John doe" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Examiner Email:</label>

                                    <input type="text" name="email" class="form-control"
                                        placeholder="e.g., examiner@mail.com" />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Examiner Phone:</label>

                                    <input type="text" name="phone" class="form-control"
                                        placeholder="e.g., +8801864738273" />
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
