function loginComponent() {
    return (
      
         <div className="all-wrapper menu-side with-pattern">
      <div className="auth-box-w">
        <div className="logo-w">
          <a href="index.html"><img alt="" src="assets/img/logo-big.png"/></a>
        </div>
        <h4 className="auth-header">
          Login Form
        </h4>
        <form action="">
          <div className="form-group">
            <label for="">Username</label><input className="form-control" placeholder="Enter your username" type="text"/>
            <div className="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div className="form-group">
            <label for="">Password</label><input className="form-control" placeholder="Enter your password" type="password"/>
            <div className="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div className="buttons-w">
            <button className="btn btn-primary">Log me in</button>
            <div className="form-check-inline">
              <label className="form-check-label"><input className="form-check-input" type="checkbox"/>Remember Me</label>
            </div>
          </div>
        </form>
      </div>
    </div>
         
          
    );
  }
  
  export default loginComponent;