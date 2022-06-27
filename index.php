<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Perpustakaan</title>
	<style>
	*{margin: 0; padding: 0}
 
		.container {
 		 border-bottom: 100px solid #333;
 		 border-top: 100px solid #eee;
 		 display: -webkit-box;
 		 display: -ms-flexbox;
 		 display: flex;
 		 height: 0;
		}
 
		h1 {
		  border: 10px solid #fff;
		  color: #fff;
		  font-size: 100px;
		  margin: auto;
		  mix-blend-mode: difference;
		  padding: 0 50px;
		  text-transform: uppercase;
		  -webkit-transform: translate(0, -50%);
		          transform: translate(0, -50%);
		  -webkit-transition: box-shadow 0.4s;
		  transition: box-shadow 0.4s;
		}
		h1:hover {
		  box-shadow: 0 0 0 30px #555;
		}
		p {width: 900px; margin: auto;}
 
	</style>
<link rel="stylesheet" href="style.css" />
</head>
    <body>
    <div class="container">
		<h1>PERPUSTAKAAN</h1>
    </div>
        <table border="1" width="50%">
            <tr> <th>No</th><th>Data</th> <th>Action</th>
            <tr> <td>1</td><td>Buku</td> <td><a href="https://mugiwaraya.000webhostapp.com/buku/all.php" target="_blank"><button>klik disini</button></a></td> 
            <tr> <td>2</td><td>Anggota</td> <td><a href="https://mugiwaraya.000webhostapp.com/anggota/all.php" target="_blank"><button>klik disini</button></a></td>  
            <tr> <td>3</td><td>Peminjaman</td> <td><a href="https://mugiwaraya.000webhostapp.com/peminjaman/all.php" target="_blank"><button>klik disini</button></a></td>  
            
        </table>
    <div>
    </div>
    </body>
    
</html>