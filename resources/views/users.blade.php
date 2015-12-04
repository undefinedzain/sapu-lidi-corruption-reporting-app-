@extends('layouts.dashboard')
@section('page_heading','Tables')

@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-6">
		@section ('table_panel_title','Regular Table')
		@section ('table_panel_body')
		@include('widgets.table', array('class'=>''))
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'table'))
	</div>
	<div class="col-sm-6">
		@section ('btable_panel_title','Bordered Table')
		@section ('btable_panel_body')
		@include('widgets.table', array('class'=>'table-bordered'))
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'btable'))
	</div>
</div>
@stop