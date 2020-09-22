<!DOCTYPE html>
<html>
<head>
	<title>LARAVEL | INPUTED INFO</title>
</head>
<body>
	<table style="width: 100%">
		<tr>
			<th>Name</th>
			<th>SurName</th>
			<th>Adress</th>
			<th>Bio</th>
			<th>Birth Date</th>

		</tr>
		@foreach ($newdata as $data)
		<tr>
			<td> {{ $data["name"] }} </td>
			<td>{{ $data["surname"] }}</td>
			<td>{{ $data["location"] }}</td>
			<td>{{ $data["bio"] }}</td>
			<td>{{ $data["birth"] }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>