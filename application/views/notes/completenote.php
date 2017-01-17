<div class="header-background font-md text-center">My Notes</div>
	<div class="col-lg-offset-1 col-lg-10">

	<div  style="background-color: #aaa; margin-bottom: 8px; margin-top:26px;padding: 10px; border-radius: 10px;">
		<div class=" font-sm text-center white">The completed notes  </div>
	</div>

	
	<!-- <ul class="pagination">
		
	</ul>
	 -->
	 <?php foreach($notes as $note):?>
		<div class="row  margin-top font-sm">
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<?=$note->notes_name?>
					</div>
					<div class="panel-body">
						<?=$note->content?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="#" disabled class="btn btn-success disabled">Done <span class="glyphicon glyphicon-off"></span> </a>
				<a href="<?=base_url('notes/undone/' . $note->id)?>" class="btn btn-warning">UnDone</a>
				<a href="<?=base_url('notes/deletenote/' . $note->id)?>" class="btn btn-danger delete">Delete</a>
				<a href="#" disabled class="btn btn-info disabled">Edit <span class="glyphicon glyphicon-off"></span> </a>
			</div>
		</div>
		
	<?php endforeach;?>
</div>