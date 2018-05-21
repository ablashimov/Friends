@extends('adminlte::page')
 
@section('content')
    <h1>Редактирование информации</h1>
    <hr>
	<form action="{{ route('admin.informations.update', $information->id) }}" method="POST" enctype="multipart/form-data" />
		<input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="tittle">Заголовок</label>
			<input type="text" value="{{$information->tittle}}" class="form-control" id="informationTitle"  name="tittle">
		</div>
		<div class="form-group">
			<label for="article">Текст</label>
			<textarea name="article" class="form-control" rows="10">{{$information->article}}</textarea>
		</div>
		<div class="form-group">
			<label for="image">Выбрать изображение</label>
			<input type="file" name="file" id="image">
		</div>
		@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
@endsection