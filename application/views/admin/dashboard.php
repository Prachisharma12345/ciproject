<?php include('header.php'); ?>
<html>
<div class="container" style="margin-top: 50px;">
	<div class="row">
		<a href="adduser" class="btn btn-lg btn-primary">Add Articles </a>
	</div>
</div>
<div class="container" style="margin-top: 50px;">
	<div class="table">
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Article Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($articles)): 
				 foreach ($articles as $art):?>			
				<tr>
					<td>1</td>
					<td><?= $art->article_title; ?></td>
					<td><a href="#" class="btn btn-primary">edit</td>
					<td><a href="#" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="3">No data available</td>
				</tr> 
			
			<?php  endif; ?>
			</tbody>
		</table>
	</div>
</div>
</html>
<?php include('footer.php'); ?>