<?php include 'header.php'; ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                    </div>
                    <div class="col-lg-12">
	                          <form role="form">

					        <div class="form-group">
					          <label for="Titre">Titre</label>
					            <input type="text" class="form-control" id="Titre" placeholder="Titre">
					        </div>
					
					        <div class="form-group">
					          <label for="Date">Date</label>
					            
					                <div class="row">
					                    <div class='col-sm-6'>
					                        <div class="form-group">
					                            <div class='input-group date' id='datetimepicker1'>
					                                <input type='text' class="form-control" />
					                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					                                </span>
					                            </div>
					                        </div>
					                    </div>
					                    <script type="text/javascript">
					                        $(function () {
					                            $('#datetimepicker1').datetimepicker();
					                        });
					                    </script>
					                </div>
					            
					        </div>      
					
					        <div  class="form-group">         
					            <label for="Categorie" >Catégories</label> <br/>
					          <div class="row form-group">
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox1" value="option1"> 4
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox2" value="option2"> 5
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox3" value="option3"> 6
					            </label>
					          </div>
					          <div class="row form-group">
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox1" value="option1"> 4
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox2" value="option2"> 5
					            </label>
					            <label class="checkbox-inline col-md-1">
					              <input type="checkbox" id="inlineCheckbox3" value="option3"> 6
					            </label>
					          </div>
					        </div>
					
					        <div  class="form-group">         
					          <label for="Option">Options</label> <br/>      
					        <label class="radio-inline">
					          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Public
					        </label>
					        <label class="radio-inline">
					          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Non Public
					        </label>
					        </div>
					        <div class="checkbox">
					          <label>
					            <input type="checkbox"> Mettre en avant
					          </label>
					        </div>
					        
					        <div class="textarea">
					          <label for="Contenu">Contenu</label>
					            <textarea type="text" class="form-control" name="contenu" rows="20"></textarea>
					        </div>
					          
					        <div class="col-xs-12 col-md-6">
					          <input type="submit" value="Validation" class="btn btn-success btn-block btn-lg" tabindex="7"><br>
					        </div>
					        <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-danger btn-block btn-lg">Annuler</a><br>
					        </div>
					
					        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include 'footer.php'; ?>