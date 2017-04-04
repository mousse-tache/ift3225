<?php
function login(){?>

            <form action="index.php" method="POST">
              <h1>Connexion</h1><br/>
			 
            <div>
				
			<div>	
			 <h2>Paper information</h2>
			 </div> 
                    	<br/>
				
					<div class="form-group">
						<label class="control-label" for="first-name">
						Nom d'utilisateur
						</label>
						<div >
						
						<input type="text" name="user"  id="paper" class="form-control"  style="margin-bottom:1px">
									
						</div>		
					</div>
					<div class="form-group">
						<label class="control-label" for="first-name">
						Mot de passe
						</label>
						<div>
						
						<input type="password" name="password"  id="bibtex" class="form-control"  style="margin-bottom:1px"></input>
								
									
						</div>		
					</div>
					
				
            </div>  
            
          
			
			  
			<div class="form-group">
			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align: center">
			<br/>
			<button class="btn btn-info" type="submit" name='submit_form' style="padding-left: 20px; padding-right: 20px"> Save </button>
			</div>
			</div>
		
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                
              </div>
            </form>
      
    
<?php }?>