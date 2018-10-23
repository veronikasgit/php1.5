<?php

$content = file_get_contents('http://university.netology.ru/u/golunova/me/php1.5/content.json');
$json = json_decode($content, true);

?>

<!DOCTYPE>
<html lang="ru">
	<head>
		<title>Домашнее задание к лекции 2.1</title>
		<meta charset="utf-8">
		<style>
		table {
		    border-collapse: collapse;
		    border: 2px solid grey;            }

		th {
		    border: 2px solid grey;
		    padding: 10px 15px;
		}
		 td {
		    border: 1px solid grey;
		    text-align: center;
		    padding: 3px 5px;
		}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>Адрес</th>
				<th>Номер телефона</th>
			</tr>
			<?php foreach ($json as $value): ?>
				<tr>
					<td><?php echo $value['firstName']; ?></td>
					<td><?php echo $value['lastName']; ?></td>
					<td><?php echo "г." . $value['address']['city'] . ", ул." . $value['address']['street'] . ", д." . $value['address']['home']; ?></td>
					<td>
						<?php for ($i = 0; $i < count($value['phoneNumbers']); $i++): ?>
						    <?php echo $value['phoneNumbers'][$i] . '<br>';  ?>                                 
						<?php endfor; ?>      
					</td>      
				</tr>
			<?php endforeach; ?>     
		</table>
	</body>
</html>


