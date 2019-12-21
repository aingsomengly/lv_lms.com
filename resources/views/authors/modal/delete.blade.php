<div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="deleteStudentModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('student.destroy','author_id')}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <input type="hidden" id="author_id" name="author_id">
                    <p class="text-danger text-center">Are you sure, You want to delete this Student</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">No/Camcel</button>
                        <button type="submit" class="btn btn-primary">Yes/Delete Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$('#deleteAuthortModal').on('show.bs.modal',function (e) {
    var button = $(e.relatedTarget)
    var author_id = button.data('author_id');
    var modal = $(this);
    modal.find('.modal-title').text('Delete Student');
    modal.find('#author_id').val(author_id);
})
</script>
