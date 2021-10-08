<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<style type="text/css">
		table {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		h1, label {
		  font-family: Arial, Helvetica, sans-serif;
		}

		table td, table th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		table th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		}
	</style>
</head>
<body>
	<br>
		<h1>{{$user[0]->fullname}}</h1>
		<label>Email: {{$user[0]->email}}</label><br>
		<label>Mobile: {{$personalinfo[0]->mobilenumber}}</label><br>
		<label>Address: {{$personalinfo[0]->address}}</label><br>
		<label>Birthday: {{$personalinfo[0]->birthday}}</label>
		<br>
		<hr>
		<br>
		<table>
			<thead>
				<tr>
					<th>Skill</th>
					<th>Years of Experience</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($skill as $skills)
				<tr>
		            <td>{{ $skills->skill }}</td>
		            <td>{{ $skills->yearsexp }}</td>
		        </tr>
		        @endforeach
			</tbody>
		</table>
		<br>
		<hr>
		<br>
		<table>
			<thead>
				<tr>
					<th>Reference</th>
					<th>Position</th>
					<th>Company</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($reference as $references)
				<tr>
		            <td>{{ $references->reference }}</td>
		            <td>{{ $references->position }}</td>
		            <td>{{ $references->company }}</td>
		        </tr>
		        @endforeach
			</tbody>
		</table>
</body>
</html>