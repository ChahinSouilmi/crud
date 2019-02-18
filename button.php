<!-- Delete -->
<div class="modal fade" id="del<?php echo $rowm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
        </div>
        <div class="modal-body">
        <?php
            $del=mysqli_query($conn,"select * from infos where id='".$rowm['id']."'");
            $drow=mysqli_fetch_array($del);
        ?>
        <div class="container-fluid">
            <h5><center>Le sous-menu: <strong><?php echo $drow['id']; ?> <strong><?php echo $drow['s_menu_name']; ?></strong></center></h5> 
        </div> 
        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete.php?id=<?php echo $rowm['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
        </div>
        
    </div>
</div> 
</div>
<!--Edit -->
<meta charset="utf-8">
    <div class="modal fade" id="edit<?php echo $rowm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
				mysqli_set_charset($conn ,'utf8');
					$edit=mysqli_query($conn,"select * from infos where id='".$rowm['id']."'");
					$erow=mysqli_fetch_array($edit);
					mysqli_set_charset($conn ,'utf8');
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">

				 
					<div class="row">
						<div class="col-lg-2">
						
							<label style="position:relative; top:7px;">Id:</label>
						</div>
						<div class="col-lg-10 text-success text-light bg-dark">
							<input type="text " readonly  name="id" class="form-control " value="<?php echo $rowm['id'];?>">
						</div>
					</div> 
					<div class="row">
						<div class="col-lg-2">
						<meta charset="utf-8">
							<label style="position:relative; top:7px;">Nom de Page:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="s_menu_name" class="form-control" value="<?php echo $erow['s_menu_name']; mysqli_set_charset($conn ,'utf8'); ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Nom du Lien:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="s_menu_link" class="form-control" value="<?php echo $erow['s_menu_link']; ?>">
							<i class='fas fa-angle-double-right'></i><?php echo "<a href='pagesm.php?id=".$rowm['id']."'> ".$erow['s_menu_link']."</a> "; ?>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Contenu:</label>
						</div>
						<div class="col-lg-10">
							<textarea  name="contenu" class="form-control" rows="10" id="editor1"  
    value=" <?php echo htmlspecialchars($erow['contenu']); ?>"> <?php echo htmlspecialchars($erow['contenu']); ?></textarea>
   
    
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<script>

//The final solution code for all bugs ckeditor in twitter bootstrap3' modal
$.fn.modal.Constructor.prototype.enforceFocus = function() {
        var $modalElement = this.$element;
        $(document).on('focusin.modal',function(e) {
                var $parent = $(e.target.parentNode);
                if ($modalElement[0] !== e.target
                                && !$modalElement.has(e.target).length
                                && $(e.target).parentsUntil('*[role="dialog"]').length === 0) {
                        $modalElement.focus();
                }
        });
};
</script>