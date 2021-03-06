<div class="modal-header animals__modal_header">
    <h5 class="modal-title">Добавление объявления</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}" id="name_block">
            <label class="col-sm-3 col-form-label" for="name">Кличка: </label>
            <div class="col-sm-9">
                <input type="text" name="name" id="name" class="form-control"
                       placeholder="Введите кличку животного">
                <strong id="name_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('species') ? ' has-error' : '' }}" id="species_block">
            <label class="col-sm-3 col-form-label" for="species">Вид: * </label>
            <div class="col-sm-9">
                <select name="species" id="species" class="form-control" required>
                    <option value="">Выберите вид</option>
                    <option value="1">Кошки</option>
                    <option value="2">Собаки</option>
                </select>
                <strong id="species_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('breed') ? ' has-error' : '' }}" id="breed_block">
            <label class="col-sm-3 col-form-label" for="breed">Порода: </label>
            <div class="col-sm-9">
                <input type="text" name="breed" id="breed" class="form-control" placeholder="Введите породу животного">
                <strong id="breed_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('sex') ? ' has-error' : '' }}" id="sex_block">
            <label class="col-sm-3 col-form-label" for="sex">Пол: </label>
            <div class="col-sm-9">
                <select name="sex" id="sex" class="form-control" required>
                    <option value="0">Не указан</option>
                    <option value="1">Мужской</option>
                    <option value="2">Женский</option>
                </select>
                <strong id="sex_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('age') ? ' has-error' : '' }}" id="age_block">
            <label class="col-sm-3 col-form-label" for="age">Возраст: </label>
            <div class="col-sm-9">
                <input type="text" name="age" id="age" class="form-control" placeholder="Введите возраст">
                <strong id="age_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('notes') ? ' has-error' : '' }}" id="notes_block">
            <label class="col-sm-3 col-form-label" for="notes">Примечания: </label>
            <div class="col-sm-9">
                <textarea name="notes" id="notes" class="form-control"></textarea>
                <strong id="notes_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('contacts') ? ' has-error' : '' }}" id="contacts_block">
            <label class="col-sm-3 col-form-label" for="contacts">Контакты: * </label>
            <div class="col-sm-9">
                <input type="text" name="contacts" id="contacts" class="form-control"
                       placeholder="Введите ваши контакты" required>
                <strong id="contacts_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('main_foto') ? ' has-error' : '' }}" id="main_foto_block">
            <label class="col-sm-3 col-form-label" for="main_foto">Главное фото: * </label>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" name="main_foto" id="main_foto" class="custom-file-input" required>
                    <label class="custom-file-label form-control-file" for="main_foto">Выберите главное фото</label>
                </div>
                <strong id="main_foto_block_strong"></strong>
            </div>
        </div>
        <div class="row form-group{{ $errors->has('other_foto') ? ' has-error' : '' }}" id="otherfoto_block">
            <label class="col-sm-3 col-form-label" for="otherfoto">Другие фото: </label>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" name="files[]" id="otherfoto" class="custom-file-input" multiple = "multiple">
                    <label class="custom-file-label form-control-file" for="</div>">Добавьте другие фото</label>
                </div>
                <strong id="otherfoto_block_strong"></strong>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <input class="btn btn-primary goods__btn_inform" type="button" id="enter" value="Добавить">
            <button class="btn btn-danger goods__btn_inform goods__btn_danger" type="button" data-dismiss="modal">
                Закрыть
            </button>
        </div>
    </form>
</div>
<script src="/js/animals/pages_form.js"></script>
<style>
    textarea {
        max-width: 420px;
    }

    .has-error input,
    .has-error select {
        border: 2px solid red;
    }

    .animals__modal_header {
        background: #afbb71;
        width: 100%;
    }

    .animals__modal_header .modal-title {
        color: #fefdfb;
        line-height: 2;
    }

    .custom-file {
        overflow: hidden;
    }

    .animals .form-control {
        font-size: 14px;
    }

    .animals strong {
        color: #da251c;
    }

    .modal-body .custom-file-label,
    .col-form-label {
        text-align: left;
    }

    .modal-body .custom-file-label::after {
        content: "Обзор"
    }

    .goods__btn_danger {
        background-color: #da251c;
    }

    .modal-body .goods__btn_inform {
        padding: 10px 20px;
    }
</style>



