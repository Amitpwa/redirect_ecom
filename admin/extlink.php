<?php
require('top.inc.php');
isAdmin();
if (isset($_GET['type']) && $_GET['type'] != '') {
	$type = get_safe_value($con, $_GET['type']);
	if ($type == 'delete') {
		$id = get_safe_value($con, $_GET['id']);
		$delete_sql = "delete from users where id='$id'";
		mysqli_query($con, $delete_sql);
	}
}
$sql = "SELECT ex.id AS real_id,p.name AS product_name,u.name AS user_name,u.mobile,ex.clicked_on FROM ext_click AS ex JOIN users AS u ON ex.user_id = u.id JOIN product as p ON p.id = ex.product_id";
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Users </h4>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>
										<th class="serial">#</th>
										<th>ID</th>
										<th>Customer Name</th>
										<th>Product</th>
										<th>Mobile</th>
										<th>Clicked on</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									while ($row = mysqli_fetch_assoc($res)) { ?>
										<tr>
											<td class="serial"><?php echo $i++ ?></td>
											<td><?php echo $row['real_id'] ?></td>
											<td><?php echo $row['user_name'] ?></td>
											<td><?php echo $row['product_name'] ?></td>
											<td><?php echo $row['mobile'] ?></td>
											<td><?php echo $row['clicked_on'] ?></td>
											<td>
												<?php
												echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['real_id'] . "'>Delete</a></span>";
												?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.inc.php');
?>