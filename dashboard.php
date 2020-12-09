<?php session_start();
include('../adeyemi.php');
?>
	<?php 
             
// to check if user can have access to portal

if (!isset($_SESSION['email'])) {  

        //redirect to login page
        header(("Location:http://www.adeyemiadeeso.com/login.php"));
        exit();
      }

                  ?>

                  <a href="logout.php">LOG OUT</a>
	<table border="1">
				<thead>
			<tr>
				<th>s/n</th>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>
				<th>Action</th>



			</tr>
		</thead>

		<tbody>
			<?php
			$contact=new Contact("www.adeyemiadeeso.com", "adeyemi3_adeyemi1", "dantealighieri", "adeyemi3_adeyemi");
			$messages= $contact->getallmessages(); //var_dump($message); exit();
			if (count($messages)>1) {
				$kounter=1;
				foreach ($messages as $key => $value) {
					
     //  var_dump($value,$key); exit();
			?>
			<tr>
				<td><?php echo $kounter++; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['email'] ?></td>
				<td><?php echo $value['message'] ?></td>
                  <td>
					<a href="">Edit</a>
					<a href="delete.php?id=<?php echo $value['id'];?>">Delete</a>
				</td>
			</tr>
			<?php
       }
   }
   ?>
		</tbody>

			</table>