<?php
function login(){?>

            <form action="index.php" method="POST">
              <h1>Connexion</h1><br/>
			 
            <div>
				
			<div>
			 </div> 
                    	<br/>
				
					<div class="form-group">
						<label class="control-label" for="first-name">
						Surnom
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

						<a href="./inscription.php">S'inscrire?</a>		
					</div>
					
				
            </div>  
            
          
			
			  
			<div class="form-group">
			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align: center">
			<br/>
			<button class="btn btn-info" type="submit" name='submit_form' style="padding-left: 20px; padding-right: 20px"> Se connecter </button>
			</div>
			</div>
		
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                
              </div>
            </form>
      
    
<?php }?>
<?php
function insc($user,$firstname,$name){?>

            <form action="inscription.php" method="POST">
              <h1>S'inscrire</h1><br/>
			 
            <div>
				
			<div>
			 </div> 
                    	<br/>
				
					<div class="form-group">
						<label class="control-label" for="first-name">
						Surnom
						</label>
						<div >
						
						<input type="text" name="user"  id="user" class="form-control"  style="margin-bottom:1px" value="<?php echo $user;?>">
									
						</div>		
					</div>
					<div class="form-group">
						<label class="control-label" for="first-name">
						Prénom
						</label>
						<div >
						
						<input type="text" name="firstname"  id="firstname" class="form-control"  style="margin-bottom:1px" value="<?php echo $firstname;?>">
									
						</div>		
					</div>
					<div class="form-group">
						<label class="control-label" for="first-name">
						Nom
						</label>
						<div >
						
						<input type="text" name="name"  id="name" class="form-control"  style="margin-bottom:1px" value="<?php echo $name;?>">
									
						</div>		
					</div>
					<div class="form-group">
						<label class="control-label" for="first-name">
						Mot de passe
						</label>
						<div>
						
						<input type="password" name="password"  id="password" class="form-control"  style="margin-bottom:1px"></input>
								
						</div>

								
					</div>
					
					<div class="form-group">
						<label class="control-label" for="first-name">
						Confirmer le mot de passe
						</label>
						<div>
						
						<input type="password" name="cpassword"  id="cpassword" class="form-control"  style="margin-bottom:1px"></input>
								
						</div>

								
					</div>
					

            </div>  
            
          
			
			  
			<div class="form-group">
			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align: center">
			<br/>
			<button class="btn btn-info" type="submit" name='submit_form' style="padding-left: 20px; padding-right: 20px"> Se connecter </button>
			</div>
			</div>
		
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                
              </div>
            </form>
      
    
<?php }?>