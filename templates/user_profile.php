﻿ <!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

		
		<link rel="stylesheet" type="text/css" href="css/start_page.css"/>
       

	   
        <div id="id01" class="modal">

            <form class="modal-content animate" action="action_add_edit_user.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="resources/example_user.jpg" alt="Avatar" class="avatar" />
                </div>

                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="funcao que vai buscar o username" name="uname" required=required />

                    <label><b>Password</b></label>
                    <input type="password" placeholder="func que vai buscar a password ="psw" required=required />

					<label><b>Nome</b></label>
                    <input type="text" placeholder="func que vai buscar o nome" required=required />

					<label><b>Imagem</b></label>
                    <input type="text" placeholder="func que vai buscar image" name="image" required=required />

					

                    <button type="submit">Alterar</button>
                   
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                   
                </div>
            </form>
        </div>


		<div id="id02" class="modal">

            <form class="modal-content animate" action="action_add_edit_restaurant.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    
                </div>

                <div class="container">
                    <label><b>Name</b></label>
                    <input type="text" placeholder="Nome do Restaurante" name="name" required=required />

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Descricao" ="description" required=required />

					<label><b>Imagem</b></label>
                    <input type="text" placeholder="URL da imagem" name="image" required=required />

					

                    <button type="submit">Adicionar</button>
                   
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                   
                </div>
            </form>
        </div>

		
	 


        <br />
        <input type="text" name="search" placeholder="Search.." />
		
       
        <h2>Utilizador</h2>

        <div class="card">
            <img src="resources/example_user.jpg" alt="Avatar" style="width:100%" />
            <div class="container">
                <h4><b>GetNome</b></h4>
                <p>get username</p>
            </div>
        </div>
        <br />

		

		 <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Editar Utilizador</button>

		 <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Adicionar Restaurante</button>


		 <br />
		 <br />

       <ul class="tab">
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">Restaurantes</a></li>
		</ul>

			<div id="London" class="tabcontent">
			  
			  <p>Lista de restaurantes do utilizador:</p>

			 

			</div>



			 <br />
			  <br />

			

<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
        </script>

		<script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
        </script>

   

			

		
     
	

	