<?php
use app\models\Pengguna;
use yii\helpers\Html;

$user_id = Yii::$app->user->identity->id_pengguna;
$year = date('Y');
$model = Pengguna::findOne($user_id);
?>
<div class="welcome-index">
	<h3>Maklumat personal</h3>
	<div class="container info personal">
		<div class="row">
			<div class="col-sm-3">
				<?= Html::img('uploads/pengguna/'.$model->photo, 
						[
							'width' => 150, 
							'height' => 150,
							'style' => [
											'margin' => '10px', 
											'border-radius' => '50%',
											'border' => '1px solid #666',
											'box-shadow' => '2px 2px 8px 0px rgba(94,94,94,0.78)',
										]
						]); 

				?>
			</div>
			<div class="col-sm-9">
				<table id="table-personal">
					<tbody>
						<tr>
							<td>
								Nama 
							</td>
							<td>&nbsp;:&nbsp;</td>
							<td>
								<?= $model->nama ?>
							</td>
						</tr>
						<tr>
							<td>
								No. KP 
							</td>
							<td>&nbsp;:&nbsp;</td>
							<td>
								<?= $model->no_kp ?>
							</td>
						</tr>
						<tr>
							<td>
								Jabatan / Unit 
							</td>
							<td>&nbsp;:&nbsp;</td>
							<td>
								
							</td>
						</tr>
						<tr>
							<td>
								Emel 
							</td>
							<td>&nbsp;:&nbsp;</td>
							<td>
								<?= $model->email ?>
							</td>
						</tr>
						<tr>
							<td>
								Level
							</td>
							<td>&nbsp;:&nbsp;</td>
							<td>
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>