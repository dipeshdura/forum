<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign up for an iDiscuss Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="/forum/partials/_handleSignup.php" method="POST">
                    <div class="form-group">
                        <label for="signupEmail">Username</label>
                        <input type="text" class="form-control" id="signupEmail" name ="signupEmail" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyoneelse.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="signupPassword">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="signupcPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" placeholder="Confirm Password">
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

    </div>
  </div>
</div>