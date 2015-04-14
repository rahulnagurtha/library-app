<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Book Details</h4>
</div>
@if($book !== null)
<div class="modal-body">
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
            <label class="control-label" style="font-weight: 500" id="title">{{ $book->title }}</label>
        </div>
    </div>
    <div class="form-group">
        <label for="authors" class="col-sm-3 control-label">Authors</label>
        <div class="col-sm-9">
            <label class="control-label" style="font-weight: 500" id="author">{{ $book->authors }}</label>
        </div>
    </div>
    <div class="form-group">
        <label for="publication" class="col-sm-3 control-label">Publication</label>
        <div class="col-sm-9">
            <label class="control-label" style="font-weight: 500" id="publication">{{ $book->publication->name }}</label>
        </div>
    </div>
    <div class="form-group">
        <label for="isbn" class="col-sm-3 control-label">ISBN</label>
        <div class="col-sm-9">
            <label class="control-label" style="font-weight: 500" id="isbn">{{ $book->isbn }}</label>
        </div>
    </div>
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9">
            <label class="control-label" style="font-weight: 500" id="category">{{ $book->category->name }}</label>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" value="Issue">Issue</button>
</div>
@elseif($book->issue !== null)
    <div class="modal-body">
        The book is already issued.
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
@else
    <div class="modal-body">
        The book doesnot exist.
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
@endif