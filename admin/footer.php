            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <?php if(isset($page_type)){ ?>
    <!-- jQuery -->
    <script src="../vendor/pagedown-bootstrap-master/js/jquery.pagedown-bootstrap.combined.min.js"></script>
    
    <!-- Le lift -->
<script type="text/javascript">
$("textarea").pagedownBootstrap({
	'sanatize': false,
	'hooks': [
		{
			'event': 'preConversion',
			'callback': function (text) {
				return text.replace(/\b(a\w*)/gi, "*$1*");
			}
		},
		{
			'event': 'plainLinkText', 
			'callback': function (url) {
				return "This is a link to " + url.replace(/^https?:\/\//, "");
			}
		}
	]
});
</script>

		<!-- JavaScript Includes -->
		<script src="../vendor/upload/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="../vendor/upload/js/jquery.ui.widget.js"></script>
		<script src="../vendor/upload/js/jquery.iframe-transport.js"></script>
		<script src="../vendor/upload/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="../vendor/upload/js/script.js"></script>
		
		<?php
		}	
		?>
		

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../vendor/sb-admin-2/sb-admin-2.js"></script>


</body>

</html>
