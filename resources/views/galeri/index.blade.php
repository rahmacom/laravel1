<table border="1">
	<tr style="background-color: pink;" >
		<th> ID </th>
		<th> NAMA </th>
		<th> KETERANGAN </th>
		<th> PATH </th>
		<th> ID USER </th>
	</tr>

@foreach ($galeri as $item)

	<tr> 
		<td> {{ $item->id }} </td>
		<td> {{ $item->nama }} </td>
		<td> {{ $item->keterangan }} </td>
		<td> {{ $item->path }} </td>
		<td> {{ $item->users_id }} <td>
	</tr>

@endforeach