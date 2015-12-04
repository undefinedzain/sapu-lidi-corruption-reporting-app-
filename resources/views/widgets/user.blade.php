<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($articles as $article)
		<tr>
			<td>John</td>
			<td>john@gmail.com</td>
			<td>London, UK</td>
			<td>edit</td>
		</tr>

	@endforeach
	</tbody>
</table>