
 <!DOCTYPE html>
    <html lang="en">
    <head>
    
    <title>Custom Templates</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- StyleSheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/jquery.lwMultiSelect.js">

    <!-- Scripts -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "../js/jquery.lwMultiSelect.js"></script>

    <!-- Custom Style -->
    <style type="text/css">
.entry:not(:first-of-type)
{
    margin-top: 10px;
}

.glyphicon
{
    font-size: 12px;
}

	</style>
	</head>

	<body>

	<div class="container">
	<div class="row" style="margin-top:100px;">
	<div class = "col-lg-6" >
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Validation Multiple Form Fields</label>
            <div class="controls"> 
                <form role="form" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                        <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </form>
            <br>
            <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
            </div>
        </div>
		</div>
		<div class = "col-lg-6">
			<form method="post" id="insert_data">
			<select name="country" id="country" class="form-control action">
			 <option value="">Select Country</option>
			 <?php echo $country; ?>
			</select>
			<br />
			<select name="state" id="state" class="form-control action">
			 <option value="">Select State</option>
			</select>
			<br />
			<select name="city" id="city" multiple class="form-control">
			</select>
			<br />
			<input type="hidden" name="hidden_city" id="hidden_city" />
			<input type="submit" name="insert" id="action" class="btn btn-info" value="Insert" />
		   </form>
		</div>
	</div>
</div>

	<script type="text/javascript">
		$(function()
		{
			$(document).on('click', '.btn-add', function(e)
			{
				e.preventDefault();

				var controlForm = $('.controls form:first'),
					currentEntry = $(this).parents('.entry:first'),
					newEntry = $(currentEntry.clone()).appendTo(controlForm);

					newEntry.find('input').val('');
					controlForm.find('.entry:not(:last) .btn-add')
					.removeClass('btn-add').addClass('btn-remove')
					.removeClass('btn-success').addClass('btn-danger')
					.html('<span class="glyphicon glyphicon-minus"></span>');
			}).on('click', '.btn-remove', function(e)
			{
				$(this).parents('.entry:first').remove();

				e.preventDefault();
				return false;
			});
		});
		
		
		
	</script>	
	
	</body>
</html>
