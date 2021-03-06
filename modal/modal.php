<button type="button" class="btn btn-outline-light my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">Post</button>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <p>Please fill the information below to post your work.</p>

                <form action="post.php" method="post" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="auteur">Auteur</label>
                            <input type="text" required name="auteur" class="form-control" id="auteur" placeholder="Auteur">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Title">Title</label>
                            <input type="text" required name="title" class="form-control" id="Title" placeholder="Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Bericht</label>
                        <textarea class="form-control" required name="bericht" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    
<style>
    ::file-selector-button {
        display: none;
    }
</style>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFile01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="ImageUpload" accept="image/*" class="input-group-text" style="background: white">
                        </div>
                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <input type="submit" class="btn btn-info" value="Post">

            </div>
        </div>
    </div>
</div>
</form>