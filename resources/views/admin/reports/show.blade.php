<div class="modal-header bg-danger">
    <button type="button" class="close" data-dismiss="modal"
            aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Удаление отчета</h4>
</div>
<div class="modal-body">Вы уверены, что хотите удалить отчет {{ $files->message }}?</div>
<div class="modal-footer">
    <form>
        <input name="_method" type="hidden" value="DELETE">
        <button id="destroy-report" class="btn btn-default" data-token="{{ csrf_token() }}" type="button"
                data-dismiss="modal">Да
        </button>
        <button class="btn btn-default" type="button" data-dismiss="modal">Нет</button>
    </form>
</div>