@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<h3>Listagem d3 usu4rios</h3>

			{!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}


		</div>
		<div class="row">
			{!! Table::withContents($users->items())
				->striped()
				->callback('Ações', function($field, $model) {

					$linkEdit = route('admin.users.edit', ['user' => $model->id]);
					$linkShow = route('admin.users.show', ['user' => $model->id]);

					return Button::link(Icon::create('pencil') . ' Editar')->asLinkTo($linkEdit). '|' . 
							 Button::link(Icon::create('folder-open') . ' &nbsp;Ver')->asLinkTo($linkShow);
				}) 

			!!}

			<img src="/img/cs1.png" alt="">
			<img style="float: right;" src="/img/cs2.png" alt="">
		</div>

		{!! $users->links() !!}
	</div>

@endsection


