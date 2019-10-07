@foreach($categories as $category)
	<tr>
		<td>{{ $category->name }}</td>
		<td>{{ $category->description }}</td>
		<td>{{ $category->status }}</td>
		<td>
			<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-secondary btn-sm">
				<i class="fa fa-edit"></i>
			</a>
		</td>
	</tr>
@endforeach