<table border="2">
   <tr style="background-color: pink;" >
        <th> ID </th>
        <th> NAMA </th>
        <th> ID USER </th>
    </tr>

@foreach ($kategori_galeri as $item)

    <tr>
        <td> {{ $item->id }} </td>
        <td> {{ $item->nama }} </td>
        <td> {{ $item->users_id }} </td>
    </tr>

@endforeach
