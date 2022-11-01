<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>5 My Bestie Di IKMI</title>
	<style>
		body {
    background-color: rgb(100, 149, 237);
    color : rgb(224, 255, 255);

}

h1 {
    cursor: pointer;
    transition: 0.2s;
}

h1:hover {
    letter-spacing: 0.5px;
    text-decoration: underline;
}

table {
    border-collapse: collapse;
    width: 100%;
    max-width: 600px;
}

table th, table td {
    border: 1px solid;
    padding: 10px;
}

table th {
    background-color: darkcyan;
}

table tr {
    background-color: fuchsia;
}

table tr:hover {
    background-color: darkcyan;
}

.nama:hover {
    cursor: pointer;
}

.alamat:hover {
    cursor: pointer;
}

.kembali {
    background-color: royalblue;
    color: white;
    border: none;
    border-radius: 5px;
    display: inline-block;
    padding: 10px;
    transition: 0.2s;
}

.kembali:hover {
    cursor: pointer;
    background-color: plum;
}

.hapus {
    background-color: plum;
    color: white;
    border: none;
    border-radius: 5px;
    display: inline-block;
    padding: 10px;
    transition: 0.2s;
}

.hapus:hover {
    cursor: pointer;
    background-color: plum;
}
	</style>
</head>
<body>
	<h1>Hello World PHP!</h1>
    <h1> Saya Nuraeni (41215739)</h1>
    <h2> 5 My Bestie DI IKMI </h2>
	<div class="content">
		<table>
			<thead>
				<tr>
					<th width="30">No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr id="row_1">
					<td>1</td>
					<td class="nama">Nurkhasanah Fadhila</td>
					<td class="Asal">Cirebon</td>
					<td><button class="hapus" id="hapus_1">Delete</button></td>
				</tr>
				<tr id="row_2">
					<td>2</td>
					<td class="nama">Rosnita Amalia</td>
					<td class="Asal">Cirebon</td>
					<td><button class="hapus" id="hapus_2">Delete</button></td>
				</tr>
				<tr id="row_3">
					<td>3</td>
					<td class="nama">Sangdiah</td>
					<td class="Asal">Cirebon </td>
					<td><button class="hapus" id="hapus_3">Delete</button></td>
				</tr>
				<tr id="row_4">
					<td>4</td>
					<td class="nama">Rotika</td>
					<td class="Asal">Cirebon</td>
					<td><button class="hapus" id="hapus_4">Delete</button></td>
				</tr>
				<tr id="row_5">
					<td>5</td>
					<td class="nama">Putri Riyadi</td>
					<td class="Asal">Cirebon</td>
					<td><button class="hapus" id="hapus_5">Delete</button></td>
				</tr>
			</tbody>
		</table>
		<br>
		
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.nama').click(function(){
				let nama = $(this).text()
				let edit = prompt('Edit Nama:', nama)

				if(!edit) return
				$(this).text(edit)
			})
			$('.alamat').click(function(){
				let alamat = $(this).text()
				let edit = prompt('Edit Alamat:', alamat)

				if(!edit) return
				$(this).text(edit)
			})
			$('.hapus').click(function(){
				let yakin = confirm('Anda yakin ingin menghapusnya?')

				if(!yakin) return
				let id = $(this).prop('id')
				let rid = id.split('_')
				let baris = rid[1]
				$('#row_'+baris).slideUp()
			})
		})
	</script>
<div class="tengah" align="center">
</div>
<br>
</body>
</html>