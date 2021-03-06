@extends('adminlte::page')

@section('content')
    <style>
        img {
            width: 100%;
            height: auto;
        }
    </style>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Ожидают публикации</h3>
                        <button class="btn btn-default pull-right">
                            <a href="{{route('animals.index')}}">[{{$activ}}] Активные объявления</a>
                        </button>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                {{$animals->render()}}
                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-1">Кличка</th>
                                        <th class="col-xs-1">Вид</th>
                                        <th class="col-xs-1">Порода</th>
                                        <th class="col-xs-1">Пол</th>
                                        <th class="col-xs-1">Возраст</th>
                                        <th class="col-xs-2">Заметки</th>
                                        <th class="col-xs-1">Контакты</th>
                                        <th class="col-xs-2">Главное фото</th>
                                        <th class="col-xs-1">Другие фото</th>
                                        <th colspan="2" class="col-xs-1">Управление</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($animals as $animal)
                                        <tr>
                                            <td>
                                                @if ($animal->name==null) Не указано @endif
                                                {{ $animal->name }}
                                            </td>
                                            <td>
                                                @if($animal->species==1) Кошки
                                                @elseif($animal->species==2) Собаки
                                                @endif
                                            </td>
                                            <td>
                                                @if ($animal->breed == null) Не указанно @endif
                                                {{ $animal->breed }}
                                            </td>
                                            <td>
                                                @if ($animal->sex == 0) Не выбран
                                                @elseif ($animal->sex == 1) Мужской
                                                @elseif ($animal->sex == 2) Женский
                                                @endif
                                            </td>
                                            <td>
                                                @if ($animal->age == null) Не указано @endif
                                                {{ $animal->age }}
                                            </td>
                                            <td>
                                                @if ($animal->notes==null) Не указано @endif
                                                {{ str_limit($animal->notes, $limit = 80, $end = '...') }}
                                            </td>
                                            <td>{{ $animal->contacts }}</td>
                                            <td>
                                                <img class="card-img-right flex-auto d-none d-md-block"
                                                     src="{{asset("storage/$animal->main_foto")}}"
                                                     alt="Главное фото животного">
                                            </td>
                                            <td>
                                                @if(!empty($animal->images))
                                                    @foreach($animal->images as $foto)
                                                        <img src="{{ asset("storage/$foto->name") }}"
                                                             alt="Другие фото животного"
                                                             id="other_foto">
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-info" onclick="edit({{$animal->id}})">
                                                    Опубликовать
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                        data-target="#modal-update"
                                                        onclick="show({{$animal->id}})"><i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$animals->render()}}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <div id="modal-update" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>

    <script type='text/javascript'>

        function edit(id) {
            $.ajax({
                type: 'GET',
                url: '/admin/publication/' + id + '/edit',
                success: function (response) {
                    location.reload();
                }
            });
        }

        function show(id) {
            $.ajax({
                type: 'GET',
                url: '/admin/publication/' + id,
                success: function (response) {
                    $('.modal-content').empty().append(response);
                }
            });
        }
    </script>
@endsection