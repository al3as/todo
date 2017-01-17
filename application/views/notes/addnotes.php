<div class=" header-background font-md text-center "> Add your Note <span class="glyphicon glyphicon-pencil"> </div>
 <div class="row col-lg-offset-2  col-lg-6 margin-top">
    <form action="<?=base_url('notes/postnotes')?>" method="post">
     <div class="form-group font-sm">
     	<label for="notesname">Note title:</label>
     	<input type="text" name="notes_name" id="notesname" class="form-control" placeholder="write note name">
     </div>

     <div class="form-group font-sm">
     	<label for="notescontent">Note Content:</label>
     	<textarea class="form-control" rows="5" id="notescontent" name="content" placeholder="write the content"></textarea>
     </div> 
     <input type="submit" value="Add Note" class="btn btn-primary btn-block btn-lg font-sm ">   
       
     </form>
 </div>
 <script>
 	$('#')
 </script>