<table border="1">
	<tr style="background-color: pink;" >
		<th> ID </th>
		<th> JUDUL </th>
		<th> ISI </th>
		<th> ID USER </th>
	</tr>

@foreach ($pengumuman as $item)

	<tr>
		<td> {{ $item->id }} </td>
		<td> {{ $item->judul }} </td>
		<td> {{ $item->isi }} </td>
		<td> {{ $item->users_id }} </td>
	</tr>

@endforeach