@extends('layouts.dashboard')
@section('page_heading','Pengguna')

@section('section')
<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-6">
			@section ('htable_panel_title','Admin')
			@section ('htable_panel_body')
			@include('widgets.table', array('class'=>'table-hover'))
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'htable'))
		</div>
		<div class="col-sm-6">
			@section ('htable_panel_title','Pengguna')
			@section ('htable_panel_body')
			@include('widgets.table', array('class'=>'table-hover'))
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'htable'))
		</div>
	</div>
</div>
@stop